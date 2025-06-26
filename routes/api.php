<?php

use App\Http\Controllers\DomainController;
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


Route::get('domains', [DomainController::class, 'index']);
Route::post('domains', [DomainController::class, 'store']);
Route::get('domains/{id}', [DomainController::class, 'show']);
Route::put('domains/{id}', [DomainController::class, 'update']);
Route::delete('domains/{id}', [DomainController::class, 'destroy']);
