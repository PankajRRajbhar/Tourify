<?php

use App\Http\Controllers\AdminController;
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
/*
Route::get('admin/', function () {
    return view('admin.pages.login');
});*/

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'login'])->name('admin');
    
    Route::post("index",[AdminController::class,'authenticateAdmin'],404)
        ->name('admin_index');
    
    Route::get("logout",[AdminController::class,'logout']);
});
/*
Route::get('admin/',[AdminController::class,'login'])->name('admin');
Route::post("/admin/index",[AdminController::class,'authenticateAdmin'],404)
        ->name('admin_index');
Route::get("admin/logout",[AdminController::class,'logout']);
*/