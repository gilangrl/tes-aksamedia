<?php

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\DivisiController;
use App\Http\Controllers\API\KaryawanController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('auth')->group(function () {
   
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::middleware('auth:sanctum')->get('/users', [AuthController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
    Route::middleware('auth:sanctum')->get('/divisions', [DivisiController::class, 'index']);
   

    Route::get('/karyawan', [KaryawanController::class, 'index']);
    Route::middleware('auth:sanctum')->post('/add', [KaryawanController::class, 'store']);
    Route::middleware('auth:sanctum')->put('/edit/{id}', [KaryawanController::class, 'update']);
    Route::middleware('auth:sanctum')->delete('/hapus/{id}', [KaryawanController::class, 'destroy']);
});