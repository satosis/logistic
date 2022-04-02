<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
   public function index(Request $request){
    if(isset($request->search)){
    $search=$request->q;
    $product =Product::where('pro_name','LIKE','%'.$search.'%')->OrderBy('pro_view','desc')->LIMIT(7);
        $res ="";
        foreach($product as $list){ 
        $res .="<li>";
        $id=$list['id'];
        $res .="<a href='chi-tiet-san-pham.php?id=$id'>"; 
        $link=upload().'product/'.$list['img'];
        $res .="<img src='$link'>";
        $res .="<h3>".$list['name']."</h3>";
            if($list['sale'])
        {
            $res .="<span>".number_format($list['price']-$list['sale'],0,'','.')."đ</span>";
        $res .="<cite>". number_format($list['price'],0,'','.')."đ</cite>";
        }
        else{
            $res .="<span>". number_format($list['price'],0,'','.')."đ</span>";
    
        }
        
        $res .="</a></li>";
    }
    exit($res);
    }
   }
}
