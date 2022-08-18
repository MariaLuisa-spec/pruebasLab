<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/pacientes', [App\Http\Controllers\PacienteController::class, 'create']);
Route::get('/home/consulta', [App\Http\Controllers\PacienteController::class, 'index'])->name('home/consulta');
Route::post('/home/consulta/store', [App\Http\Controllers\PacienteController::class, 'store'])->name('home/consulta/store');
//Route::get('/home/pacientes/index/pruebas/index_pruebas/{{$paciente->id}}', [App\Http\Controllers\PacienteController::class, 'index_pruebas'])->name('/home/pacientes/index/pruebas/index_pruebas/{{$paciente->id}}');
Route::get('/home/consulta/{id}', [App\Http\Controllers\PacienteController::class, 'index_pruebas']);
Route::get('/consulta_by_user', [App\Http\Controllers\PacienteController::class, 'consulta_by_users'])->name('/consulta_by_user');

