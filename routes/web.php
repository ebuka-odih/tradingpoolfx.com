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

Route::view('/', 'pages.index')->name('index');
Route::view('why_us', 'pages.why_us')->name('why_us');
Route::view('legal_policy', 'pages.legal_policy')->name('legal_policy');
Route::view('partnerships', 'pages.partnerships')->name('partnerships');
Route::view('forex_trading', 'pages.forex_trading')->name('forex_trading');
Route::view('broker', 'pages.broker')->name('broker');
Route::view('faqs', 'pages.faqs')->name('faqs');
Route::view('crypto', 'pages.crypto')->name('crypto');
Route::view('spreads', 'pages.spreads')->name('spreads');
Route::view('swap', 'pages.swap')->name('swap');
Route::view('account_type', 'pages.account_type')->name('account_type');
Route::view('meta4', 'pages.meta4')->name('meta4');
Route::view('meta5', 'pages.meta5')->name('meta5');
Route::view('capital', 'pages.capital')->name('capital');
Route::view('fxblue', 'pages.fxblue')->name('fxblue');

Route::view('about', 'pages.about')->name('about');
Route::view('plans', 'pages.plans')->name('plans');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'], function(){

    Route::get('dashboard', "UserController@dashboard")->name('dashboard');
    Route::get('account/details', "UserController@wallet")->name('wallet');
    Route::get('referrals', "UserController@all_referrals")->name('all_referrals');
    Route::get('profile', 'UserController@profile')->name('profile');
    Route::patch('update/profile', 'UserController@updateProfile')->name('updateProfile');
    Route::get('edit/profile', 'UserController@editProfile')->name('editProfile');
    Route::get('security', 'UserController@security')->name('security');
    Route::post('update/security', "UserController@updateSecurity")->name('updateSecurity');

//    Withdrawal Method
    Route::get('account', 'WithdrawMethodController@create')->name('account');
    Route::post('account', 'WithdrawMethodController@store')->name('account.store');
    Route::delete('delete/account/{id}', 'WithdrawMethodController@deleteWallet')->name('deleteWallet');

    Route::get('transactions', 'UserController@transactions')->name('transactions');
    Route::get('collections', 'CollectableController@collections')->name('collections');

    Route::get('account', 'WithdrawMethodController@create')->name('account');
    Route::post('account', 'WithdrawMethodController@store')->name('account.store');

    //  Deposits Routes
    Route::get('deposit/transactions', "DepositController@transactions")->name('deposit.transactions');
    Route::get('pending/transactions', "DepositController@pendingTransactions")->name('pendingTransactions');
    Route::get('deposit', "DepositController@deposit")->name('deposit');
    Route::post('process/deposit', "DepositController@processDeposit")->name('processDeposit');
    Route::get('deposit/payment/QH5H3Q64{id}2GER', "DepositController@payment")->name('payment');
    Route::patch('process/payment/QH5H3Q642GER', "DepositController@processPayment")->name('processPayment');
    Route::get('cancelled/deposit/XCRTRD{id}ERTX8F&', "DepositController@cancelDeposit")->name('cancelDeposit');

    //Withdrawal Routes
    Route::get('withdraw/transactions', "WithdrawController@transactions")->name('withdraw.transactions');
    Route::get('withdraw', "WithdrawController@withdraw")->name('withdraw');
    Route::post('withdraw', "WithdrawController@processWithdraw")->name('processWithdraw');
    Route::get('withdraw/success/RETWYR432{id}3TYW5T', "WithdrawController@success")->name('success');
    Route::get('cancelled/withdrawal/XCRTRD{id}ERTX8F&', "WithdrawController@cancelWithdraw")->name('cancelWithdraw');


    Route::get('trade-room', "TradeController@trade")->name('trade');
    Route::post('place/trade-room', "TradeController@placeTrade")->name('placeTrade');
    Route::get('trade/history', "TradeController@history")->name('trade.history');
    Route::get('close/trade/history', "TradeController@closeTrades")->name('closeTrades');

    Route::get('subscription/plans', "SubscribeController@plans")->name('sub.plans');
    Route::get('subscription/history', "SubscribeController@history")->name('sub.history');
    Route::get('subscription/details/{id}', "SubscribeController@details")->name('sub.details');
    Route::post('process/subscription/plans', "SubscribeController@subscribe")->name('subscribe');
    Route::get('subscription/success/{id}', "SubscribeController@Subsuccess")->name('Subsuccess');

    Route::resource('message', "MessageController");
});

include 'admin.php';
