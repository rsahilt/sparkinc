@extends('admin.layouts.admin')

@section('content')
    <div class="admin-content">
        <div class="admin-prod-container">
            <h1>{{ $title }}</h1>
        </div>

        <div class="add-new">
            <a href="/admin/blogs">Back</a>
        </div>

        <div class="create-form">
            <form action="{{ route('update', ['id' => $blog->id]) }}" novalidate 
            method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Blog Title</label>
                    <input type="text" class="form-control admin-form-control" id="title" name="title" value="{{ old('title', $blog->title) }}">
                    @error('title')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>                    
                    <input type="text" class="form-control admin-form-control" id="category" name="category" value="{{ old('category', $blog->category) }}">
                    @error('category')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror 
                </div>

                <div class="mb-3">
                    <label for="unit_price" class="form-label">Author</label>                    
                    <input type="text" class="form-control admin-form-control" id="author" name="author" value="{{ old('author', $blog->author) }}">
                    @error('author')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label" >Image</label>                    
                    <input type="file" class="form-control admin-form-control" id="image" name="image">
                    @error('image')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label><br>
                    <textarea name="description" id="editblogdescription" name="description" cols="50" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here">{{ old('description', $blog->description) }}</textarea>
                    <br>
                    @error('description')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update Blog</button>
            </form>
        </div>
    </div>

 @endsection