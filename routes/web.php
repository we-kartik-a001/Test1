<?php

use App\Http\Controllers\studentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/studentForm', [studentsController::class, 'index'])->name('student.index');
