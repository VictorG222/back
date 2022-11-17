<?php

use App\Http\Controllers\amiiboController;
use App\Http\Controllers\Amiibos;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\usuarioController as ControllersUsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/amiibos', [amiiboController::class, 'index']);
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/asset', [AssetController::class, 'index']);
