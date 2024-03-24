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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('user.index');

})->name('index');

Route::get('/register', function () {
    return view('user.register');
});

Route::get('/login', function () {
    return view('user.login');
})->name('login');

Route::post('/login_post',[ApiController::class,'login_post'])->name('login_post');

Route::get('/wel', function () {
    return view('user.wel');
});


Route::get('/employee', function () {
    return view('employee.index');
});

Route::get('/rider', function () {
    return view('rider.index');
});
