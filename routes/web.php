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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/listing', [App\Http\Controllers\ListingsController::class, 'index']);
Route::get('/listings/create', [App\Http\Controllers\ListingsController::class, 'create']);
Route::post('/listing', [App\Http\Controllers\ListingsController::class, 'index']);
Route::get('/listings/{id}', [App\Http\Controllers\ListingsController::class, 'show']);
Route::get('/listings/{id}/edit', [App\Http\Controllers\ListingsController::class, 'edit']);
Route::post('/listings', [App\Http\Controllers\ListingsController::class, 'store']);
Route::put('/listings/{id}', [App\Http\Controllers\ListingsController::class, 'update']);
Route::delete('/listings/{id}', [App\Http\Controllers\ListingsController::class, 'destroy']);
