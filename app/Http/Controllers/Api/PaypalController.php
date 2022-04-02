<?php

namespace App\Http\Controllers\Api;

use Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class PaypalController extends Controller
{
   public function wehook(Request $request){
    Log::info($request->all());
    $transaction = Transaction::where('tst_code', $request['resource']['id'])->first();
    $transaction->tst_status = 1;
    $transaction->update();
   }
}
