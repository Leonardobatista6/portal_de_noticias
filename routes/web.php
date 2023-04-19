<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/admin', function () {
        return Inertia::render('Auth/login');
    })->name('admin.login');
});

            /* rotas das view */
    Route::get('/', function () {
        return Inertia::render('Menu/Home');
    })->name('home');

    Route::get('/esportes', function () {
        return Inertia::render('Menu/Esportes');
    })->name('esportes');

    Route::get('/economia', function () {
        return Inertia::render('Menu/Economia');
    })->name('economia');

    Route::get('/cultura', function () {
        return Inertia::render('Menu/Cultura');
    })->name('cultura');

    Route::get('/nacionais', function () {
        return Inertia::render('Menu/Nacionais');
    })->name('nacionais');

    Route::get('/blogueiros', function () {
        return Inertia::render('Menu/Blogueiros');
    })->name('blogueiros');


         /* rotas dinamicas */
Route::get('posts/{slug}', [PostController::class,'show']);

