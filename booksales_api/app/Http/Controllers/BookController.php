<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
     public function index()
    {
        $books = Book::with(['author', 'genre'])->get();
        return response()->json($books);
    }

    public function show($id)
    {
        $book = Book::with(['author', 'genre'])->find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }
        return response()->json($book);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image',
            'author_id' => 'required|exists:authors,id',
            'genre_id' => 'required|exists:genres,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->move(public_path('images'), $imageName);

        $book = Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_name' => $imageName,
            'author_id' => $request->author_id,
            'genre_id' => $request->genre_id,
        ]);

        return response()->json(['message' => 'Book created successfully', 'book' => $book],201);
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }
        
        $imagePath = public_path('images/' . $book->image_name);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $book->delete();

        return response()->json(['message' => 'Book deleted successfully']);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'sometimes|required|string',
            'description' => 'sometimes|required|string',
            'image' => 'sometimes|image',
            'author_id' => 'sometimes|required|exists:authors,id',
            'genre_id' => 'sometimes|required|exists:genres,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if ($request->hasFile('image')) {
            $oldImagePath = public_path('images/' . $book->image_name);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->move(public_path('images'), $imageName);
            $book->image_name = $imageName;
        }

        $book->fill($request->only(['title', 'description', 'author_id', 'genre_id']));
        $book->save();

        return response()->json(['message' => 'Book updated successfully', 'book' => $book]);
    }
}
