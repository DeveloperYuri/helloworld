<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('indexhomepage');
Route::get('/create', [HomeController::class, 'create'])->name('indexcreate');
Route::post('/save', [HomeController::class, 'save'])->name('indexsave');
Route::get('/edit{id}', [HomeController::class, 'edit'])->name('indexedit');
Route::delete('/delete{id}', [HomeController::class, 'destroy'])->name('indexdelete');
Route::post('/update{id}', [HomeController::class, 'update'])->name('indexupdate');
Route::get('/show/{id}', [HomeController::class, 'show'])->name('indexshow');
