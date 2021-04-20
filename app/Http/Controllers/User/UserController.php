<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Arr;
use App\Models\Transaction;
class UserController extends Controller
{
    public function index(){
        $category =Category::all();
        $viewData =[
            'category'=>$category,
            'title_page'=>'Quản lý tài khoản'
        ];
        return view('user.index',$viewData);
    }
    public function profile(){
        $category =Category::all();
        $viewData =[
            'category'=>$category,
            'title_page'=>'Thông tin cá nhân'
        ];
        return view('user.profile',$viewData);
    }

  
    public function address(){
        $category =Category::all();
        $viewData =[
            'category'=>$category,
            'title_page'=>'Địa chỉ'
        ];
        return view('user.address',$viewData);
    }
  

    public function orders(){
        $category =Category::all();
        $transaction =Transaction::where('tst_user_id',\Auth::user()->id)->get();
        $viewData =[
            'category'=>$category,
            'transaction'=>$transaction,
            'title_page'=>'Đơn hàng của tôi'
        ];
        return view('user.orders',$viewData);
    }

    
}
