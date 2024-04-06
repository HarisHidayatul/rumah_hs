<?php

use App\Http\Controllers\login_controller;
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

Route::get('/', function () {
    return view('login_page.index');
});

Route::post('/login',[login_controller::class,'login'])->name('login');
Route::get('/logout',[login_controller::class]);
Route::get('/tes',function(){
    return view('login_page.index');
    // return view('main');
});
Route::get('/dashboard', function(){
    return view('dashboard.index');
});
Route::get('/transaction_history', function(){
    return view('transaction_history.index');
});

Route::get('/add_new_expense', function(){
    return view('add_new_expense.index');
});

Route::get('/detail_transaction_expense', function(){
    return view('detail_transaction_expense.index');
});