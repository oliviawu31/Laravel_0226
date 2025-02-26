<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('dinotaeng.index');
// })->name('dinotaeng.index');

// Route::get('/', function () {
//     return view('student.index');
// })->name('students.index');

Route::resource('/', StudentController::class);