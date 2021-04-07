<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\SettingController;
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
    return view('index.home');
});
Route::get('/temp', function () {
    // $role = Role::create(['name' => 'writer']);
    // $permission = Permission::create(['name' => 'edit articles']);
    //admin, editor, writer, customer
    return "ok";
})->middleware('role:admin');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('posts', App\Http\Controllers\Admin\PostController::class, ["as" => 'admin']);
});
