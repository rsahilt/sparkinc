@extends('frontend.layouts.frontend')

@section('content')

    <div class="banner blog-banner">
        <h1>{{ $title }}</h1>
        <p>Spark Inc / {{ $title }}</p>
    </div>

    
    <div class="blog-container blog-highlights">
        <div class="blog-thumbnails">
            <div class="blog-card" data-aos="fade-up" data-aos-direction="1500">
                <div class="blog-image"></div>
                <div class="blog-text">
                    <h1>{{ $latestBlog->title }}</h1>
                    <p>
                        <?php
                            $description = explode(' ', $latestBlog->description);
                            $limitedDesc = implode(' ', array_slice($description, 0, 15));
                            echo $limitedDesc;
                            // if summary has more than 15 words, display ... after it
                            if (count($description) > 15) {
                                echo '...';
                            }
                        ?>
                    </p>
                    <button class="btn btn-secondary">Read Article</button>
                </div>
            </div>

            <div class="blog-card" data-aos="fade-up" data-aos-direction="1500">
                <div class="blog-image"></div>
                <div class="blog-text">
                    <h1>{{ $anotherlatestBlog->title }}</h1>
                    <p>
                        <?php
                            $description = explode(' ', $anotherlatestBlog->description);
                            $limitedDesc = implode(' ', array_slice($description, 0, 15));
                            echo $limitedDesc;
                            // if summary has more than 15 words, display ... after it
                            if (count($description) > 15) {
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
                    $limitedDesc = implode(' ', array_slice($description, 0, 15));
                    echo $limitedDesc;
                    // if summary has more than 15 words, display ... after it
                    if (count($description) > 15) {
                        echo '...';
                    }
                ?></p>
                <p><a href="#">Read More &rarr;</a></p>
            @endforeach


        </div>
    </div>

    <div class="all-blogs-container">
        <div class="small-blog-card">
            <div class="small-blog-img"></div>
            <div class="small-blog-text">
                <h1>This is the blog heading</h1>
                <p>This is a short description of the blog</p>
                <p>
                    <button class="btn btn-danger">Read Article</button>
                </p>
            </div>
        </div>

        <div class="small-blog-card">
            <div class="small-blog-img"></div>
            <div class="small-blog-text">
                <h1>This is the blog heading</h1>
                <p>This is a short description of the blog</p>
                <p>
                    <button class="btn btn-danger">Read Article</button>
                </p>
            </div>
        </div>

        <div class="small-blog-card">
            <div class="small-blog-img"></div>
            <div class="small-blog-text">
                <h1>This is the blog heading</h1>
                <p>This is a short description of the blog</p>
                <p>
                    <button class="btn btn-danger">Read Article</button>
                </p>
            </div>
        </div>

        <div class="small-blog-card">
            <div class="small-blog-img"></div>
            <div class="small-blog-text">
                <h1>This is the blog heading</h1>
                <p>This is a short description of the blog</p>
                <p>
                    <button class="btn btn-danger">Read Article</button>
                </p>
            </div>
        </div>
    </div>
   



@endsection