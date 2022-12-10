<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;

/** CLASE 8 */
// Route::apiResource('v1/post', App\Http\Controllers\Api\V1\PostController::class)->only('show');  

/** CLASE 9 */
// Route::apiResource('v1/post', App\Http\Controllers\Api\V1\PostController::class)
// ->only(['index','show'])
// ;
// Route::controller(App\Http\Controllers\Api\V1\PostController::class)->group(function(){
//     Route::get('v1/pruebas', 'pruebas')->name('pruebas');
// });

/** CLASE 10 */
// Route::apiResource('v1/post', App\Http\Controllers\Api\V1\PostController::class)
// ->only(['index','show','destroy'])
// ;

// /** CLASE 11 */
// Route::apiResource('v1/post', PostV1::class)
// ->only(['index','show','destroy'])
// ;

// Route::apiResource('v2/post', PostV2::class)
// ->only(['index','show'])
// ;

// /** CLASE 14 */
// Route::apiResource('v1/post', PostV1::class)
// ->only(['index','show','destroy'])
// ->middleware('auth:sanctum')
// ;

// Route::apiResource('v2/post', PostV2::class)
// ->only(['index','show'])
// ->middleware('auth:sanctum')
// ;

/** CLASE 15 */
Route::apiResource('v1/post', PostV1::class)
->only(['index','show','destroy'])
->middleware('auth:sanctum')
;

Route::apiResource('v2/post', PostV2::class)
->only(['index','show'])
->middleware('auth:sanctum')
;

Route::post('login' ,
    [
        App\Http\Controllers\Api\LoginController::class,
        'login'
    ] );