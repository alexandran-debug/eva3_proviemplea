<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmpleoController;

Route::get('/saludo', function () {
    return response()->json([
        'mensaje' => 'Hola desde Laravel API',
        'status' => 'ok'
    ]);
});

Route::get('/empleos', [EmpleoController::class, 'index']);

Route::post('/empleos', [EmpleoController::class, 'store']);

Route::put('/empleos/{id}', [EmpleoController::class, 'update']);

Route::delete('/empleos/{id}', [EmpleoController::class, 'destroy']);

