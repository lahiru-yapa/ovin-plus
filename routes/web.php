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
Route::get('about-us', [HC::class, "about_us"])->name('about-us');
Route::get('faq', [HC::class, "faq"])->name('faq');
Route::get('team', [HC::class, "team"])->name('team');
Route::get('services-detail', [HC::class, "services_detail"])->name('services-detail');
Route::get('testimonial', [HC::class, "testimonial"])->name('testimonial');
Route::get('services', [HC::class, "services"])->name('services');
Route::get('projects', [HC::class, "projects"])->name('projects');

Route::get('blog', [HC::class, "blog"])->name('blog');
Route::get('contact', [HC::class, "contact"])->name('contact');

Route::get('projects-hotel', [HC::class, "project1"])->name('projectone');
Route::get('projects-construction', [PC::class, "project2"])->name('projecttwo');
Route::get('projects-drivingschool', [PC::class, "project3"])->name('projectthree');
