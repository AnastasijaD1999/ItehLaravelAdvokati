<?php

use App\Http\Controllers\API\AdvokatController;
use App\Http\Controllers\API\AdvokatskaKancelarijaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('advokatska_kancelarija', AdvokatskaKancelarijaController::class);
    Route::resource('advokat', AdvokatController::class);
    Route::post('/logout', [AuthController::class, 'logout']);
});
