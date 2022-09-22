<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
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



// // GET
// Route::get('/saludo', function(){
//     return 'Hola';
// });


// Route::get('/despedida', function(){
//     return 'Adios';
// });


Route::get('/usuarios', function(){
    return 'Obteniendo usuarios';
});

Route::post('/usuarios', function(){
    return 'Creando usuario';
});


// POST
// PUT
// DELETE



Route::post('/alumnos', [AlumnosController::class, 'crear']);
Route::put('/alumnos/{expediente}', [AlumnosController::class, 'modificar']);
Route::get('/alumnos', [AlumnosController::class, 'obtener']);
Route::delete('/alumnos/{expediente}', [AlumnosController::class, 'eliminar']);






Route::get('/edad/{edad}', function($edad){
    if ($edad >= 18 and $edad < 100){
        return 'Mayor de edad';
    } elseif($edad <= 18 and $edad > 0){
        return 'Menor de edad';
    }else{
        return 'Error';
    }

});


Route::get('/usuarios', [UsuarioController::class, 'obtener']);
Route::post('/usuarios', [UsuarioController::class, 'crear']);
Route::put('/usuarios/{expediente}', [UsuarioController::class, 'modificar']);
Route::delete('/usuaris/{expediente}', [UsuarioController::class, 'eliminar']);


Route::get('/productos', [ProductoController::class, 'obtener']);
