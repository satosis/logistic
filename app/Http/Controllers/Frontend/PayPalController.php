<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

class PayPalController extends Controller
{
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

            Session::put('success', 'Thanh toán thành công');
            return Redirect::to('products');  //back to product page

        }
        Session::put('error', 'Thanh toán thất bại');
        return Redirect::to('/'); 
    }
}
