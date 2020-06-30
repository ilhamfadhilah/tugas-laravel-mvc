<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(){
        return view('form');
    }

    public function sapa(Request $request){
        // var_dump($request);
        // dd($request->all());
        // return "Halo";
    }
    public function sapa_post(Request $request){
        // return "OK";
        // dd($request->all());
        $nama = $request["nama"];
        return $nama;
    }

}
