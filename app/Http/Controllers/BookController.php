<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Display a listing of the books
    public function index() {
        return Book::all();
    }

    // Display the specified book by ID
    public function show($id) {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['error' => 'Book not found'], 404);
        }
        return $book;
    }

    // Store a newly created book in storage
    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'published_year' => 'required|integer',
            'genre' => 'required|string',
            'description' => 'required|string',
        ]);
    
        try {
            $book = new Book();
            $book->title = $validated['title'];
            $book->author = $validated['author'];
            $book->published_year = $validated['published_year'];
            $book->genre = $validated['genre'];
            $book->description = $validated['description'];
            $book->save();
    
            return response()->json([
                'book' => $book,
                'message' => 'Book created',
                'method' => 'POST'
            ], 201);
    
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    
    
    
    // Update the specified book by ID
    public function update(Request $request, $id) {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['error' => 'Book not found'], 404);
        }
    
        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'sometimes|required|string',
            'author' => 'sometimes|required|string',
            'published_year' => 'sometimes|required|integer',
            'genre' => 'sometimes|required|string',
            'description' => 'sometimes|required|string',
        ]);
    
        // Update the book with validated data
        try {
            $book->update($validated);
            return response()->json([
                'book' => $book,
                'message' => 'Book updated successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    // Remove the specified book by ID
    public function destroy($id) {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['error' => 'Book not found'], 404);
        }

        $book->delete();
        return response()->json(['message' => 'Book deleted successfully']);
    }
}
