<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/chi-siamo', [PublicController::class, 'chiSiamo'])->name('chiSiamo');

Route::get('/chi-siamo-detail/{name}', [PublicController::class, 'chiSiamoDetail'])->name('chiSiamoDetail');

Route::get('/contatti', [PublicController::class, 'contatti'])->name('contacts');

Route::get('/books', [BooksController::class, 'booksList'])->name('book.list');

Route::get('/books/details/{id}', [BooksController::class, 'booksDetail'])->name('books.details');

//Invio mail
Route::post('/contattaci', [PublicController::class, 'contattaci'])->name('contattaci');

//Inserimento libri
Route::get('/books/create', [BooksController::class, 'create'])->name ('books.create');
Route::post('books/submit',[BooksController::class, 'store'])->name('books.submit');

