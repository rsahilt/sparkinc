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

    //function to create a new blog
    public function create()
    {
        $title = "Create New Blog";
        $slug="dashboardblogs";
        return view('admin.createblog', compact('title','slug'));
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required|string|min:1|max:255',
            'author' => 'required|string|min:1|max:255',
            'category' => 'required|string|min:1|max:255',
            'description' => 'string|min:10',
            'image' => 'required|string|min:1|max:255',
        ]);
        $blog = Blog::create($valid);
        
        // if($file = $request->file('image')){
        //     $filename = uniqid() . '_' . $file->getClientOriginalName();
        //     Storage::disk('images')->put($filename,File::get($file));
        //     $product->image=$filename;
        //     $product->save();
        // }

        if ($blog) {
            return redirect()->route('storeblogs')->with('success', 'Blog created successfully');
        } else {
            return redirect('/admin/blogs/create');
        }
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        $title = 'Edit Blog';
        $slug="dashboardblogs";
        if ($blog) {
            return view('admin/editblog', compact('blog', 'title','slug'));
        } else {
            return redirect('/admin/blogs');
        }
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if ($blog) {
            $validatedData = $request->validate([
                'title' => 'required|string|min:1|max:255',
                'author' => 'required|string|min:1|max:255',
                'category' => 'required|string|min:1|max:255',
                'description' => 'string|min:10',
                'image' => 'required|string|min:1|max:255',
            ]);
            $blog->update($validatedData);

            //Handle image uploads
            // if($file = $request->file('image')){
                
            //     $filename = uniqid() . '_' . $file->getClientOriginalName();
            //     Storage::disk('images')->put($filename,File::get($file));
            //     $product->image=$filename;
            //     $product->save();
            // }
            
            return redirect()->route('admin.blogs')->with('success','Changes Saved');
        } else {
            return redirect('/admin/editblog');
        }
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
