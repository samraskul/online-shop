<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Index\ProductController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Index\HomeController;
use App\Http\Controllers\SettingController;
use App\Models\Admin\CategoryGroup;
use App\Models\Admin\Product;
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
    Route::post('/login', AdminLoginController::class);
});

Route::group(['prefix' => 'admin'], function () {
    Route::resource('settings', App\Http\Controllers\Admin\SettingController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('categoryGroups', App\Http\Controllers\Admin\CategoryGroupController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('posts', App\Http\Controllers\Admin\PostController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('images', App\Http\Controllers\Admin\ImageController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('pages', App\Http\Controllers\Admin\PageController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('users', App\Http\Controllers\Admin\UserController::class, ["as" => 'admin']);
});


