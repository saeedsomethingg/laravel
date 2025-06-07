<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('books.index');
});

Route::get('/books', [BookController::class,'index'])->name('books');

Route::get('/employees',[EmployeeController::class,'index'] )->name('employees');

Route::get('/members', [MemberController::class,'index'])->name('members');