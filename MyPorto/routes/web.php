<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

#Route::get('/', function () {
#    return view('welcome');
#});


Route::get('/', [PagesController::class, 'index']);
Route::get('/home', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/tes', [PagesController::class, 'tes']);

Route::prefix('/porto')->group(function(){
    // List dari portofolio
    Route::get('/', [PortoController::class, 'listporto']);
});