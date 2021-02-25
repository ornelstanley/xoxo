<?php

use Illuminate\Support\Facades\Route;

use App\Models\Trader;
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

Route::post('/search',function(){
    $traders = Trader::where('uid',$request->search_id)->get();
    return view('search',['traders'=>$trader]);
   })->name('search.trader');

Route::get('/login/trader',function(){
    return ;
   })->name('login.trader');
Auth::routes();

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth','verified']], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/trader',[App\Http\Controllers\TraderController::class, 'index'])->name('trader');
Route::get('/entry',[App\Http\Controllers\EntryController::class, 'index'])->name('entry');
Route::get('/wallet',[App\Http\Controllers\WalletController::class, 'index'])->name('wallet');
Route::get('/deposit',[App\Http\Controllers\DepositController::class, 'index'])->name('deposit');
Route::post('/deposit',[App\Http\Controllers\DepositController::class, 'addDeposit'])->name('deposit');
Route::get('/withdraw',[App\Http\Controllers\WithdrawController::class, 'index'])->name('withdraw');
Route::post('/withdraw',[App\Http\Controllers\WithdrawController::class, 'withdrawSubmit'])->name('withdraw');
Route::get('/profile',[App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::post('/profile',[App\Http\Controllers\ProfileController::class, 'updateProfile'])->name('profile');
Route::get('/support',[App\Http\Controllers\SupportController::class, 'index'])->name('support');
Route::middleware(['isPro'])->group(function () {
Route::group(['prefix' => 'pro'], function () {
    //for pro trader dashboard
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('pro.home');
    Route::get('/trader',[App\Http\Controllers\TraderController::class, 'index'])->name('pro.trader');
    Route::get('/deposit',[App\Http\Controllers\DepositController::class, 'index'])->name('pro.deposit');
    Route::get('/withdraw',[App\Http\Controllers\WithdrawController::class, 'index'])->name('pro.withdraw');
    Route::get('/profile',[App\Http\Controllers\ProfileController::class, 'index'])->name('pro.profile');
    Route::post('/profile',[App\Http\Controllers\ProfileController::class, 'updateProfile'])->name('pro.profile');
    Route::get('/support',[App\Http\Controllers\SupportController::class, 'index'])->name('pro.support');
    Route::get('/platform',[App\Http\Controllers\PlatformController::class, 'index'])->name('platform');
});});
Route::middleware(['isAdmin'])->group(function () {
Route::group(['prefix' => 'admin'], function () {
    //for admin dashboard
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.users');
    Route::get('/users/edit/{id}', [App\Http\Controllers\AdminController::class, 'editUser'])->name('admin.edit.users');
    Route::post('/users/edit/{id}', [App\Http\Controllers\AdminController::class, 'postEditUser'])->name('admin.edit.users');
    Route::get('/users/delete/{id}', [App\Http\Controllers\AdminController::class, 'deleteUser'])->name('admin.delete.users');
    Route::get('/users/{id}/newtrade', [App\Http\Controllers\AdminController::class, 'createNewUserTrade'])->name('admin.users.newtrade');
    Route::post('/users/{id}/newtrade', [App\Http\Controllers\AdminController::class, 'postCreateNewUserTrade'])->name('admin.users.newtrade');
    Route::get('/traders', [App\Http\Controllers\AdminController::class, 'traders'])->name('admin.traders');
    Route::get('/traders/new', [App\Http\Controllers\AdminController::class, 'createNewTraders'])->name('admin.traders.new');
    Route::post('/traders/new', [App\Http\Controllers\AdminController::class, 'postCreateNewTraders'])->name('admin.traders.new');
    Route::get('/traders/edit/{id}', [App\Http\Controllers\AdminController::class, 'editTraders'])->name('admin.edit.traders');
    Route::post('/traders/edit/{id}', [App\Http\Controllers\AdminController::class, 'postEditTraders'])->name('admin.edit.traders');
    Route::get('/traders/delete/{id}', [App\Http\Controllers\AdminController::class, 'deleteTraders'])->name('admin.delete.traders');
    Route::get('/trades', [App\Http\Controllers\AdminController::class, 'trades'])->name('admin.trades');
    Route::get('/trades/edit/{id}', [App\Http\Controllers\AdminController::class, 'editTrades'])->name('admin.edit.trades');
    Route::post('/trades/edit/{id}', [App\Http\Controllers\AdminController::class, 'postEditTrades'])->name('admin.edit.trades');
    Route::get('/trades/delete/{id}', [App\Http\Controllers\AdminController::class, 'deleteTrades'])->name('admin.delete.trades');
    Route::get('/withdrawals/edit/{id}', [App\Http\Controllers\AdminController::class, 'editWithdrawals'])->name('admin.edit.withdrawals');
    Route::post('/withdrawals/edit/{id}', [App\Http\Controllers\AdminController::class, 'postEditWithdrawals'])->name('admin.edit.withdrawals');
    Route::get('/withdrawals/delete/{id}', [App\Http\Controllers\AdminController::class, 'deleteWithdrawals'])->name('admin.delete.withdrawals');
    
    Route::get('/deposits', [App\Http\Controllers\AdminController::class, 'deposits'])->name('admin.deposits');
    Route::get('/deposits/edit/{id}', [App\Http\Controllers\AdminController::class, 'editDeposits'])->name('admin.edit.deposits');
    Route::post('/deposits/edit/{id}', [App\Http\Controllers\AdminController::class, 'postEditDeposits'])->name('admin.edit.deposits');
    Route::get('/deposits/delete/{id}', [App\Http\Controllers\AdminController::class, 'deleteDeposits'])->name('admin.delete.deposits');
    Route::get('/settings', [App\Http\Controllers\AdminController::class, 'settings'])->name('admin.settings');
    Route::post('/settings', [App\Http\Controllers\AdminController::class, 'postSettings'])->name('admin.settings');
});});});
Route::get('/logout',function(){Auth::logout(); return redirect()->route('index');})->name('logout');