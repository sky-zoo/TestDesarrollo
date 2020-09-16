<?php

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

Route::get('/modelos', function () {
    return view('modelos');
})->name('modelos');

Route::get('/ficha_modelo', function(){
    return view('fichaModelo');
})->name('fichaModelo');



Route::get('fotos/{numero?}', function($numero = 1){
    $numeros = array();
    for($i = 0; $i <= 10; $i++){
        array_push($numeros, $i);
    }

    return view('fotos',['numero'=>$numeros]);
})->where('numero', '[0-9]+')->name('foto');

Route::get('blog', function(){
    return view('blog');
})->name('noticias');