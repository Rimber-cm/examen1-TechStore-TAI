<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MarcaController; // <-- Esta línea es necesaria
use App\Http\Controllers\ProductoController; // <-- Esta línea tambien es necesaria

// Ruta protegida para obtener el usuario autenticado
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas públicas de autenticación
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Rutas del CRUD de Marcas, protegidas por autenticación
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('marcas', MarcaController::class);
});

// Rutas del CRUD de Productos, protegidas por autenticación
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('marcas', MarcaController::class);
    Route::apiResource('productos', ProductoController::class);
});