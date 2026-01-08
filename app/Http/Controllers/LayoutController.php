<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function FrontendHome(){
        return view('frontend.index');
    }
    public function FrontendAbout(){
        return view('frontend.about');
    }
    public function FrontendFaq(){
        return view('frontend.faq');
    }
    public function Frontendfeature(){
        return view('frontend.feature');
    }
    public function FrontendPricing(){
        return view('frontend.pricing');
    }
}   
