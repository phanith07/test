<?php

use App\Http\Controllers\HomeController;
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
    return view('welcome');
});Route::get('hello', function () {
    return view('<h1>Hello !</h1>');
});
Route::get('/', function () {
    return view('welcome');
});Route::get('/product', function () {
    return view('product');
});

Route::get ('/category',[HomeController::class, 'category'] );
