<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
public function search(Request $request)
{
    $query = $request->input('query');

    // Perform the search query on your model
    $books = Book::where('title', 'LIKE', "%$query%")
        ->orWhere('author', 'LIKE', "%$query%")
        ->orWhere('quantity', 'LIKE', "%$query%")
        ->orWhere('isbn_no', 'LIKE', "%$query%")
        ->orWhere('publisher', 'LIKE', "%$query%")
        ->orWhere('edition', 'LIKE', "%$query%")
        ->orWhere('category', 'LIKE', "%$query%")
        ->orWhere('rack', 'LIKE', "%$query%")
        ->orWhere('price', 'LIKE', "%$query%")
        ->paginate(5); // Paginate the search books

    return view('books.index', compact('books'));
}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::latest()->paginate(5);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request );

        $request->validate([
            'title'=> 'required', 
            'author'=> 'required', 
            'quantity'=> 'required',
            'isbn_no'=> 'required',
            'publisher'=> 'required',
            'edition'=> 'required',
            'category'=> 'required',
            'rack'=> 'required',
            'price' => 'required | numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image format and size
        ]);
        
        $book = new Book();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->quantity = $request->input('quantity');
        $book->isbn_no = $request->input('isbn_no');
        $book->publisher = $request->input('publisher');
        $book->edition = $request->input('edition');
        $book->category = $request->input('category');
        $book->rack = $request->input('rack');
        $book->price = $request->input('price');
        // $book->image = $request->input('image');

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('books', 'public'); // Store image in 'public/books' directory
            $book->image = $imagePath;
        }

        $book->save();

        // dd($book);
        return redirect()->route('books')->with('success', 'Book added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::where('id', $id)->first();
        // dd($book->image);
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Book::where('id', $id)->first();   
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
       $request->validate([
            'title'=> 'required', 
            'author'=> 'required', 
            'quantity'=> 'required',
            'isbn_no'=> 'required',
            'publisher'=> 'required',
            'edition'=> 'required',
            'category'=> 'required',
            'rack'=> 'required',
            'price' => 'required | numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
       ]);

       $input = $request->all();

        if ($image = $request->file('image')) {
            $imagePath = $request->file('image')->store('books', 'public'); // Store image in 'public/books' directory
             $input['image'] = $imagePath;
        }else{
            unset($input['image']);
        }

        $book->update($input);

        return redirect()->route('books')->with('success', 'Book updated successfully');	
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // dd("OK");
        $book = Book::where('id', $id);
        $book->delete();
        return redirect()->route('books')->with('success', 'Book deleted successfully');
    }
}
