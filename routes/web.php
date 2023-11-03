<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/about-us', [WebController::class, 'aboutUs'])->name('aboutUs');
Route::get('our-courses', [CourseController::class, 'index'])->name('course.index');
Route::get('/our-courses/{course:slug}', [CourseController::class, 'show'])->name('course.show');
Route::view('/events', 'events.index')->name('events.index');
Route::view('/events/{event}', 'events.show')->name('events.show');
Route::get('/our-volunteers', [TeamController::class, 'index'])->name('teams.index');
Route::get('/our-volunteers/{volunteer}', [TeamController::class, 'show'])->name('teams.show');
Route::view('/become-a-volunteer', 'teams.create')->name('teams.create');
Route::view('/blog', 'blog.index')->name('blog.index');
Route::view('/blog/{post}', 'blog.show');
Route::get('/contact-us', [WebController::class, 'contactUs'])->name('contactUs');
