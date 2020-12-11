<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function showHome(){
        return view('frontend.home');
    }

    public function showBlog(){
        return view('frontend.blog');
    }
    public function showContact(){
        return view('frontend.contact');
    }

    public function showAbout(){
        return view('frontend.about');
    }

    public function showCart(){
        return view('frontend.cart');
    }
}
