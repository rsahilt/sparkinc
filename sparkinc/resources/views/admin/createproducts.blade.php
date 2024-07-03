@extends('admin.layouts.admin')

@section('content')
    <div class="admin-content">
        @if(session('success'))
            <div class="alert alert-danger" id="successMessage">
                {{ session('success') }}
            </div>
            <script>
            setTimeout(function() {
                document.getElementById('successMessage').style.display = 'none';
            }, 3000);
        </script>
        @endif

        <div class="admin-prod-container">
            <h1>{{ $title }}</h1>
        </div>

        <div class="add-new">
            <a href="/admin/products">Back</a>
        </div>

        <div class="create-form">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control admin-form-control" id="name">
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Brand Name</label>                    
                    <input type="text" class="form-control admin-form-control" id="brand">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Unit Price</label>                    
                    <input type="text" class="form-control admin-form-control" id="price">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label><br>
                    <textarea id="description" name="description" cols="50" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>

 @endsection