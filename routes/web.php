<?php

use App\Http\Controllers\ProfileController;
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

// Frontend Design Routes
Route::prefix('front')->name('front.')->group(function () {
    Route::get('/',\App\Http\Controllers\FrontHomeController::class)->middleware('auth')->name('index');
    Route::view('/login','frontend.auth.login');
    Route::view('/register','frontend.auth.register');
    Route::view('/forget-password','frontend.auth.forget-password');
});


require __DIR__.'/auth.php';



Route::get('/', function () {
    return view('welcome');
});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

