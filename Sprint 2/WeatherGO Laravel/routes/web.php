<?php

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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/menu-main', [App\Http\Controllers\Controller::class, 'menuMain'])->name('main');
Route::get('/menu-footer', [App\Http\Controllers\Controller::class, 'menuFooter'])->name('footer');
Route::get('/menu-colors', [App\Http\Controllers\Controller::class, 'menuColors'])->name('colors');
Route::get('/page-about', [App\Http\Controllers\Controller::class, 'about'])->name('about');

Auth::routes(['verify' => true]);

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/check-weather', [App\Http\Controllers\HomeController::class, 'weather'])->name('weather');
Route::get('/galery', [App\Http\Controllers\HomeController::class, 'galery'])->name('galery');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::post('/profile', [App\Http\Controllers\HomeController::class, 'storeProfile'])->name('storeProfile');
Route::get('/upload-image', [App\Http\Controllers\HomeController::class, 'uploadImage'])->name('uploadImage');
Route::post('/upload-image', [App\Http\Controllers\HomeController::class, 'storeImage'])->name('storeImage');
Route::get('/upload-galery', [App\Http\Controllers\HomeController::class, 'uploadGalery'])->name('uploadGalery');
Route::post('/upload-galery', [App\Http\Controllers\HomeController::class, 'storeGalery'])->name('storeGalery');
Route::post('/feedback', [App\Http\Controllers\HomeController::class, 'storeFeedback'])->name('storeFeedback');
Route::get('/disqus', [App\Http\Controllers\HomeController::class, 'discuss'])->name('discuss');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
