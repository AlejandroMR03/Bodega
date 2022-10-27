<?php

use App\Http\Controllers\ClienteController;
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
    return view('welcome');
})->name('home');

Route::get('/cliente', function () {
    return view('cliente.index');
})->name('show');

Route::get('cliente/edit/{id?}',[ClienteController::class,'edit'])->name('edit');
Route::resource('cliente',ClienteController::class);

Route::get('cliente/create',[ClienteController::class,'create']);




