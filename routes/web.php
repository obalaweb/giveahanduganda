<?php

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

Route::view('/', 'index');
Route::view('/about-us', 'aboutUs');
Route::view('/our-courses', 'courses.index');
Route::view('/our-courses/{course}', 'courses.show');
Route::view('/events', 'events.index');
Route::view('/events/{event}', 'events.show');
Route::view('/our-volunteers', 'teams.index');
Route::view('/our-volunteers/{volunteer}', 'teams.show');
Route::view('/become-a-volunteer', 'teams.create');
Route::view('/blog', 'blog.index');
Route::view('/blog/{post}', 'blog.show');
Route::view('/contact-us', 'contactUs');
