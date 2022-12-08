<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MangaController;
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

Route::get('/', function () {
    return redirect('index');
});

Route::get('/index', [MangaController::class, 'index']);
Route::get('/create', [MangaController::class, 'createForm']);
Route::post('/create', [MangaController::class, 'create']);
