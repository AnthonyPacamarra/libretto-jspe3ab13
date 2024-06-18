<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Review;

class RelationController extends Controller
{
    public function getBooksByAuthor ($authorID) {
        $author = Author::findOrFail($authorID);

        $books = $author->books;

        // dd($books);

        return view('author.allbooks',compact('author','books'));
    }
}
