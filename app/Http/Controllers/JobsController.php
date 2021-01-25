<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobsController extends Controller
{
    public function index()              
    {
        DB::connection('mysql2');           //Using another database connection.
        return DB::select('select * from users');
    }
}


