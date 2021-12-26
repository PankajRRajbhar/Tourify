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

Route::get('admin/',[AdminController::class,'login']);
Route::post("/admin/index",[AdminController::class,'authenticateAdmin']);
Route::get("admin/logout",[AdminController::class,'logout']);
