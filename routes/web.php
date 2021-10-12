<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MentionsController;
use App\Http\Controllers\PortfolioController;

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

Route::get('/', function () {return redirect()->route('accueil');});

Route::get('/accueil', [AccueilController::class, 'index'])->name('accueil');

Route::get('/accueil', [PortfolioController::class, 'index'])->name('accueil');

Route::get('contact', [ContactController::class, 'contact']);
Route::post('contact', [ContactController::class, 'confirm']);

Route::get('mentions', [MentionsController::class, 'index']);

Route::fallback(function() {return view('404'); });