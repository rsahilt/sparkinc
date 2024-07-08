@extends('frontend.layouts.frontend')

@section('content')

    <div class="banner product-banner">
        <h1>{{ $title }}</h1>
        <p>Spark Inc / {{ $title }}</p>
    </div>

    <article>Ensure you're always prepared for emergencies with our comprehensive medical kits, designed to provide essential first aid supplies for home, work, or travel.</article>

    <div class="products-container">

        @if($products->isEmpty())
            <h4 style="margin-top:4%">No products available</h4>
        

        @else

        @foreach($products as $product)
        <div class="prod-cards" data-aos="fade-up" data-aos-duration="800">
            <div class="prod-image">
                <img src="{{ asset('storage/images/' . $product->image) }}" alt="product-image">
            </div>

            <div class="prod-details">
                <h1>{{ $product->name }}</h1>
                <span>Brand: {{ $product->brand }}</span>
                <p>Rs.{{ $product->unit_price }}</p>
                <p>
                    <!-- <button class="btn btn-primary cart-btn">Add to Cart</button> -->
                </p>
            </div>
        </div>
        @endforeach
        @endif

    </div>



@endsection
