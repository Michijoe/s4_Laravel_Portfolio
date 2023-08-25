<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/index', [PortfolioController::class, 'index']);
Route::get('/projects', [PortfolioController::class, 'projects']);
Route::get('/resume', [PortfolioController::class, 'resume']);
Route::get('/contact', [PortfolioController::class, 'contact']);

Route::post('/contact', [PortfolioController::class, 'contactForm']);
