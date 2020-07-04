<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class BookController extends Controller
{
    function index(){
    	$books =Book::all();
    

    	return view('dashboard',["books"=>$books]);
    }
    function create(){
    	return view('books.create');
    }
    function store(Request $request){
    	$title = $request->title;
    	$author = $request->author;
        $price = $request->price;
        $release_year = $request->release_year;

        echo $title;
        echo $author;
        echo $price;

        $book = new Book;
        $book->title = $title;
        $book->author = $author;
        $book->price = $price;
        $release_year->release_year = $release_year;
        $book->save();
    }
    function destroy($id){
        $book = Book::find($id);
        $book->delete();

        return redirect('books');
    }
    function edit($id){
    	$book = Book::find($id);
        return view('book.edit',["book"=>$book]);
    }
    function update($id, Request $request){

        $title = $request->title;
    	$author = $request->author;
        $price = $request->price;
        $release_year = $request->release_year;
        // echo $title;
        // echo $author;
        // echo $price;

        $book = Book::find($id);
        $book->title = $title;
        $book->author = $author;
        $book->price = $price;
        $book->release_year = $release_year;

        $book->save();
        return redirect('books');
    }
}
