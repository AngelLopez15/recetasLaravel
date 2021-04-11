<?php

use App\Http\Controllers\RecetasController;
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

// Las rutas de web usualmente se usan para mostrar una vista

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/nosotros', function () {
//     return view('nosotros');
// });

// Route::get('/nosotros', RecetasController::class);

Route::get('/recetas', RecetasController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
