<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Cart;

class CategoryController extends Controller
{
   public function index(Request $request){
      $countCard = Cart::count();
      $viewData = [
         'countCard' => $countCard,
         'category'  => Category::all()
      ];
      return response()->json($viewData);
   }
}
