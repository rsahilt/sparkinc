<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $title = "Spark Inc";
        return view('frontend.index', compact('title'));
    }

    public function about(){
        $title = "About Us";
        return view('frontend.about', compact('title'));
    }

    public function contact(){
        $title = "Contact Us";
        return view('frontend.contact', compact('title'));
    }

    public function products(){
        $title = "Products";
        return view('frontend.product', compact('title'));
    }
}
