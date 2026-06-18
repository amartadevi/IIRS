<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ProgramController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/news/{id}', [NewsController::class, 'displayNews'])->name('news');
Route::get('/allnews', [NewsController::class, 'index'])->name('allnews');
Route::get('/news', function () { return redirect()->route('allnews'); });

Route::get('/teacher/{id}', [TeacherController::class, 'displayTeacherProfile'])->name('teacher');
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');

Route::get('/program/{id}', [ProgramController::class, 'displayProgram'])->name('program');
Route::get('/programs', [ProgramController::class, 'index'])->name('programs');


