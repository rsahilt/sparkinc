<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Product;
use App\Models\Blog;

class AdminController extends Controller
{
public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->take(5)->get();
        $totalMessages = Message::count();
        $totalProducts = Product::count();
        $totalBlogs = Blog::count();
        $slug = "dashboard";
        return view('admin.dashboard', compact('messages', 'totalBlogs', 'totalProducts', 'totalMessages', 'slug'));
    }
}