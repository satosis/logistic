<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\BlogBaseController;
use App\Models\Article;
use App\Models\Category;
class ArticleDetailController extends BlogBaseController
{
    public function index(Request $request ,$slug){
        $category =Category::all();
        $arraySlug =explode('-',$slug);
      
        $id=array_pop($arraySlug);  
           
        if($id){
            $article =Article::find($id);
            $viewData=[
                'article' =>$article,
                'category'=>$category
            ];
        return view('layout.pages.article_detail.index',$viewData);
        }
        return redirect()->to('/');
    }
}
