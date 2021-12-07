<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as HC;
use App\Http\Controllers\ProjectTwo as PC;

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

Route::get('/', [HC::class, "index"])->name('home');

Route::get('contact', [HC::class, "contact"])->name('contact');

