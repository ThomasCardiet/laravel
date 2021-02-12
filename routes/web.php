<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\PostController;

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

/*Route::get('/', function () {
    return views('welcome');
});*/

Route::get('/', [WebController::class, 'index']);

//Route::get('/album', [WebController::class, 'album']);
Route::middleware(['auth:sanctum', 'verified'])->get('/album', [WebController::class, 'album']);

Route::resource('/post', PostController::class);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
