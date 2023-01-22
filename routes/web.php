<?php

use Lib\Route;
use App\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', function () {
    return 'Hello desde contacto';
});

Route::get('/about', function () {
    return 'Hello desde acerca de';
});

Route::get('cursos/:slug', function ($slug) {
    return 'Hello desde cursos ' . $slug;
});


Route::dispatch();
