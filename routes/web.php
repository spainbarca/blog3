<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas'=>'curso'])->names('cursos');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('nosotros','nosotros')->name('nosotros');

Route::get('contactanos',[App\Http\Controllers\ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos',[App\Http\Controllers\ContactanosController::class, 'store'])->name('contactanos.store');
