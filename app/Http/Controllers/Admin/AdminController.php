<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin; 
use App\Models\User; 
use App\HelpersClass\Date; 
use App\Models\Transaction;
class AdminController extends Controller
{
    public function index(){
      $totalTransaction = \DB::table('transactions')->select('id')->count();
      $totalUser        = User::select('id')->count();
      $totalRating      = \DB::table('ratings')->select('id')->count();
      $hotProduct       = \DB::table('product')->orderByDesc('pro_pay')->limit(5)->get();
      //thống kê trạng thái đơn hàng
      $transactionDefault =\DB::table('transactions')->where('tst_status',1)->select('id')->count();
      $transactionProcess =\DB::table('transactions')->where('tst_status',2)->select('id')->count();
      $transactionSuccess =\DB::table('transactions')->where('tst_status',3)->select('id')->count();
      $transactionCanCel =\DB::table('transactions')->where('tst_status',-1)->select('id')->count();
      $statusTransaction =[
        ['Đã thanh toán',$transactionSuccess,false], 
        ['Đang chờ thanh toán',$transactionProcess,false], 
        ['Đang vận chuyển',$transactionDefault,false],
        ['Đã hủy',$transactionCanCel,false]
        ];
      
      $listDay =Date::getListDay(); 
        //doanh thu theo tháng đã xử lý
        $revenueTransactionMonthDefault = Transaction::where('tst_status',3)
        ->whereMonth('created_at',date('m'))
        ->select(\DB::raw("sum(cast(replace(tst_total_money,'.','') as BIGINT)) as totalMoney"), \DB::raw('DATE(created_at) as day'))
        ->groupBy('day')
        ->get()->toArray(); 

          //doanh thu theo tháng chưa xử lý
          $revenueTransactionMonth = Transaction::where('tst_status',1)
          ->whereMonth('created_at',date('m'))
          ->select(\DB::raw("sum(cast(replace(tst_total_money,'.','') as BIGINT)) as totalMoney"), \DB::raw('DATE(created_at) as day'))
          ->groupBy('day')
          ->get()->toArray();
    $arrRevenueTransactionMonth = [];
    $arrRevenueTransactionMonthDefault = [];
    foreach($listDay as $day) {
        $total = 0;
        foreach ($revenueTransactionMonthDefault as $key => $revenue) {
            if ($revenue['day'] ==  $day) {
                // $total = $revenue['totalMoney'];
                $total = $revenue;

                break;
            }
        }
        $arrRevenueTransactionMonth[] = (int)$total;
        $total=0;
        foreach ($revenueTransactionMonth as $key => $revenue) {
          if ($revenue['day'] ==  $day) {
              // $total = $revenue['totalMoney'];
                $total = $revenue;

              break;
          }
      }
        $arrRevenueTransactionMonthDefault[] = (int)$total;
  
    }  
      $viewDate =[
          'totalTransaction' =>$totalTransaction, 
          'totalUser'        =>$totalUser,
          'totalRating'      =>$totalRating, 
          'hotProduct'       =>$hotProduct,
          'listDay'          =>json_encode($listDay),
          'statusTransaction'=>json_encode($statusTransaction),
          'arrRevenueTransactionMonth'=> json_encode($arrRevenueTransactionMonth),
          'arrRevenueTransactionMonthDefault'=> json_encode($arrRevenueTransactionMonthDefault),
      ]; 
      
        return view('admin.index',$viewDate);
    }

  public function postloginAdmin(Request $request){
    
  }
}
