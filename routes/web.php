<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\Admin\AdminUserController;
use App\Http\Controllers\User\UserProfileController;
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

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/admin-users', [AdminUserController::class, 'index'])->name('admin-users');
// profile
Route::get('/profile', [UserProfileController::class, 'index'])->name('profile');

require __DIR__.'/auth.php';
