@extends('frontend.layouts.frontend')

@section('content')

    <div class="banner product-banner">
        <h1>{{ $title }}</h1>
        <p>Spark Inc / {{ $title }}</p>
    </div>

    <article>Ensure you're always prepared for emergencies with our comprehensive medical kits, designed to provide essential first aid supplies for home, work, or travel.</article>

    <div class="products-container">
        <div class="prod-cards" data-aos="fade-up" data-aos-duration="500">
            <div class="prod-image">
                <img src="{{asset('/images/about.jpg')}}" alt="product-image">
            </div>

            <div class="prod-details">
                <h1>Spandan ECG Kit</h1>
                <p>Rs.500</p>
                <p>
                    <button class="btn btn-primary cart-btn">Add to Cart</button>
                </p>
            </div>
        </div>

        <div class="prod-cards" data-aos="fade-up" data-aos-duration="800">
            <div class="prod-image">
                <img src="{{asset('/images/about.jpg')}}" alt="product-image">
            </div>

            <div class="prod-details">
                <h1>Spandan ECG Kit</h1>
                <p>Rs.500</p>
                <p>
                    <button class="btn btn-primary cart-btn">Add to Cart</button>
                </p>
            </div>
        </div>

        <div class="prod-cards" data-aos="fade-up" data-aos-duration="1100">
            <div class="prod-image">
                <img src="{{asset('/images/about.jpg')}}" alt="product-image">
            </div>

            <div class="prod-details">
                <h1>Spandan ECG Kit</h1>
                <p>Rs.500</p>
                <p>
                    <button class="btn btn-primary cart-btn">Add to Cart</button>
                </p>
            </div>
        </div>

        
    </div>



@endsection
