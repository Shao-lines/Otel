<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
Route::get('/', [MainController::class, 'home']);
Route::get('/nomera', [MainController::class, 'nomera']);
Route::get('/restoran', [MainController::class, 'restoran']);
Route::get('/pool', [MainController::class, 'pool'])->name('pool');
Route::post('/pool', [MainController::class, 'pool_send']);
Route::get('/krasota', [MainController::class, 'krasota'])->name('krasota');
Route::post('/krasota', [MainController::class, 'krasota_send']);
Route::get('/electro', [MainController::class, 'electro']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/brone', [MainController::class, 'brone'])->name('brone');
Route::post('/brone', [MainController::class, 'brone_send']);

