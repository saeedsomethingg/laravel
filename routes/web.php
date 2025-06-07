<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('books');
});

Route::get('/books', function () {
    return view('books');
})->name('books');

Route::get('/employees', function () {
    return view('employees');
})->name('employees');

Route::get('/members', function () {
    return view('members');
})->name('members');