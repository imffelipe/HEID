<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paginacontroller;
use App\Http\Controllers\pqrsController;

route::get('/',[paginacontroller::class,'inicio'])->name('inicio');
route::get('/',[paginacontroller::class,'comofunciona'])->name('comofunciona');
route::get('/',[paginacontroller::class,'nosotros'])->name('nosotros');

Route::pos('/pqrs', [PqrsController::class, 'tienda'])->name('pqrs.tienda');


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/como-funciona', function () {
    return view('pages.como-funciona');
})->name('como-funciona');

Route::get('/nosotros', function () {
    return view('pages.nosotros');
})->name('nosotros');

Route::prefix('modulos')->name('modulos.')->group(function () {
    Route::get('/kids',     fn() => view('modulos.kids'))    ->name('kids');
    Route::get('/silver',   fn() => view('modulos.silver'))  ->name('silver');
    Route::get('/personal', fn() => view('modulos.personal'))->name('personal');
});
