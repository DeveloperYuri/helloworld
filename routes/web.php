<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukImageController;
use App\Http\Controllers\TemplateController;
use App\Models\ProdukImageModel;
use Illuminate\Support\Facades\Route;

Route::get('/', [TemplateController::class, 'index'])->name('indextemplate');
Route::get('/registration', [TemplateController::class, 'register'])->name('indexregister');
Route::post('/createuser', [TemplateController::class, 'create_user'])->name('indexcreateuser');
// Route::get('dashboard', [TemplateController::class, 'dashboard'])->name('indexdashboard');
Route::get('/login', [TemplateController::class, 'login'])->name('indexlogin');
Route::post('loginauth', [TemplateController::class, 'postlogin'])->name('indexloginauth');
    // Route::get('panel/dashboard', [TemplateController::class, 'dashboard'])->name('indexdashboard');
    Route::get('logout', [TemplateController::class, 'logout'])->name('indexlogout');


Route::get('/homepage', [HomeController::class, 'index'])->name('indexhomepage');
Route::get('/create', [HomeController::class, 'create'])->name('indexcreate');
Route::post('/save', [HomeController::class, 'save'])->name('indexsave');
Route::get('/edit{id}', [HomeController::class, 'edit'])->name('indexedit');
Route::delete('/delete{id}', [HomeController::class, 'destroy'])->name('indexdelete');
Route::post('/update{id}', [HomeController::class, 'update'])->name('indexupdate');
Route::get('/show/{id}', [HomeController::class, 'show'])->name('indexshow');


Route::get('/produkimage', [ProdukImageController::class, 'index'])->name('indexprodukimage');
Route::get('/produkimage/create', [ProdukImageController::class, 'create'])->name('indexprodukimagecreate');
Route::post('/produkimagesave', [ProdukImageController::class, 'store'])->name('indexprodukimagesave');
Route::get('/produkimage/edit{id}', [ProdukImageController::class, 'edit'])->name('indexedit');
Route::delete('/produkimagedelete{id}', [ProdukImageController::class, 'destroy'])->name('indexprodukimagedelete');
Route::post('/produkimageupdate{id}', [ProdukImageController::class, 'update'])->name('indexupdate');
Route::get('/produkimageshow/{id}', [ProdukImageController::class, 'show'])->name('indexshow');


Route::group(['middleware' => 'adminuser'], function () {
Route::get('dashboard', [TemplateController::class, 'dashboard'])->name('indexdashboard');
});
