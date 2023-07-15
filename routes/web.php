<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\KangarooController;
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

Route::get('/', function () {
    return redirect('/kangaroos');
});

Route::get('/login', [App\Http\Controllers\AuthenticatedSessionController::class, 'create']);
Route::post('/login', [App\Http\Controllers\AuthenticatedSessionController::class, 'store'])->name('login');
Route::post('/logout', [App\Http\Controllers\AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::middleware('auth')->resource('kangaroos', KangarooController::class)->only([
    'index', 'store', 'update'
]);
