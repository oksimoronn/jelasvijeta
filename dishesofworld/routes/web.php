<?php

use App\Http\Controllers\JelasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;



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


//Route::get('/jelo', [JelasController::class, 'index']);

//Route::get('/jelo{perp}', [JelasController::class, 'perpage']);

Route::controller(JelasController::class)->group(function (){
    Route::get('jelas', 'home');
});



