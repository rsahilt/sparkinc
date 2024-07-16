@extends('frontend.layouts.frontend')

@section('content')

    <div class="banner blog-banner">
        <h1>{{ $title }}</h1>
        <p>Spark Inc / {{ $title }}</p>
    </div>

    @if($blogs->isEmpty())
        <h4 style="text-align:center; margin-top:4%">No Blogs Posted</h4>
    @else
        <div class="blog-container blog-highlights">
            <div class="blog-thumbnails">
                @isset($latestBlog)
                    <div class="blog-card" data-aos="fade-up" data-aos-direction="1500">
                        <a href="{{ route('blog.read', ['id' => $latestBlog->id]) }}">
                            <div class="blog-image">
                                <img src="{{ asset('storage/images/' . $latestBlog->image) }}" alt="product-image">
                            </div>
                        </a>
                        <div class="blog-text">
                            <h1>{{ $latestBlog->title }}</h1>
                            <p style="color:gray" class="authordate">Posted by: {{ $latestBlog->author }} on {{ $latestBlog->created_at->format('d F, Y') }}</p>
                            <p>{!! \Illuminate\Support\Str::words($latestBlog->description, 10, '...') !!}</p>
                            <a href="{{ route('blog.read', ['id' => $latestBlog->id]) }}">
                                <button class="btn btn-danger">
                                    Read Article
                                </button>
                            </a>
                        </div>
                    </div>
                @endisset

                @isset($anotherlatestBlog)
                    <div class="blog-card" data-aos="fade-up" data-aos-direction="1500">
                        <a href="{{ route('blog.read', ['id' => $anotherlatestBlog->id]) }}">
                            <div class="blog-image">
                                <img src="{{ asset('storage/images/' . $anotherlatestBlog->image) }}" alt="product-image">
                            </div>
                        </a>
                        <div class="blog-text">
                            <h1>{{ $anotherlatestBlog->title }}</h1>
                            <p style="color:gray" class="authordate">Posted by: {{ $anotherlatestBlog->author }} on {{ $anotherlatestBlog->created_at->format('d F, Y') }}</p>
                            <p>{!! \Illuminate\Support\Str::words($anotherlatestBlog->description, 10, '...') !!}</p>
                            <button class="btn btn-secondary">
                                <a href="{{ route('blog.read', ['id' => $anotherlatestBlog->id]) }}">Read Article</a>
                            </button>
                        </div>
                    </div>
                @endisset
            </div>

            <div class="blog-lists" data-aos="fade-up" data-aos-direction="1500">
                <p>Top Blogs</p>
                <br>
                @foreach($blogs as $blog)
                    <h1>{{ $blog->title }}</h1>
                    <p style="color:gray" class="authordate">Posted by: {{ $blog->author }} on {{ $blog->created_at->format('d F, Y') }}</p>
                    <p>{!! \Illuminate\Support\Str::words($blog->description, 10, '...') !!}</p>
                    <p><a href="{{ route('blog.read', ['id' => $blog->id]) }}">Read More &rarr;</a></p>
                @endforeach
            </div>
        </div>
    @endif

    <div class="all-blogs-container">
        @foreach($restoftheblogs as $restoftheblog)
            <div class="small-blog-card">
                <a href="{{ route('blog.read', ['id' => $blog->id]) }}">
                    <div class="small-blog-img">
                        <img src="{{ asset('storage/images/' . $restoftheblog->image) }}" alt="product-image">
                    </div>
                </a>
                <div class="small-blog-text">
                    <h1>{{ $restoftheblog->title }}</h1>
                    <p style="color:gray" class="authordate">Posted by: {{ $restoftheblog->author }} on {{ $restoftheblog->created_at->format('d F, Y') }}</p>
                    <p>{!! \Illuminate\Support\Str::words($restoftheblog->description, 7, '...') !!}</p>
                    <p>
                        <a href="{{ route('blog.read', ['id' => $restoftheblog->id]) }}">
                            <button class="btn btn-danger">
                                Read Article
                            </button>
                        </a>
                    </p>
                </div>
            </div>
        @endforeach
    </div> 
    
@endsection
