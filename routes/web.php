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
    return view('welcome');
});

Route::get('/about',function(){
    return view('about');
})->name('about');


Route::get('/learn-more',function(){
    return view('learn_more');
})->name('learn-more');

Auth::routes();

Route::get('/login/trader',function(){
 return ;
})->name('login.trader');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
