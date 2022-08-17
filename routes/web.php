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
Route::get('home/pacientes', [App\Http\Controllers\PacienteController::class, 'create'])->name('home/pacientes');
Route::post('home/pacientes/store', [App\Http\Controllers\PacienteController::class, 'store'])->name('home/pacientes/store');
Route::get('home/pacientes/index', [App\Http\Controllers\PacienteController::class, 'index'])->name('home/pacientes/index');
Route::get('home/pacientes/index/pruebas/{paciente}', [App\Http\Controllers\PacienteController::class, 'index_pruebas'])->name('home/pacientes/index/pruebas/{paciente}');
Route::get('/consulta', [App\Http\Controllers\PacienteController::class, 'consulta_by_users'])->name('/consulta');
//Route::post('home/pacientes/#', [App\Http\Controllers\PacienteController::class, 'create'])->name('home/pacientes/#');
//Route::resource('home/pacientes', App\Http\Controllers\PacienteController::class);
//Route::get('user-delete/{id}',[UserController::class,'delete'])->name('user.delete');