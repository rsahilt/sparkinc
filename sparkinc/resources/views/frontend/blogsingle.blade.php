@extends('frontend.layouts.frontend')

@section('content')

    <div class="single-blog">
        <div class="singleblog-description">
            <p style="margin-bottom:0" class="text-secondary">Blog, {{ $information->category }}</p>
            <em><p style="margin-bottom:0" class="text-secondary">Posted By: {{ $information->author }} on {{ $information->created_at->format('d F, Y')}}</p></em>
            <h3 style="margin-top:0">{{ $information->title }}</h3>
            <img src="/storage/images/{{ $information->image }}" alt="{{ $information->name }}">
            <p>
                {!! $information->description !!}
            </p>
        </div>
    </div>
        
</div>

@endsection