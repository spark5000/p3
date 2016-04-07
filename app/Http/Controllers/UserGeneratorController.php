<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserGeneratorController extends Controller {


    public function getUserGeneratorMainPage() {
        return view('UserGenerator.user_generator_main');
    }

    public function postUserGeneratorDisplay(Request $request) {
        //dd($request->all());
        //return '';
        return view('UserGenerator.user_generator_display', [
            'how_many_users' => $request->input('how_many_users'),
            'include_birthday' => $request->input('include_birthday'),
            'include_address' => $request->input('include_address'),
            'include_email' => $request->input('include_email'),
            'include_phone_number' => $request->input('include_phone_number')
        ]);
    }









}
