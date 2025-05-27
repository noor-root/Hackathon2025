<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EquipementController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.admindash');
})->name('admin');

// Routes pour l'authentification 
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);


Route::resource('categories', CategorieController::class);
Route::resource('equipements',EquipementController::class);
// Route pour la déconnexion
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Routes pour l'inscription 
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register']);

// Dashboard par rôle

  Route::get('/admin/users/search', [UserController::class, 'search'])->name('admin.users.search');

    // 🔄 Réinitialiser le QR code
    Route::post('/admin/users/{id}/reset-qr', [UserController::class, 'resetQrCode'])->name('admin.users.resetQr');  


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
