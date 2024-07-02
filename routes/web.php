<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\Servicios2Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/contacto', 'contacto')->name('contacto');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');
Route::get('nosotros', function(){
    return view('nosotros');
})->name('about');

Route::resource('servicios',Servicios2Controller::class);
