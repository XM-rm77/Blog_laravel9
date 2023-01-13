<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\PostController;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('index');
    }

    public function post()
    {
        
    }
}
