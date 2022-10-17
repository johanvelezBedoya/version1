<?php

use App\Http\Controllers\Api\BuzonController;
use App\Http\Controllers\Api\DepartamentoController;
use App\Http\Controllers\Api\EmpleoController;
use App\Http\Controllers\Api\EmprendimientoController;
use App\Http\Controllers\Api\InversionistaController;
use App\Http\Controllers\Api\PublicacioneController;
use App\Http\Controllers\Api\UserController;
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



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('buzons', [BuzonController::class, 'store'])->name('api.v1.buzons.store');

// Route::get('buzons', [BuzonController::class, 'index'])->name('api.v1.buzons.index');




Route::apiResource('users', UserController::class)->names('api.v1.users');

Route::apiResource('emprendimientos', EmprendimientoController::class)->names('api.v1.emprendimientos');

Route::apiResource('publicaciones', PublicacioneController::class)->names('api.v1.publicaciones');

Route::apiResource('inversionistas', InversionistaController::class)->names('api.v1.inversionistas');

Route::apiResource('empleos', EmpleoController::class)->names('api.v1.empleos');

Route::apiResource('departamentos', DepartamentoController::class)->names('api.v1.departamentos');

Route::apiResource('buzons', BuzonController::class)->names('api.v1.buzons');