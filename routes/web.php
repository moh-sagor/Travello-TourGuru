<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Usercontroller 
    Route::get('/allUsers', [UserController::class, 'index'])->name('users.index');
    Route::post('/usersUpdate/{user}', [UserController::class, 'updateRole'])->name('users.update-role');
    Route::post('/updateSubscription/{user}', [UserController::class, 'updateSubscription'])->name('users.update-subscription');

});

require __DIR__ . '/auth.php';
