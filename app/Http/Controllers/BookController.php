<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Index Page
    public function index()
    {
        return view('books.index', [
            'books' => Book::all()
        ]);
    }

    // Show the create book form
    public function create()
    {
        return view('books.create');
    }

    // Store/Save new book
    public function store(Request $request)
    {
        // Validation
        $validForm = $request->validate([
            'title' => ['required'],
            'author' => ['required']
        ]);


        // Insert the data
        Book::create([
            'title' => $validForm['title'],
            'author' => $validForm['author'],
            'description' => $request['description']
        ]);

        // go to index page
        return redirect('/')->with('msg', 'New book added succesfully!');

    }

    // Show Single Book
    public function show(Book $id)
    {
        return view('books.show', [
            'book' => $id
        ]);
    }

    // Show Edit page
    public function edit(Book $id)
    {
        return view('books.edit', [
            'book' => $id
        ]);
    }

    // Update the request data
    public function update(Request $request, Book $id)
    {

        // Validation
        $validForm = $request->validate([
            'title' => ['required'],
            'author' => ['required']
        ]);

        // Update
        $id->update([
            'title' => $validForm['title'],
            'author' => $validForm['author'],
            'description' => $request['description']
        ]);

        // go to index page
        return redirect('/')->with('msg', 'The book updated successfully!');
    }

    // Destroy the request data
    public function destroy(Request $request, Book $id)
    {   
        // delete the data
        $id->delete();

        // redirect to home page
        return redirect('/')->with('msg', 'The book successfully deleted!');

    }

}
