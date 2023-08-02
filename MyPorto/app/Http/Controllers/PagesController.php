<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Home page
    function index(){
        return view('template/index');
    }

    function home(){
        return view('pages/home');
    }

    function about(){
        return view('pages/about');
    }

    function tes(){
        return view('pages/tesroot');
    }
}
