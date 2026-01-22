<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Helpers\ResponseApi;

class BookController extends Controller
{
    public function index()
    {
        try {
            $books = Book::all();

            if ($books->isEmpty()) {
                return ResponseApi::error('No books found', 404);
            }

            return ResponseApi::success($books, 'Books retrieved successfully');
        } catch (\Exception $e) {
            return ResponseApi::error('Error fetching books: ' . $e->getMessage(), 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string',
                'author' => 'required|string',
                'year_published' => 'required|integer',
            ]);

            $book = Book::create($request->all());

            return ResponseApi::success($book, 'Book created successfully', 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return ResponseApi::error($e->errors(), 422);
        } catch (\Exception $e) {
            return ResponseApi::error('Error creating book: ' . $e->getMessage(), 500);
        }
    }

    public function show($id)
    {
        try {
            $book = Book::find($id);

            if (!$book) {
                return ResponseApi::error('Book not found', 404);
            }

            return ResponseApi::success($book, 'Book retrieved successfully');
        } catch (\Exception $e) {
            return ResponseApi::error('Error fetching book: ' . $e->getMessage(), 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $book = Book::find($id);

            if (!$book) {
                return ResponseApi::error('Book not found', 404);
            }

            $book->update($request->all());

            return ResponseApi::success($book, 'Book updated successfully');
        } catch (\Exception $e) {
            return ResponseApi::error('Error updating book: ' . $e->getMessage(), 500);
        }
    }

   public function destroy($id)
{
    try {
        $book = Book::find($id);

        if (!$book) {
            return ResponseApi::error('Book not found', 404);
        }

        $book->delete();

        return ResponseApi::success(null, 'Book deleted successfully', 200);
    } catch (\Exception $e) {
        return ResponseApi::error('Error deleting book: ' . $e->getMessage(), 500);
    }
}

}
