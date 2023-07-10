<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Main;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Ambil daftar FasKes
Route::middleware('auth.apikey')->post('/getListFaskes', [Main::class, 'getData'], function () {});
Route::get('/getListFaskes', function () {
    return response()->json(['status' => array("code" => "405", "message" => "Wrong method!")], 403);
});

// Ambil detail dari Faskes
Route::middleware('auth.apikey')->post('/getDetail', [Main::class, 'getDetail'], function () {});
Route::get('/getDetail', function () {
    return response()->json(['status' => array("code" => "405", "message" => "Wrong method!")], 403);
});

// Pencarian FasKes
Route::middleware('auth.apikey')->post('/search', [Main::class, 'search'], function () {});
Route::get('/search', function () {
    return response()->json(['status' => array("code" => "405", "message" => "Wrong method!")], 403);
});

// Cari faskes terdekat
Route::middleware('auth.apikey')->post('/closest', [Main::class, 'closest'], function () {});
Route::get('/closest', function () {
    return response()->json(['status' => array("code" => "405", "message" => "Wrong method!")], 403);
});
