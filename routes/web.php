<?php

use App\Http\Controllers\CompanyRoleController;
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

Route::get('/',[CompanyRoleController::class,'CompanyPage']);

// view create customer page
Route::get('create-user-page',[CompanyRoleController::class,'createUser'])->name('customer-page');

Route::get('goback-listpage',[CompanyRoleController::class,'goback']);

Route::post('create-user-role',[CompanyRoleController::class,'createUserRole']);

Route::get('search',[CompanyRoleController::class,'search']);