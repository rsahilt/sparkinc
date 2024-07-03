@extends('admin.layouts.admin')

@section('content')
    <div class="admin-content">
        <div class="admin-prod-container">
            <h1>{{ $title }}</h1>
        </div>

        <div class="add-new">
            <a href="/admin/products">Back</a>
        </div>

        <div class="create-form">
            <form action="{{ route('storeproducts') }}" novalidate 
            method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control admin-form-control" id="name" name="name">
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Brand Name</label>                    
                    <input type="text" class="form-control admin-form-control" id="brand" name="brand"> 
                </div>

                <div class="mb-3">
                    <label for="unit_price" class="form-label">Unit Price</label>                    
                    <input type="text" class="form-control admin-form-control" id="unit_price" name="unit_price">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>                    
                    <input type="text" class="form-control admin-form-control" id="image" name="image">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label><br>
                    <textarea name="description" id="description" name="description" cols="50" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>

 @endsection