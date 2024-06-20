<?php

use App\Http\Controllers\Servicios2Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('contacto', function(){
    return view('contacto');
})->name('contact');

Route::get('nosotros', function(){
    return view('nosotros');
})->name('about');

Route::resource('servicios',Servicios2Controller::class);