<?php

use App\Http\Controllers\Main;
use App\Http\Controllers\Ajax;
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

// Main Page Route
Route::get('/', [Main::class, 'home']);
Route::get('/home', [Main::class, 'home']);
Route::get('/apikey', [Main::class, 'key']);
Route::get('/documentation', [Main::class, 'doc']);


// Login Route
Route::get('/login', function(){
    return view('auth.login');
});
Route::get('/doLogin', [Main::class, 'loginRun']);
Route::post('/doLogin', function () {
    return redirect('/login');
});

// Regist Route
Route::get('/regist', function(){
    return view('auth.regist');
});
Route::get('/reg', [Main::class, 'reg']);
Route::post('/reg', function () {
    return redirect('/regist');
});

// Logout Route
Route::get('/logout', [Main::class, 'logout']);





// AJAX Route
Route::get('/ajax/doc', [Ajax::class, 'doc']);