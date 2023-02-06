<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\WallController;

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

// Route::get('/', function () {
//     return view('pages.home');
// });

// Route::get('/login', function () {
//     return view('pages.auth.login');
// });

Route::get('/register', [Register::class, 'index'])->name('register');
Route::post('/register', [Register::class, 'storage']);

Route::get('/login', [Login::class, 'login'])->name('login');
Route::post('/login', [Login::class, 'store']);
Route::post('/logout', [Logout::class, 'store'])->name('logout');

Route::get('/{user:username}', [PostController::class, 'index'])->name('posts.index');
Route::get('/post/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/post', [PostController::class, 'store'])->name('posts.store');
Route::get('/wall/{user:username}', [WallController::class, 'index'])->name('wall.index');

Route::post('/images', [ImagenController::class, 'store'])->name('images.store');