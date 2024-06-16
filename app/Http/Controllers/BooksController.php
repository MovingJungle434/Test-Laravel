<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('vwBook', ["books" => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createBooks');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Book;
        $product->name = $request->name;
        $product->category = $request->category;
        $product->about = $request->about;
        if ($request->hasFile("file")) {
            $file = $request->file("file");
            $file->move(public_path() . "/img/", $file->getClientOriginalName());
            $product->image = "/img/" . $file->getClientOriginalName();
        }
        $product->save();
        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        return view("editBook", compact("book"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::find($id);
        $book->name = $request->name;
        $book->category = $request->category;
        $book->about = $request->about;
        $book->save();
        return Redirect::to("book");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->each->delete();
        return Redirect::to("book");
    }
}
