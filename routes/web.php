<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('contacto', function(){
    return view('contacto');
})->name('contacto');

Route::get('nosotros', function(){
    return view('nosotros');
})->name('nosotros');

Route::get('servicios', function(){
    return view('servicios');
})->name('servicios');