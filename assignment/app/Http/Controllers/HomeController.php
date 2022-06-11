<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function home(){
       
        return view("public.home");
    }
    function welcome(){
        return view('public.about');
    }
}