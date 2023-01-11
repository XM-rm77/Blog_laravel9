<?php
use App\Http\Controllers\Admin\index;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.layouts.master');//frontend
});

Route::get('/admin/dashboard', function () {
    return view('index');//backend
});


//Route::get(url('admin/dashboard'), action: AdminController::class, 'index');