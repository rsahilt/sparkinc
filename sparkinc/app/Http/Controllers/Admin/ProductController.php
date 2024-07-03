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
