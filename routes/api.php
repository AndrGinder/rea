<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PurchasingController;
use App\Http\Controllers\SaleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware'=>'api', 'prefix'=>'api'], function () {
    Route::post('login', [AuthController::class,'login'])->name('login');
    Route::post('logout', [AuthController::class,'logout'])->name('logout');
    Route::post('refresh', [AuthController::class,'refresh'])->name('refresh');
    Route::post('me', [AuthController::class,'me'])->name('me');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('properties', PropertyController::class);
Route::resource('sales', SaleController::class);
Route::resource('offers', OfferController::class);
Route::resource('purchasings', PurchasingController::class);
