@extends('frontend.layouts.frontend')


@section('content')
    <div class="banner about-banner">
        <h1>{{ $title }}</h1>
        <p>Spark Inc / {{ $title }}</p>
    </div>

    <div class="about-text">
        <div class="about-descriptions"></div>
        <div class="about-img"></div>
    </div>

    <div class="doctors-container">
        <p>Team</p>
        <h1>Meet Our Team of Experts</h1>
        <div class="doctors-card-container"> 
            <div class="doc-cards" data-aos="fade-up" data-aos-duration="500">
                <img src="{{asset('images/doctor-sample.jpg')}}" alt="sample image of a doctor">
                <div class="doc-info">
                    <h3>Dr. John Doe</h3>
                    <p>Cardiologist</p>
                    <p>email: doctor@company.com</p>
                </div>
            </div>

            <div class="doc-cards" data-aos="fade-up" data-aos-duration="800">
                <img src="{{asset('images/doctor-sample.jpg')}}" alt="sample image of a doctor">
                <div class="doc-info">
                    <h3>Dr. John Doe</h3>
                    <p>Cardiologist</p>
                    <p>email: doctor@company.com</p>
                </div>
            </div>

            <div class="doc-cards" data-aos="fade-up" data-aos-duration="1100">
                <img src="{{asset('images/doctor-sample.jpg')}}" alt="sample image of a doctor">
                <div class="doc-info">
                    <h3>Dr. John Doe</h3>
                    <p>Cardiologist</p>
                    <p><span class="emailspan">email:</span> doctor@company.com</p>
                </div>
            </div>

        </div>
</div>
@endsection

