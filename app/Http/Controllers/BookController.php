<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookCategory;
use App\Models\Book;

class BookController extends Controller
{
    function index() {
        $book = Book::select('book.*', 'book_category.category_name')->join('book_category', 'book_category.id', 'book.book_category')->get();
        return view('book.index', compact('book'));
    }

    function add() {
        $bookCategory = BookCategory::all();
        return view('book.add', compact('bookCategory'));
    }

    function post(Request $request) {
        $request->validate([
            'book_name' => 'required',
            'book_author' => 'required',
            'book_pages' => 'required',
            'book_synopsis' => 'required'
        ]);
        $book = new Book();
        $book->book_name = $request->book_name;
        $book->book_category = $request->book_category;
        $book->book_author = $request->book_author;
        $book->book_synopsis = $request->book_synopsis;
        $book->book_pages = $request->book_pages;
        $book->save();
        return redirect()->route('book');
    }

    function edit($id) {
        $book = Book::where('id', $id)->first();
        $bookCategory = BookCategory::all();
        return view('book.edit', compact('book', 'bookCategory'));
    }

    function update(Request $request, $id) {
        $book = Book::where('id', $id)->first();
        $book->book_name = $request->book_name;
        $book->book_category = $request->book_category;
        $book->book_author = $request->book_author;
        $book->book_synopsis = $request->book_synopsis;
        $book->book_pages = $request->book_pages;
        $book->update();
        return redirect()->route('book');
    }

    function delete($id) {
        Book::find($id)->delete();
        return redirect()->route('book');
    }

}
