<?php

use App\Http\Controllers\CatalogosController;
use App\Http\Controllers\GruposController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentListController;
use App\Http\Resources\AlumnosResource;
use App\Models\Alumno;

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



Route::get('/test',function(){
    return "Hola mundo";
});

//Route::apiResource('/alumnos',StudentListController::class);
Route::apiResource('alumnos',StudentListController::class);

Route::apiResource('catalogos',CatalogosController::class);

Route::apiResource('grupos',GruposController::class);


//Route::apiResource('alumnos',StudentListController::class);