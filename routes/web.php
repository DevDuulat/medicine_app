<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});



Route::middleware(['web'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});


Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index']);
Route::get('/doctors', [DoctorsController::class, 'index']);
Route::get('/contacts', [HomeController::class, 'contacts']);
Route::get('/analyses', [HomeController::class, 'analyses']);
Route::get('/posts/{id}', [HomeController::class, 'newShow'])->name('posts.show');
Route::post('/feedback/submit', [FeedbackController::class, 'submit'])->name('feedback.submit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
