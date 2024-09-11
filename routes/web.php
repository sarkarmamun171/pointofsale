<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('master');
// });
Route::get('/',[FrontendController::class,'dashboard'])->name('dashborad');
Route::get('/index',[FrontendController::class,'index'])->name('index');
Route::get('/add-category',[CategoryController::class,'add_category'])->name('add.category');
Route::post('/category-store',[CategoryController::class,'category_store'])->name('category.store');
Route::get('/category-edit/{id}',[CategoryController::class,'category_edit'])->name('category.edit');



