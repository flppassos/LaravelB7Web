<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index']);
Route::get('/sair', [SiteController::class, 'sair']);
Route::get('/usuarios/{qtd}', [SiteController::class, 'quantidade']);
Route::get('/exec1', [SiteController::class, 'exec1']);
Route::get('/exec2', [SiteController::class, 'exec2']);

// Route::get('/', function () {
//     return view('index');
// });
