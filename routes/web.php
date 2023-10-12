<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/search', [BookController::class, 'search'])->name('search');
Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/add-book',[Bookcontroller::class, 'create'])->name('books.create');
Route::post('/store-book', [BookController::class, 'store'])->name('books.store');
Route::get('/edit-book/{id}', [BookController::class, 'edit'])->name('books.edit');
Route::put('/update-book/{book}', [BookController::class, 'update'])->name('books.update');
Route::get('/dlt-book/{id}', [BookController::class, 'destroy'])->name('books.destroy');
Route::get('/view-book/{id}', [BookController::class, 'show'])->name('books.show');