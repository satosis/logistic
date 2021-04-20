<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\BlogBaseController;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
class BlogController extends BlogBaseController
{
    public function index(){
        $category =Category::all();
        $article =Article::where([
            'a_active' =>1
        ])
        ->select('id','a_name','a_slug','a_description','a_content','a_avatar')
        ->orderByDesc('id')
        ->paginate(20);
        
        $viewData=[
            'article' => $article,
            'category'=> $category,
            'productToPay' =>$this->getProductTop()
        ];
        return view('frontend.article.index',$viewData);
    }
}
