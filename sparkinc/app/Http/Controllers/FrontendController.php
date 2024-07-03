<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class FrontendController extends Controller
{
    public function index(){
        $title = "Spark Inc";
        $slug = "homepageslug";
        return view('frontend.index', compact('title', 'slug'));
    }

    public function about(){
        $title = "About Us";
        $slug = "aboutpageslug";
        return view('frontend.about', compact('title', 'slug'));
    }

    public function contact(){
        $title = "Contact Us";
        $slug = "contactpageslug";
        return view('frontend.contact', compact('title', 'slug'));
    }

    public function products(){
        $title = "Products";
        $products = Product::all();
        $slug = "productpageslug";
        return view('frontend.product', compact('title', 'products', 'slug'));
    }

    public function blogs(){
        $title = "Blogs";
        $slug = "blogpageslug";
        return view('frontend.blog', compact('title', 'slug'));
    }
}
