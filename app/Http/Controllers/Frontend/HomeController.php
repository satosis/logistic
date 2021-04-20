<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;
class HomeController extends Controller 
{   
    public function index(){ 
        $category    =Category::all();
        $product     =Product::all();
        // chọn sản phẩm sắp xếp theo id ( sản phẩm mới)
        $productsAccessoriess =Product::where( 'pro_active',0)
        ->where('pro_category','>',20) 
        ->orderBydesc('pro_pay')
        ->limit(10)
        ->select('id','pro_name','pro_slug','pro_sale','pro_amount','pro_avatar','pro_price')
        ->get();
         // chọn sản phẩm sắp xếp theo hot (sản phẩm hot)
         $productsGlass=Product::where( 'pro_active',0)
            ->where('pro_category','>',10) 
            ->where('pro_category','<',21) 
            ->orderBydesc('pro_pay')
            ->limit(10)
            ->select('id','pro_name','pro_slug','pro_sale','pro_amount','pro_avatar','pro_price')
            ->get();
        // chọn sản phẩm sắp xếp theo hot (sản phẩm hot)
        $productsWatch =Product::where( 'pro_active',0)
            ->where('pro_category','<',11) 
            ->orderBydesc('pro_pay')
            ->limit(10)
            ->select('id','pro_name','pro_slug','pro_sale','pro_amount','pro_avatar','pro_price')
            ->get();
        $listProduct1 =Product::where( 'pro_active',0)
        ->where('pro_category',1) 
        ->orderBydesc('pro_pay')
        ->limit(10)
        ->select('id','pro_name','pro_slug','pro_sale','pro_amount','pro_avatar','pro_price')
        ->get();
        $listProduct2 =Product::where( 'pro_active',0)
        ->where('pro_category',2) 
        ->orderBydesc('pro_pay')
        ->limit(10)
        ->select('id','pro_name','pro_slug','pro_sale','pro_amount','pro_avatar','pro_price')
        ->get();
        $listProduct3 =Product::where( 'pro_active',0)
        ->where('pro_category',3) 
        ->orderBydesc('pro_pay')
        ->limit(10)
        ->select('id','pro_name','pro_slug','pro_sale','pro_amount','pro_avatar','pro_price')
        ->get();
        $listProduct4 =Product::where( 'pro_active',0)
        ->where('pro_category',4) 
        ->orderBydesc('pro_pay')
        ->limit(10)
        ->select('id','pro_name','pro_slug','pro_sale','pro_amount','pro_avatar','pro_price')
        ->get();
        $listProduct5 =Product::where( 'pro_active',0)
        ->where('pro_category',5) 
        ->orderBydesc('pro_pay')
        ->limit(10)
        ->select('id','pro_name','pro_slug','pro_sale','pro_amount','pro_avatar','pro_price')
        ->get();
        $listProduct6 =Product::where( 'pro_active',0)
        ->where('pro_category',6) 
        ->orderBydesc('pro_pay')
        ->limit(10)
        ->select('id','pro_name','pro_slug','pro_sale','pro_amount','pro_avatar','pro_price')
        ->get();
        $listProduct7 =Product::where( 'pro_active',0)
        ->where('pro_category',7) 
        ->orderBydesc('pro_pay')
        ->limit(10)
        ->select('id','pro_name','pro_slug','pro_sale','pro_amount','pro_avatar','pro_price')
        ->get();
        $viewData=[
            'category'            =>$category,
            'product'             =>$product, 
            'productsWatch'       =>$productsWatch,
            'productsGlass'       =>$productsGlass,
            'productsAccessoriess'=>$productsAccessoriess,
            'title_page'          =>'Đồng hồ Thụy Sỹ, đồng hồ nam, đồng hồ nữ chính hãng cao cấp',
            'listProduct1'        =>$listProduct1,
            'listProduct2'        =>$listProduct2,
            'listProduct3'        =>$listProduct3,
            'listProduct4'        =>$listProduct4,
            'listProduct5'        =>$listProduct5,
            'listProduct6'        =>$listProduct6,
            'listProduct7'        =>$listProduct7
        ];
        return view('welcome',$viewData);
    }

}
