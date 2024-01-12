<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PackageController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/details/{username}', [UserController::class, 'showProfile'])->name('users.details');
Route::get('/site/{username}', [UserController::class, 'showProfile'])->name('user.profile');
Route::get('/packages/create', [PackageController::class, 'create'])->name('packages.create');



Route::middleware('auth')->group(function () {
    // Usercontroller 
    Route::get('/allUsers', [UserController::class, 'index'])->name('users.index');
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('users.dashboard');
    Route::post('/usersUpdate/{user}', [UserController::class, 'updateRole'])->name('users.update-role');
    Route::post('/updateSubscription/{user}', [UserController::class, 'updateSubscription'])->name('users.update-subscription');

    // sitemaps 
    Route::get('/sitemaps', [SitemapController::class, 'index'])->name('sitemaps.index');
    Route::post('/sitemaps/store', [SitemapController::class, 'store'])->name('sitemaps.store');

    // packages 
    Route::get('/packages', [PackageController::class, 'index'])->name('packages.index');
    Route::post('/packages', [PackageController::class, 'store'])->name('packages.store');
    Route::post('/mark-as-read/{package}', [PackageController::class, 'markAsRead']);


});

require __DIR__ . '/auth.php';
