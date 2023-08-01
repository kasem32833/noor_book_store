<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;

class BookModelController extends Controller
{
    public function index(){
        // $books = BookModel::all();
            $books = BookModel::latest()->paginate();

        // dd($books);
        return view('book.single', [
            'books' => $books,
        ]);
    }
}
