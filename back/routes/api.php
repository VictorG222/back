<?php

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



Route::post('/alumnos', function(){
    return 'Creando usuario';
});

Route::get('/alumnos', function(){
    return 'Obteniendo usuario';
});

Route::put('/alumnos/{id}', function($id){
    return 'Modificando usuario ' . $id;
});

Route::delete('/alumnos', function(){
    return 'Eliminando usuario';
});


Route::get('/edad/{edad}', function($edad){
    if ($edad >= 18 and $edad < 100){
        return 'Mayor de edad';
    } elseif($edad <= 18 and $edad > 0){
        return 'Menor de edad';
    }else{
        return 'Error';

    }

});

