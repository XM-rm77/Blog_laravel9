<?php

use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\NotificationController;

use Illuminate\Support\Facades\Route;

Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'home');
});



Route::group(['prefix' => 'admin/dashboard'], function () {

    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'dashboard')->name('admin.dashboard');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::prefix('categories')->group(function () {
            Route::get('/', 'index')->name('category.index');
            Route::post('/', 'store')->name('category.store');
            Route::any('/update', 'update')->name('category.update');
            Route::get('/delete/{id}', 'delete')->name('category.delete');
        });
    });

    Route::controller(PostController::class)->group(function () {
        Route::prefix('posts')->group(function () {
            Route::get('/', 'index')->name('post.index');
            Route::get('/create', 'create')->name('post.create');
            Route::post('/store', 'store')->name('post.store');
            Route::get('/delete/{id}', 'delete')->name('post.delete');
        });
    });
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('posts', PostsController::class);

Route::get('/posts/user/{user}', [PostsController::class, 'userPost']);

Route::resource('comments', CommentsController::class);
Route::resource('notifications', NotificationController::class);
