<?php

use App\Http\Livewire\Contador;
use App\Http\Livewire\Usuarios;
use App\Http\Controllers\Amiibos;
use App\Http\Livewire\ProgramaEdit;
use App\Http\Livewire\ProgramaShow;
use App\Http\Controllers\Controller;
use App\Http\Livewire\ProgramaCreate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Livewire\ProgramaController;
use App\Http\Controllers\amiiboController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\usuarioController as ControllersUsuarioController;
use App\Http\Livewire\EstadoController;
use App\Http\Livewire\EstadoCreate;
use App\Http\Livewire\EstadoEdit;
use App\Http\Livewire\EstadoShow;

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
Route::get('/contador', Contador::class);


Route::get('/estado', EstadoController::class);
Route::get('/estado/create', EstadoCreate::class);
Route::get('/estado/{id}/show', EstadoShow::class);
Route::get('/estado/{id}/edit', EstadoEdit::class);

Route::get('/programa', ProgramaController::class);
Route::get('/programa/create', ProgramaCreate::class);
Route::get('/programa/{id}/show', ProgramaShow::class);
Route::get('/programa/{id}/edit', ProgramaEdit::class);
