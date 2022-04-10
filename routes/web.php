<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/',[pagesController::class,"index"]);
// // Route::get('/profile',"pagesController@Profile");
// Route::get('/prof', function () {
//     return view('pages.index');
// });

Route::resource('/blog',PostController::class);
// Route::get('/login',[AuthController ::class,"index"]);s
// Route::post("/store",[PostController::class,"store"]);

   
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');