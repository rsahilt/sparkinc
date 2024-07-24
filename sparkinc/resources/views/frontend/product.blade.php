@extends('frontend.layouts.frontend')

@section('content')

    <!-- product details modal -->
    <div id="productModal" class="prod-modal">
        <div class="prod-modal-content">
            <span class="close">&times;</span>
            <div class="prod-modal-body">
                <div class="modal-left">
                    <img id="modalProductImage" src="" alt="product-image">
                </div>
                <div class="modal-right">
                    <h2 id="modalProductName"></h2>
                    <p id="modalBrand"></p>
                    <p id="modalPrice"></p>
                    <div id="modalDescription"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal ends -->

    <div class="banner product-banner">
        <h1>{{ $title }}</h1>
        <p>Spark Inc / {{ $title }}</p>
    </div>

    <article>Ensure you're always prepared for emergencies with our comprehensive medical kits, designed to provide essential first aid supplies for home, work, or travel.</article>

    <div class="products-container">

        @if(isset($searchtitle))
            <h4 class="mt-2">{{ $searchtitle }}</h4>
        @endif

        @if($products->isEmpty())
            <h4 style="margin-top:4%">No products available</h4>
    
        @else
            <div class="main-prod-container">
                @foreach($products as $product)
                <div class="prod-cards" data-aos="fade-up" data-aos-duration="800">
                    <div class="prod-image">
                        <img src="{{ asset('storage/images/' . $product->image) }}" alt="product-image">
                    </div>

                    <div class="prod-details">
                        <h1>{{ $product->name }}</h1>
                        <span>Brand: {{ $product->brand }}</span>
                        <p>Rs.{{ $product->unit_price }}</p>
                        <!-- Description is hidden initially -->
                        <p class="prod-description" style="display: none;">{{ $product->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        @endif

    </div>

@endsection
