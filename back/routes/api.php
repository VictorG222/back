<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstadoGlobalController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\VentaController;
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


// Route::get('/usuarios', function(){
//     return 'Obteniendo usuarios';
// });

// Route::post('/usuarios', function(){
//     return 'Creando usuario';
// });


// POST
// PUT
// DELETE



// Route::post('/alumnos', [AlumnosController::class, 'crear']);
// Route::put('/alumnos/{expediente}', [AlumnosController::class, 'modificar']);
// Route::get('/alumnos', [AlumnosController::class, 'obtener']);
// Route::delete('/alumnos/{expediente}', [AlumnosController::class, 'eliminar']);






// Route::get('/edad/{edad}', function($edad){
//     if ($edad >= 18 and $edad < 100){
//         return 'Mayor de edad';
//     } elseif($edad <= 18 and $edad > 0){
//         return 'Menor de edad';
//     }else{
//         return 'Error';
//     }

// });

Route::middleware('auth:sanctum')->group(function() {


    Route::get('/usuarios', [UsuarioController::class, 'obtener']);
    Route::put('/usuarios/{id}', [UsuarioController::class, 'modificar']);
    Route::delete('/usuarios/{id}', [UsuarioController::class, 'eliminar']);

    Route::get('/productos', [ProductoController::class, 'obtener']);
    Route::get('/productos/{id}', [ProductoController::class, 'obtenerUnoSolo']);
    Route::post('/productos', [ProductoController::class, 'crear']);
    Route::put('/productos/{id}', [ProductoController::class, 'modificar']);
    Route::delete('/productos/{id}', [ProductoController::class, 'eliminar']);

    Route::get('/ventas', [VentaController::class, 'obtener']);
    Route::post('/ventas', [VentaController::class, 'crear']);
    Route::put('/ventas/{id}', [VentaController::class, 'modificar']);
    Route::delete('/ventas/{id}', [VentaController::class, 'eliminar']);


















});


// Route::get('/docentes/{matricula}', [DocenteController::class, 'show']);
// Route::get('/estudiantes', [EstudianteController::class, 'listar']);
// Route::get('/citas', [CitaController::class, 'index']);


Route::post('/login', [UsuarioController::class, 'login']);
Route::post('/usuarios/generar-codigo', [UsuarioController::class, 'generar']);
Route::post('/usuarios/cambiar-pass', [UsuarioController::class, 'cambiar']);
Route::post('/usuarios', [UsuarioController::class, 'crear']);

Route::get('/programas/', [ProgramaController::class, 'showAll']);
Route::get('/programas/{id}', [ProgramaController::class, 'show']);
Route::post('/programas', [ProgramaController::class, 'index']);
Route::put('/programas/{id}', [ProgramaController::class, 'update']);
Route::delete('/programas/{id}', [ProgramaController::class, 'destroy']);

Route::get('/proyectos', [ProyectoController::class, 'showAll']);
Route::get('/proyectos/{id}', [ProyectoController::class, 'show']);
Route::post('/proyectos', [ProyectoController::class, 'index']);
Route::put('/proyectos/{id}', [ProyectoController::class, 'update']);
Route::delete('/proyectos/{id}', [ProyectoController::class, 'destroy']);

Route::get('/estados-globales', [EstadoGlobalController::class, 'showAll']);
Route::get('/estados-globales/{id}', [EstadoGlobalController::class, 'show']);
Route::post('/estados-globales', [EstadoGlobalController::class, 'index']);
Route::put('/estados-globales/{id}', [EstadoGlobalController::class, 'update']);
Route::delete('/estados-globales/{id}', [EstadoGlobalController::class, 'destroy']);

Route::get('/areas', [AreaController::class, 'showAll']);
Route::get('/areas/{id}', [AreaController::class, 'show']);
Route::post('/areas', [AreaController::class, 'index']);
Route::put('/areas/{id}', [AreaController::class, 'update']);
Route::delete('/areas/{id}', [AreaController::class, 'destroy']);
