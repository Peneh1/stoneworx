<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mailController;
use App\Http\Controllers\brandsController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homePageController;
use App\Http\Controllers\portfolioController;

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

Route::get('/', [homePageController::class, 'index']);

Route::get('/portfolio', [portfolioController::class, 'portfolio']);

Route::get('/portfolio/{id}', [portfolioController::class, 'show_portfolio']);

Route::get('/contact', [contactController::class, 'contact']);

Route::post('/contact/send', [mailController::class, 'index']);


Route::get('/brands', [brandsController::class, 'brands']);

Route::get('/about', [homePageController::class, 'about']);






