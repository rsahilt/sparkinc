<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //index function to display all the table details
    public function index(){
        $title = "All Products";
        $products = Product::all();
        $slug = "dashboardproducts";
        $totalProducts = Product::count();
        return view('admin.products', compact('title', 'products', 'slug', 'totalProducts'));
    }

    public function create()
    {
        $title = "Add New Product";
        $slug="dashboardproducts";
        return view('/admin/createproducts', compact('title','slug'));
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|string|min:1|max:255',
            'brand' => 'required|string|min:1|max:255',
            'unit_price' => 'required|numeric|min:20|max:100000',
            'description' => 'string|min:10',
            'image' => 'required|string|min:1|max:255',
        ]);
        $product = Product::create($valid);
        
        // if($file = $request->file('image')){
        //     $filename = uniqid() . '_' . $file->getClientOriginalName();
        //     Storage::disk('images')->put($filename,File::get($file));
        //     $product->image=$filename;
        //     $product->save();
        // }

        if ($product) {
            return redirect()->route('storeproducts')->with('success', 'Product added successfully');
        } else {
            return redirect('/admin/products/create');
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $title = 'Edit Product';
        $slug="dashboardproducts";
        if ($product) {
            return view('admin/editproducts', compact('product', 'title','slug'));
        } else {
            return redirect('/admin/products');
        }
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if ($product) {
            $validatedData = $request->validate([
                'name' => 'required|string|min:1|max:255',
                'image' => 'required|string|min:1|max:255',
                'unit_price' => 'required|numeric|min:20|max:100000',
                'description' => 'string|min:10',
                'brand' => 'required|string|min:1|max:255'
            ]);
            $product->update($validatedData);

            //Handle image uploads
            // if($file = $request->file('image')){
                
            //     $filename = uniqid() . '_' . $file->getClientOriginalName();
            //     Storage::disk('images')->put($filename,File::get($file));
            //     $product->image=$filename;
            //     $product->save();
            // }
            
            return redirect()->route('admin.products')->with('success','Changes Saved');
        } else {
            return redirect('/admin/editproducts');
        }
    }


    public function destroy($id)
    {
        $product = Product::find($id);

        // if id exists
        if($product){
            $product->delete();
            return redirect()->route('admin.products')->with('danger', 'Product removed permanently');
        }else{
            return redirect()->route('admin.products');
        }
    }

   
}
