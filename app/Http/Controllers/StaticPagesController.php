<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function waitlist(){
        return view('pages/waitlist');
    }
    public function about(){
        return view('pages/about');
    }
    public function contact(){
        return view('pages/contact');
    }
    public function offers(){
        return view('pages/offers');
    }
}
