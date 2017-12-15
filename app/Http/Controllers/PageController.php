<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request){
        //prova123
        return view("frontend.home.index");
    }
}
