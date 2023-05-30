<?php

use App\Http\Controllers\EstudioController;
use App\Http\Controllers\Paginas;
use Illuminate\Support\Facades\Route;

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

Route::get("/",[Paginas::class,"index"]);
Route::get("/contacto",[Paginas::class,"contacto"]);
Route::get("/menu",[Paginas::class,"menu"]);
Route::get("/estudio",[EstudioController::class,"index"]);