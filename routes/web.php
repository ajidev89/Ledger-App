<?php

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
    return redirect('/dashboard');
});
Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/clients', [App\Http\Controllers\ClientController::class, 'index'])->name('clients')->middleware('auth');
Route::get('/add-client', [App\Http\Controllers\ClientController::class, 'addpage'])->name('addpage')->middleware('auth');
Route::post('/add-client', [App\Http\Controllers\ClientController::class, 'add'])->name('addClient')->middleware('auth');
Route::get('/transactions', [App\Http\Controllers\TransactionController::class, 'index'])->name('transactions')->middleware('auth');
