<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'inicio'])->name('home');

Route::get('ficha_modelo/{idAuto?}', [PageController::class, 'fichaModelo'])->name('fichaModelo')->where('idAuto', '[0-9]+');

Route::get('resultados', [PageController::class, 'resultados'])->name('resultados');