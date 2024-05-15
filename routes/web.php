<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AuthController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
   
    Route::get('/home.home', [HomeController::class, 'index']);
Route::resource('/student', StudentController::class);
Route::get('/student.create',[StudentController::class,'create']
)->name('student/create');
Route::post('/student.create',[StudentController::class,'store']
)->name('student/store');
// Route::post('/student/{id}', [StudentController::class, 'update'])->name('student.update');

Route::resource('/books',BookController::class);
Route::get('/books.create',[BookController::class,'create']
)->name('books/create');
Route::post('/books.create',[BookController::class,'store']
)->name('books/store');
// Route::post('/books/{id}', [BookController::class, 'update'])->name('books.update');

Route::resource('/info',InfoController::class);
Route::get('/info.create',[InfoController::class,'create']
)->name('info/create');
Route::post('/info.create',[InfoController::class,'store']
)->name('info/store');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/login')->name('logout');

require __DIR__.'/auth.php';
