<?php

use Illuminate\Support\Facades\Route;

//Vista por defecto cuando abra la URL de la pagina web
Route::get('/', function () {
    return view('index');
});

//Vista Principal de la pagina
Route::get('/index', function () {
    return view('index');
});

//Vista Sobre Nosotros
Route::get('/sobrenosotros', function () {
    return view('sobrenosotros');
})->name('sobrenosotros');
