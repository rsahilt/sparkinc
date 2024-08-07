@extends('admin.layouts.admin')

@section('content')
    <div class="admin-content">
    @if (session('success'))
            <div id="successMessage" class="alert alert-success mt-7 rounded-lg bg-green-200">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('successMessage').style.display = 'none';
                }, 3000);
            </script>
        @endif

        @if (session('danger'))
            <div id="dangerMessage" class="alert alert-danger mt-7 rounded-lg bg-red-200">
                {{ session('danger') }}
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('dangerMessage').style.display = 'none';
                }, 3000);
            </script>
        @endif
        
        <div class="admin-prod-container">
            <h1>{{ $title }}</h1>

            <div class="add-new">
                <a href="/admin/products/create">Add Product</a>
            </div>

        
            <div class="admin-prod-table">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Image</th>
                            <th scope="col">Product</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td><img src="{{ asset('storage/images/' . $product->image) }}" class="admin-prod-thumbnail" alt="{{ $product->name }}"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->brand }}</td>
                            <td>{{ $product->unit_price }}</td>
                            <td class="px-6 py-4 text-left">
                                <div class="inline-block" style="display:flex;">
                                    <a href="{{ route('editproduct', ['id' => $product->id]) }}" class="admin-edit-btn font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <!-- asking the user if they really want to delete, in the form of an alert -->
                                    <form action="{{ route('deleteproducts', $product->id) }}" method="POST" novalidate class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="admin-delete-btn font-medium text-blue-600 dark:text-blue-500 hover:underline" onclick="return confirm('Do you really want to remove the product?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                            
                        </tr>

                        @endforeach
                    
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection