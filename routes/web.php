<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/details/{username}', [UserController::class, 'showProfile'])->name('users.details');
Route::get('/site/{username}', [UserController::class, 'showProfile'])->name('user.profile');



Route::middleware('auth')->group(function () {
    // Usercontroller 
    Route::get('/allUsers', [UserController::class, 'index'])->name('users.index');
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('users.dashboard');
    Route::post('/usersUpdate/{user}', [UserController::class, 'updateRole'])->name('users.update-role');
    Route::post('/updateSubscription/{user}', [UserController::class, 'updateSubscription'])->name('users.update-subscription');

    // sitemaps 
    Route::get('/sitemaps', [SitemapController::class, 'index'])->name('sitemaps.index');
    Route::post('/sitemaps/store', [SitemapController::class, 'store'])->name('sitemaps.store');


});

require __DIR__ . '/auth.php';
