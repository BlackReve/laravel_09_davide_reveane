<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    // public $books = [
    //         ['id' => '1', 'title' => 'Il piccolo principe', 'author' => 'Antonie de Sant-Exupery', 'img' => '/media/poster/IlPiccoloPrincipe.jpg', 'genre' => 'Romanzo'],
    //         ['id' => '2', 'title' => 'Le due città', 'author' => 'Charles Dickens', 'img' => '/media/poster/LeDueCittà.jpg', 'genre' => 'Romanzo storico'],
    //         ['id' => '3', 'title' => "Il leone, la strega e l'armadio. Le cronace di Narnia Vol.2", 'author' => 'Clive Steaples Lewis', 'img' => '/media/poster/Narnia2.jpg', 'genre' => 'Fantasy'],
    //         ['id' => '4', 'title' => 'Il giovane Holden', 'author' => 'J.D. Salinger', 'img' => '/media/poster/IlGiovaneHolden.jpg', 'genre' => 'Romanzo di formazione'],
    //         ['id' => '5', 'title' => 'Don Chisciotte della Mancia', 'author' => 'Miguel de Cervantes Saavedra', 'img' => '/media/poster/DonChisciotte.jpg', 'genre' => 'Romanzo satirico'],
    //     ];

     public function booksList()
    {
        $books = Book::all();
        return view('books.books', ['books' => $books]);
    }

    // public function booksDetail($id)
    // {
        
    //     foreach ($this->books as $book) {
    //         if ($id == $book['id']) {
    //             return view('books.books-detail', ['books' => $book]);
    //         }
    //     }
    // }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        $book = Book::create([
        'title' => $request->title,
        'author' => $request->author,
        'year' => $request->year,
        'plot' => $request->plot,
        ]);

        return redirect()->route('homepage')->with('successMessage', 'Hai correttamente inserito il tuo libro');
    }
}
