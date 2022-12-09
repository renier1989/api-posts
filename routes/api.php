<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// // Ruta usada en la Clase 8 del Curso
// Route::apiResource('v1/post', App\Http\Controllers\Api\V1\PostController::class)->only('show');  

// // Ruta usada en la calse 9 del curso 
// Route::apiResource('v1/post', App\Http\Controllers\Api\V1\PostController::class)
// ->only(['index','show'])
// ;


// Ruta usada en la calse 9 del curso  + Reto
Route::apiResource('v1/post', App\Http\Controllers\Api\V1\PostController::class)
->only(['index','show','destroy'])
;

// Route::controller(App\Http\Controllers\Api\V1\PostController::class)->group(function(){
//     Route::get('v1/pruebas', 'pruebas')->name('pruebas');
// });
