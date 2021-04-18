<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Index\ProductController;
use App\Http\Controllers\Index\HomeController;
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

Route::get('/', HomeController::class)->name('index.homePage'); //completed

Route::get('/product/{productUrl}', ProductController::class)->name('index.productSinglePage');

Route::get('/temp', function () {
    return "ok";
});


Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function(){
    Route::view('/login', 'admin.admin-login');
    Route::post('/login', App\Http\Controllers\AdminLoginController::class);

    Route::resource('settings', App\Http\Controllers\Admin\SettingController::class, ["as" => 'admin']);
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class, ["as" => 'admin']);
    Route::resource('categoryGroups', App\Http\Controllers\Admin\CategoryGroupController::class, ["as" => 'admin']);
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class, ["as" => 'admin']);
    Route::resource('posts', App\Http\Controllers\Admin\PostController::class, ["as" => 'admin']);
    Route::resource('images', App\Http\Controllers\Admin\ImageController::class, ["as" => 'admin']);
    Route::resource('pages', App\Http\Controllers\Admin\PageController::class, ["as" => 'admin']);
    Route::resource('users', App\Http\Controllers\Admin\UserController::class, ["as" => 'admin']);
    Route::resource('admins', App\Http\Controllers\Admin\AdminController::class, ["as" => 'admin']);
});



