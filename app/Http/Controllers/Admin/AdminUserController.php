<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
class AdminUserController extends Controller
{
    public function index(){
        $user =Users::paginate(10);
        $viewData=[
            'user'=>$user
        ];
        return view('admin.user.index',$viewData);
    }
}
