<?php

use App\Http\Controllers\Api\Events\IndexController;
use App\Http\Controllers\Api\Mission\MissionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->group(static function(): void  {
    Route::get('agenda', IndexController::class)->name('agenda');
    Route::put('suscribe', MissionController::class)->name('suscribe');

});
