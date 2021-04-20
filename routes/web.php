<?php

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\Index\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Index\ProductController;
use App\Models\Admin;

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
    // $role = Role::where('name', 'admin')->first();
    // $permission = Permission::find(1);
    // $permission->assignRole($role);
    // $admin = Admin::find(1);
    // $admin->assignRole($role);
    // $admin->givePermissionTo($permission);

    // $role2 = Role::where('name', 'editor')->first();
    // $permission2 = Permission::find(2);
    // $permission2->assignRole($role2);
    // $admin2 = Admin::find(2);
    // $admin2->assignRole($role2);
    // $admin2->givePermissionTo($permission2);
    // $admin->givePermissionTo($permission2);


    // $role3 = Role::where('name', 'assistant')->first();
    // $permission3 = Permission::find(3);
    // $permission3->assignRole($role3);
    // $admin3 = Admin::find(3);
    // $admin3->assignRole($role3);
    // $admin3->givePermissionTo($permission3);
    // $admin->givePermissionTo($permission3);
    // $admin2->givePermissionTo($permission3);



    
    
    return view('temp');
});


Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::view('/admin/login', 'admin.admin-login');
Route::post('/admin/login', App\Http\Controllers\AdminLoginController::class);
Route::view('/admin', 'admin.admin-dashboard')->name('admin-dashboard')->middleware('role:admin,admin');

Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin','permission:assistant can']], function(){
    Route::resource('settings', App\Http\Controllers\Admin\SettingController::class, ["as" => 'admin'])->middleware('permission:admin can');
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class, ["as" => 'admin'])->middleware('permission:editor can');
    Route::resource('categoryGroups', App\Http\Controllers\Admin\CategoryGroupController::class, ["as" => 'admin'])->middleware('permission:editor can');
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class, ["as" => 'admin'])->middleware('permission:assistant can');
    Route::resource('posts', App\Http\Controllers\Admin\PostController::class, ["as" => 'admin'])->middleware('permission:assistant can');
    Route::resource('images', App\Http\Controllers\Admin\ImageController::class, ["as" => 'admin'])->middleware('permission:assistant can');
    Route::resource('pages', App\Http\Controllers\Admin\PageController::class, ["as" => 'admin'])->middleware('permission:editor can');
    Route::resource('users', App\Http\Controllers\Admin\UserController::class, ["as" => 'admin'])->middleware('permission:admin can');
    Route::resource('admins', App\Http\Controllers\Admin\AdminController::class, ["as" => 'admin'])->middleware('permission:admin can');
});



