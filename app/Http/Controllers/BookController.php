<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $books= Book::all();
        return view('books.index',compact('books'));
    }
    
    public function create(){
        return view('books.create');
    }

    public function store(Request $request)
    {
   
        $request->validate([
            'name' => 'required|max:40',
            'genre' => 'required|max:40',
            'writer' => 'required|max:75',
            'available' => 'nullable|boolean',
        ]);

        $data=$request->all();
        $data['available'] = $request->has('available') ? 1 : 0;
   
        Book::create($data);

        return redirect()->route('books')->with('success', 'کتاب با موفقیت اضافه شد.');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id){
                $request->validate([
            'name' => 'required|max:40',
            'genre' => 'required|max:40',
            'writer' => 'required|max:75',
            'available' => 'nullable|boolean',
        ]);

        $book = Book::findOrFail($id);
        $book->name = $request->name;
        $book->genre = $request->genre;
        $book->writer = $request->writer;
        $book->available = $request->has('available') ? 1 : 0;
        $book->save();

        return redirect()->route('books')->with('success', 'کتاب با موفقیت ویرایش شد.');
    }

    public function destroy($id)
    {
    $book = Book::findOrFail($id);
    $book->delete();

    return redirect()->route('books')->with('success', 'کتاب با موفقیت حذف شد.');
    }
}
