<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LoginController;
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

Route::post('/language/{locale}', LanguageController::class);

Route::get('/about', AboutController::class);
Route::get('/posts', [BlogController::class, 'index'])->name('posts.index');
Route::get('/posts/1', [BlogController::class, 'show'])->name('posts.show');

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLogin'])->name('login.show');
    Route::post('login', [LoginController::class, 'login'])->name('login');
});
