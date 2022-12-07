<?php

namespace App\Http\Controllers;

use DB;

class CreateDatabase extends Controller
{
    public function index()
    {
        DB::unprepared(file_get_contents('watchex.sql'));
        return 'success';
    }
}
