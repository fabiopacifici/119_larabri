<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Book;

class PageController extends Controller
{
    public function index()
    {

        $books = Book::orderByDesc('id')->get();
        //dd($books);
        return view('guests.welcome', compact('books'));
    }


    public function about()
    {
        return view('guests.about');
    }

    public function contacts()
    {
        return view('guests.contacts');
    }
}
