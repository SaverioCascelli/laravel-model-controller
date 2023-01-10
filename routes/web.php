<?php

use App\Http\Controllers\Guest\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/about-us', [PageController::class, 'about_us'])->name('about_us');

Route::get('/movies', [PageController::class, 'movies'])->name('movies');

Route::get('/movie-detail/{id}', [PageController::class, 'movieDetail'])->name('movieDetail');
