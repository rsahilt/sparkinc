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
                    <h1>Your Health Hub: Tips for a Healthy Lifestyle</h1>
                    <p>Whether you're looking to improve your diet, boost your fitness routine, manage stress, or understand the latest medical trends, we've got you covered.</p>
                    <button class="btn btn-secondary">Read Article</button>
                </div>
            </div>

            <div class="blog-card" data-aos="fade-up" data-aos-direction="1500">
                <div class="blog-image"></div>
                <div class="blog-text">
                    <h1>Your Health Hub: Tips for a Healthy Lifestyle</h1>
                    <p>Whether you're looking to improve your diet, boost your fitness routine, manage stress, or understand the latest medical trends, we've got you covered.</p>
                    <button class="btn btn-secondary">Read Article</button>
                </div>
            </div>
        </div>

        <div class="blog-lists" data-aos="fade-up" data-aos-direction="1500">
            <p>Top Blogs</p>
            <h1>Your Health Hub: Tips for a Healthy Lifestyle</h1>
            <p>Whether you're looking to improve your diet, boost your fitness routine, manage stress, or understand the latest medical trends, we've got you covered.
            </p>
            <p><a href="#">Read More &rarr;</a></p>

            <h1>Your Health Hub: Tips for a Healthy Lifestyle</h1>
            <p>Whether you're looking to improve your diet, boost your fitness routine, manage stress, or understand the latest medical trends, we've got you covered.
            </p>
            <p><a href="#">Read More &rarr;</a></p>

            <h1>Your Health Hub: Tips for a Healthy Lifestyle</h1>
            <p>Whether you're looking to improve your diet, boost your fitness routine, manage stress, or understand the latest medical trends, we've got you covered.
            </p>
            <p><a href="#">Read More &rarr;</a></p>
        </div>
    </div>

    <div class="blog-container">
        <div class="blog-thumbnails all-blog">
            <div class="blog-card">
                <div class="blog-image"></div>
                <div class="blog-text">
                    <h1>Your Health Hub: Tips for a Healthy Lifestyle</h1>
                    <p>Whether you're looking to improve your diet, boost your fitness routine, manage stress, or understand the latest medical trends, we've got you covered.</p>
                    <button class="btn btn-secondary">Read Article</button>
                </div>
            </div>

            <div class="blog-card">
                <div class="blog-image"></div>
                <div class="blog-text">
                    <h1>Your Health Hub: Tips for a Healthy Lifestyle</h1>
                    <p>Whether you're looking to improve your diet, boost your fitness routine, manage stress, or understand the latest medical trends, we've got you covered.</p>
                    <button class="btn btn-secondary">Read Article</button>
                </div>
            </div>

            <div class="blog-card">
                <div class="blog-image"></div>
                <div class="blog-text">
                    <h1>Your Health Hub: Tips for a Healthy Lifestyle</h1>
                    <p>Whether you're looking to improve your diet, boost your fitness routine, manage stress, or understand the latest medical trends, we've got you covered.</p>
                    <button class="btn btn-secondary">Read Article</button>
                </div>
            </div>

            <div class="blog-card">
                <div class="blog-image"></div>
                <div class="blog-text">
                    <h1>Your Health Hub: Tips for a Healthy Lifestyle</h1>
                    <p>Whether you're looking to improve your diet, boost your fitness routine, manage stress, or understand the latest medical trends, we've got you covered.</p>
                    <button class="btn btn-secondary">Read Article</button>
                </div>
            </div>
        </div>
    </div>



@endsection