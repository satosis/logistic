<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;    
use Illuminate\Support\Str;
use App\Models\Transaction;
use App\Models\Order; 
use Carbon\Carbon;


use Illuminate\Support\Facades\Mail;
use App\Mail\TransactionSuccess;
class ShoppingCartController extends Controller
{
    public function index(){
        $category =Category::all();
        $shopping = \Cart::content();
        $viewData =[
            'category'=>$category,
            'title_page'=>'Giỏ hàng'
        ];
        return view('layout.pages.cart.index',$viewData,compact('shopping'));
    }
    public function add($id){   
        $product = Product::find($id);
        if(!$product) return redirect()->to('/');
        \Cart::add([
            'id'       =>$product->id,
            'name'     =>$product->pro_name,
            'qty'      =>1,
            'price'    =>$product->pro_price,    
            
            'weight'   =>'1',
            'options'=>[       
                    'image'  => $product->pro_avatar  ,
                    'sale'   => $product->pro_sale,
            ]
        ]);
    \Session::flash('toastr',[
        'type'      =>'success',
        'message'   =>'Thêm sản phẩm vào giỏ hàng thành công'
    ]);
    return redirect()->back();
    }


    public function delete($rowId){
        \Session::flash('toastr',[
            'type'=>'success',
            'message' =>'Xóa thành công'
        ]);
        \Cart::remove($rowId);
        return redirect()->back();
    }
    public function update(Request $request ,$id){
        if($request->ajax()){
        $qty =$request->qty ?? 1;
        $idProduct =$request->idProduct;
        $product =Product::find($idProduct);

        if(!$product) return response(['messages'=> 'Không tồn tại sản phẩm']);

        if($product->pro_amount <$qty) {
        return response([
            'messages' =>'Hiện tại chúng tôi không đủ số lượng',
            'error'    =>true
        ]);
        }
        \Cart::update($id,$qty); //update the quantity
        return response([
            'messages'=>'Cập nhật thành công',
            'totalMoney'=>\Cart::subtotal(0),
            'totalItem'=>number_price($product->pro_price*$qty,$product->pro_sale, 0, ',', '.'),
            'number'    =>\Cart::count()
            ] );
    }
    }
    public function postPay(Request $request){
        $data =$request->except('_token');  
        if(!\Auth::user()->id){
            \Session::flash('toastr',[
                'type'  =>'error',
                'message' =>'Bạn cần đăng nhập để đặt hàng'
            ]);
            return redirect()->back();
        }
        $data['tst_user_id'] = \Auth::user()->id;
        $data['tst_total_money'] =str_replace(',','.',\Cart::subtotal(0));
        $data['created_at']=Carbon::now();
        $transactionId =Transaction::insertGetId($data);
        if($transactionId){
            $shopping =\Cart::content();
        // Mail::to($request->tst_email)->send(new TransactionSuccess($shopping));
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
        \Cart::destroy();
        return redirect()->intended('/');
    }
}
