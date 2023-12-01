<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\Admin\HomeController;
use App\Http\Controllers\Area;
use App\Http\Controllers\Libro;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', [HomeController::class,'index' ] 
);

Route::get('/', function () {
    return view('index');
});

Route::get('/guerrero/area', [Area::class, 'vistaAreas']);
Route::get('/guerrero/libro', [Libro::class, 'vistaLibros']);
Route::get('/guerrero/libreria', [Libreria::class, 'vistaLibreria']);



