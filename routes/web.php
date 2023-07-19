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

Route::get('/', [Main::class, 'home']);
Route::get('/home', [Main::class, 'home']);
Route::get('/apikey', [Main::class, 'key']);
Route::get('/documentation', [Main::class, 'doc']);



Route::get('/login', [Main::class, 'login']);
Route::get('/logout', [Main::class, 'logout']);

Route::get('/doLogin', [Main::class, 'loginRun']);
Route::post('/doLogin', function () {
    return redirect('/login');
});






// AJAX Route
Route::get('/ajax/doc', [Ajax::class, 'doc']);