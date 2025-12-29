<?php


Route::get('/', fn() => view('pages.home'))->name('home');
Route::get('/servicios', fn() => view('pages.servicios'))->name('servicios');
Route::get('/nosotros', fn() => view('pages.nosotros'))->name('nosotros');
Route::get('/contacto', fn() => view('pages.contacto'))->name('contacto');