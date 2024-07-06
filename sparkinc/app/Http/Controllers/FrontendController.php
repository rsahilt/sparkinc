<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Blog;

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
        $blogs = Blog::all();
        $slug = "blogpageslug";
        $latestBlog = Blog::orderBy('created_at', 'desc')->first();
        $anotherlatestBlog = Blog::orderBy('created_at', 'desc')->skip(1)->first();
        $restoftheblogs = Blog::where('id', '>=', 3)->get();
        return view('frontend.blog', compact('title', 'blogs', 'slug', 'restoftheblogs', 'latestBlog', 'anotherlatestBlog'));
    }
}
