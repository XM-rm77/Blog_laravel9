<?php
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminController;
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

Route::get('/', function () {
    return view('frontend.layouts.master');//frontend
});



Route::get(url('admin/dashboard'), action: AdminController::class, 'index');*/


Route::controller(SiteController::class)->group(function(){
    Route::get('/', 'home');
});

Route::group(['prefix' => 'admin/dashboard'], function(){

    Route::controller(AdminController::class)->group(function(){
        Route::get('/', 'dashboard')->name('admin.dashboard');
    });

    Route::controller(CategoryController::class)->group(function(){
        Route::prefix('categories')->group(function(){
            Route::get('/', 'index')->name('categories.index');
            Route::post('/', 'store')->name('categories.store');
        });
    });

});