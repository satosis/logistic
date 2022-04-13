<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use DB;
class CreateDatabase extends Controller
{
    public function index(){ 
        DB::unprepared(file_get_contents('watchex.sql'));
        return 'success';
    }
}
