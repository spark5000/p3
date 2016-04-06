<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller {

    /**
    * Responds to requests to GET /books
    */
    public function getIndex() {
        return 'Show a list of all books';
    }

    /**
     * Responds to requests to GET /books/show/{id}
     */
    public function getShow($title = null) {
        //return 'Show an individual book: '.$title;

        //return view('books.show')
        //    ->with('title', $title)
        //    ->with('abc', '123');

        return view('books.show', ['title' => $title, 'abc' => '123']);
    }

    /**
     * Responds to requests to GET /books/create
     */
    public function getCreate() {
        return view('books.create');
    }





    /**
     * Responds to requests to POST /books/create
     */

    // public function postCreate() {
    //
    //     //return 'Add the book: '.$request->input('title');
    //     return 'Add the book: '.$_POST['title'];
    // }


    public function postCreate(Request $request) {


        //dd($request);
        //dd($request->all());

        // $this->validate($request,[
        //     'title' => 'required|min:3',
        //     'author' => 'required'
        // ]);

        //return 'Add the book: '.$request->input('title');
        return 'Add the book: '.$request->input('title');
    }








}
