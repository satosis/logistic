<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;    
use Illuminate\Support\Str;
use App\Models\Transaction as Trans;
use App\Models\Order; 
use Carbon\Carbon;
use Cart;

use Illuminate\Support\Facades\Mail;
use App\Mail\TransactionSuccess;

use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;

/** All Paypal Details class **/
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;
use Notification;
use Stripe\Stripe;
class ShoppingCartController extends Controller
{
    private $_api_context;
    public function __construct()
    { 
        //paypal
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);

        //stripe
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
    }  
    public function index(){
        $category =Category::all();
        $shopping = Cart::content();
        $total =0;
        $viewData =[
            'total'=>$total,
            'category'=>$category,
            'title_page'=>'Giỏ hàng'
        ];
        return view('layout.pages.cart.index',$viewData,compact('shopping'));
    }
    public function add($id){   
        $product = Product::find($id);
        if(!$product) return redirect()->to('/');
        Cart::add([
            'id'       => $product->id,
            'name'     => $product->pro_name,
            'qty'      => 1,
            'price'    => $product->pro_price, 
            'weight'   => '1',
            'options'=> [       
                'image'  => $product->pro_avatar  ,
                'sale'   => $product->pro_sale,
            ]
        ]);
        return redirect()->back();
    }
    public function delete($rowId){
        \Session::flash('toastr',[
            'type'=>'success',
            'message' =>'Xóa thành công'
        ]);
        Cart::remove($rowId);
        return redirect()->back();
    }
    //update cart
    public function update(Request $request ,$id){
        if($request->ajax()){
            $qty =$request->qty ?? 1;
            $idProduct =$request->idProduct;
            $product =Product::find($idProduct);

            if(!$product) return response(['messages'=> 'Không tồn tại sản phẩm']);

            if($product->pro_amount <$qty) {
            return response([
                'messages' => 'Hiện tại chúng tôi không đủ số lượng',
                'error'    => true
            ]);
            }
            Cart::update($id,$qty); //update the quantity
            return response([
                'messages'=>'Cập nhật thành công',
                'totalMoney'=>Cart::subtotal(0),
                'totalItem'=>number_price($product->pro_price*$qty,$product->pro_sale, 0, ',', '.'),
                'number'    =>Cart::count()
                ] );
        }
    }
    public function postPay(Request $request){ 
        $data =$request->except('_token','amount','submit','product');   
        $data['tst_user_id'] = \Auth::user()->id;
        $data['created_at']=Carbon::now();
        //Thanh toán khi nhận hàng
        if($request->submit == 1){
            $data['tst_total_money'] = $request->amount;
            $this->storeTransaction($data);
        } 
        
        //Thanh toán bằng paypal
        if($request->submit == 2){
            $data['tst_type'] = 2;
            $data['tst_total_money'] = $request->amount/23000;
            $this->storeTransaction($data);

            $payer = new Payer();
            $payer->setPaymentMethod('paypal');
     

            $item_1 = new Item(); 
            $item_1->setName('Tổng tiền') /** item name **/
                ->setCurrency('USD')
                ->setQuantity(1)
                ->setPrice($data['tst_total_money'] ); /** unit price **/
    
            $item_list = new ItemList();
            $item_list->setItems(array($item_1));
    
            $amount = new Amount();
            $amount->setCurrency('USD')
                ->setTotal($data['tst_total_money'] );
    
            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setItemList($item_list)
                ->setDescription('');
    
            $redirect_urls = new RedirectUrls();
            $redirect_urls->setReturnUrl(URL::to('status')) /** Specify return URL **/
                ->setCancelUrl(URL::to('status'));
    
            $payment = new Payment();
            $payment->setIntent('Sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirect_urls)
                ->setTransactions(array($transaction));
            try {
    
                $payment->create($this->_api_context);
    
            } catch (\PayPal\Exception\PPConnectionException $ex) {
    
                if (\Config::get('app.debug')) {
                    \Session::flash('toastr',[
                        'type'      =>'error',
                        'message'   =>'Quá thời gian kết nối'
                    ]);
                    return redirect()->back();
    
                } else {
                    \Session::flash('toastr',[
                        'type'      =>'error',
                        'message'   =>'Đã xảy ra lỗi ,xin lỗi vì sự bất tiện này'
                    ]);
                    return redirect()->back();
    
                }
    
            }
    
            foreach ($payment->getLinks() as $link) {
    
                if ($link->getRel() == 'approval_url') {
    
                    $redirect_url = $link->getHref();
                    break;
    
                }
    
            }
    
            /** add payment ID to session **/
            Session::put('paypal_payment_id', $payment->getId());
    
            if (isset($redirect_url)) {
    
                /** redirect to paypal **/
                return Redirect::away($redirect_url);
    
            }
    
            \Session::flash('toastr',[
                'type'      =>'error',
                'message'   =>'Lỗi không xác định'
            ]);
            return redirect()->back();
    
        }

            return redirect()->intended('/');
    }
    //store transaction to database
    public function storeTransaction($data){
        $transactionId =Trans::insertGetId($data);
        if($transactionId){
            $shopping =Cart::content();
        Mail::to($data['tst_email'])->send(new TransactionSuccess($shopping));
            foreach($shopping as $key =>$item){
                Order::insert([
                    'od_transaction_id'=>$transactionId,
                    'od_product_id'    =>$item->id, 
                    'od_sale'          =>$item->options->sale,
                    'od_qty'           =>$item->qty,
                    'od_price'         =>$item->price
                ]);
                //Tăng số lượt mua của sản phẩm
                \DB::table('product')
                     ->where('id',$item->id)
                     ->increment("pro_pay");    
            }
        }
        
        \Session::flash('toastr',[
            'type'      =>'success',
            'message'   =>'Đặt hàng thành công'
        ]);
        Cart::destroy();
        return 1;
    } 

    //check status payment of paypal
    public function getPaymentStatus()
    {
        $request=request();//try get from method

        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        //if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
        if (empty($request->PayerID) || empty($request->token)) {
            Session::put('error', 'Thanh toán thất bại');
            return Redirect::to('/');
        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        //$execution->setPayerId(Input::get('PayerID'));
        $execution->setPayerId($request->PayerID);

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {

            \Session::flash('toastr',[
                'type'      =>'success',
                'message'   =>'Thanh toán thành công'
            ]);
            //add update record for cart
            return Redirect::to('/');  //back to product page

        }

        Session::put('error', 'Thanh toán thất bại');
        return Redirect::to('/'); 

    }

}