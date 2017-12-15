<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request){
        //prova
        return view("frontend.home.index");
    }
}
