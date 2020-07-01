<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('form');
    }

    public function welcome(Request $request){
        $fname = $request['fname'];
        $lname = $request['lname'];
        return view('datang',with(['fname'=>$fname, 'lname'=>$lname]));
        // return view('datang');
    }

}


