<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Admin Route is Working!';
});

Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminController::class, 'login']);

Route::group(['middleware' => ['auth:admin', 'admin']], function () {
    Route::get('/dashboard/home', [AdminController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
});

require __DIR__.'/auth.php';
