<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use App\Models\Book;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index(): View
    {
        $books = Book::paginate(2);
        return view('books.index')->with('books', $books);
    }
    
    public function create()
    {
        return view('books.create');
    }

    
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'img' => 'required| mimes:png,jpg,jpeg,webp',
            'name' => 'required',

            'genre' => 'required', 
            
        ]);
        if ($request->has("img")) {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "_" . $extension;
            $path = public_path('imgs');
            $file->move($path, $filename);
        }
        $input = $request->all();
        $input["img"] = $filename;
        Book::create($input);

        return redirect()->route('books.index')->with('success', ' A new Book is added successfully!');
    }

    
    public function show(string $id): View
    {
        $books = Book::find($id);
        return view('books.show')->with('books', $books);
    }

    
    
    public function edit(string $id): View
    {
        $books = Book::find($id);
        return view('books.edit')->with('books', $books);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $books =  Book::find($id);
        $input = $request->all();
        $books->update($input);
        return redirect('books')->with('flash_message', 'book Updated!');
    }

    public function destroy(string $id): RedirectResponse
    {
        Book::destroy($id);
        return redirect('books')->with('flash_message', 'book deleted!');
    }
}
