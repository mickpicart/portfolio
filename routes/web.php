<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [AccueilController::class, 'index']);

Route::get('contact', [ContactController::class, 'contact']);
Route::post('contact', [ContactController::class, 'confirm']);

// Méthode fallback() en dernière position
Route::fallback(function() {
    return view('404'); // la vue 404.blade.php
 });
