<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class meinController extends Controller
{
    public function mein()
    {
        $allBooks = Book::all();
        return view('index', ["books" => $allBooks]);
    }
}
