<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WebController::class, 'index'])->name('index'); /* Creating a route that could link to index page*/
Route::get('/aboutus', [WebController::class, 'aboutus'])->name('aboutus'); /* Creating a route that could link to aboutus page*/
Route::get('/contactus', [WebController::class, 'contactus'])->name('contactus'); /* Creating a route that could link to contactus page*/
Route::get('/menu', [WebController::class, 'menu'])->name('menu'); /* Creating a route that could link to menu page*/
Route::get('/login', [WebController::class, 'login'])->name('login'); /* Creating a route that could link to login page*/
Route::get('/register', [WebController::class, 'register'])->name('register'); /* Creating a route that could link to register page*/
Route::get('/info', [WebController::class, 'info'])->name('info');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__ . '/auth.php';
