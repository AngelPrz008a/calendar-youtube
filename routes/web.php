<?php

use App\Http\Controllers\EventoController;
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

Auth::routes();

Route::group(['middleware'=>['auth']], function() {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::resource('evento', EventoController::class);
    Route::get('evento/mostrar', [EventoController::class, 'show']);
    Route::post('evento/{id}', [EventoController::class, 'edit']);
    Route::post('evento/{id}/edit', [EventoController::class, 'update']);
    Route::post('evento/{id}/delete', [EventoController::class, 'destroy']);
});
