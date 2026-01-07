<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function home(){
        return view('layout.home');
    }
    public function about(){
        return view('layout.about');
    }
    public function feature(){
        return view('layout.feature');
    }
    public function pricing(){
        return view('layout.pricing');
    }
    public function faq(){
        return view('layout.faq');
    }
}   
