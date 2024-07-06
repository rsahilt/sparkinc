<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    //list view of blogs
    public function index(){
        $title = "All Blogs";
        $blogs = Blog::all();
        $slug = "dashboardblogs";
        $totalBlogs = Blog::count();
        return view('admin.blogs', compact('title', 'blogs', 'slug', 'totalBlogs'));
    }

    //delete the blog
    public function destroy($id)
    {
        $blog = Blog::find($id);

        // if id exists
        if($blog){
            $blog->delete();
            return redirect()->route('admin.blogs')->with('danger', 'Blog deleted permanently');
        }else{
            return redirect()->route('admin.blogs');
        }
    }
}
