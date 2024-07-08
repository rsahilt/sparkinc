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
            <div class="blog-card" data-aos="fade-up" data-aos-direction="1500">
                <div class="blog-image">
                    <img src="{{ asset('storage/images/' . $latestBlog->image) }}" alt="product-image">
                </div>
                <div class="blog-text">
                    <h1>{{ $latestBlog->title }}</h1>
                    <p style="color:gray" class="authordate">Posted by: {{ $latestBlog->author }} on {{ $latestBlog->created_at->format('d F, Y') }}</p>
                    <p>
                        <?php
                            $description = explode(' ', $latestBlog->description);
                            $limitedDesc = implode(' ', array_slice($description, 0, 10));
                            echo $limitedDesc;
                            // if summary has more than 10 words, display ... after it
                            if (count($description) > 10) {
                                echo '...';
                            }
                        ?>
                    </p>
                    <button class="btn btn-secondary">Read Article</button>
                </div>
            </div>

            <div class="blog-card" data-aos="fade-up" data-aos-direction="1500">
                <div class="blog-image">
                    <img src="{{ asset('storage/images/' . $anotherlatestBlog->image) }}" alt="product-image">
                </div>
                <div class="blog-text">
                    <h1>{{ $anotherlatestBlog->title }}</h1>
                    <p style="color:gray" class="authordate">Posted by: {{ $anotherlatestBlog->author }} on {{ $anotherlatestBlog->created_at->format('d F, Y') }}</p>
                    <p>
                        <?php
                            $description = explode(' ', $anotherlatestBlog->description);
                            $limitedDesc = implode(' ', array_slice($description, 0, 10));
                            echo $limitedDesc;
                            // if summary has more than 10 words, display ... after it
                            if (count($description) > 10) {
                                echo '...';
                            }
                        ?>
                    </p>
                    <button class="btn btn-secondary">Read Article</button>
                </div>
            </div>
        </div>

        <div class="blog-lists" data-aos="fade-up" data-aos-direction="1500">
            <p>Top Blogs</p>
            <br>
            @foreach($blogs as $blog)
                <h1>{{ $blog->title }}</h1>
     
                <p style="color:gray" class="authordate">Posted by: {{ $blog->author }} on {{ $blog->created_at->format('d F, Y') }}</p>

                <p><?php
                    $description = explode(' ', $blog->description);
                    $limitedDesc = implode(' ', array_slice($description, 0, 10));
                    echo $limitedDesc;
                    // if summary has more than 10 words, display ... after it
                    if (count($description) > 10) {
                        echo '...';
                    }
                ?></p>
                <p><a href="#">Read More &rarr;</a></p>
            @endforeach


        </div>
    </div>
    @endif

    <div class="all-blogs-container">
       
    @foreach($restoftheblogs as $restoftheblog)
        <div class="small-blog-card">
            <div class="small-blog-img">
                <img src="{{ asset('storage/images/' . $restoftheblog->image) }}" alt="product-image">
            </div>
            <div class="small-blog-text">
                <h1>{{ $restoftheblog->title }}</h1>
                <p style="color:gray" class="authordate">Posted by: {{ $restoftheblog->author }} on {{ $restoftheblog->created_at->format('d F, Y') }}</p>
                <p>
                    <?php
                        $description = explode(' ', $restoftheblog->description);
                        $limitedDesc = implode(' ', array_slice($description, 0, 7));
                        echo $limitedDesc;
                        // if summary has more than 10 words, display ... after it
                        if (count($description) > 10) {
                            echo '...';
                        }
                    ?>
                </p>
                <p>
                    <button class="btn btn-danger">Read Article</button>
                </p>
            </div>
        </div>
        @endforeach

        
        

       
    </div>
   



@endsection