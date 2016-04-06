<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoremController extends Controller {





    public function getLoremMainPage() {
        return view('lorem.lorem_main');
    }

    public function postLoremDisplay(Request $request) {

        $this->validate($request,[
            'how_many_paragraphs' => 'required|numeric|between:1,99'
        ]);

        return view('lorem.lorem_display', ['how_many_paragraphs' => $request->input('how_many_paragraphs')]);
    }








}
