<?php

use App\Http\Controllers\ApiController;
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
//เช็ค url api
Route::get('/api',[ApiController::class,'checkApi'])->name('check_api');



Route::get('/', function () {
    return view('welcome');
})->name('welcome');


//ของ user
Route::get('/user',[ApiController::class,'user'])->name('user');
Route::get('/register', function () {
    return view('user.register');
});
Route::get('/login', function () {
    return view('user.login');
})->name('login');
Route::post('/login_post',[ApiController::class,'login_post'])->name('login_post');
Route::post('register_post',[ApiController::class,'register_post'])->name('register_post');
Route::get('/softener',[ApiController::class,'getsoftener'])->name('getsoftener');
Route::get('/order',[ApiController::class,'order'])->name('order');
Route::post('/order_post',[ApiController::class,'order_post'])->name('order_post');
Route::get('/wel',[ApiController::class,'wel'])->name('wel');
Route::get('/status',[ApiController::class,'status'])->name('status');

Route::get('/pay/{id}',[ApiController::class,'pay'])->name('pay');
Route::get('/delete/{id}',[ApiController::class,'Deleteoreder'])->name('delete');

Route::get('/approve/{id}',[ApiController::class,'approve'])->name('approve');
Route::get('/reciver/{id}',[ApiController::class,'reciver'])->name('reciver');
Route::get('/sender/{id}',[ApiController::class,'sender'])->name('sender');

Route::post('/uploadpay',[ApiController::class,'uploadpay'])->name('uploadpay');


Route::get('/pay',[ApiController::class,'pay'])->name('pay');

//employee
Route::get('/employee', function () {
    return view('employee.index');
})->name('eindex');

Route::get('/employee/manage', function () {
    return view('employee.manage');
});
Route::get('/employee/history', function () {
    return view('employee.history');
});
Route::get('/employee/history',[ApiController::class,'history'])->name('history');
Route::get('/ewel',[ApiController::class,'ewel'])->name('ewel');
Route::get('/elogin', function () {return view('employee.login');})->name('elogin');
Route::get('/employee/status',[ApiController::class,'allstatus'])->name('allstatus');
Route::post('/elogin_post',[ApiController::class,'elogin_post'])->name('elogin_post');


Route::get('/rider', function () {
    return view('rider.index');
});
