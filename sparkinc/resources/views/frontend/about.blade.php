@extends('frontend.layouts.frontend')


@section('content')
    <div class="banner about-banner">
        <h1>{{ $title }}</h1>
        <p>Spark Inc / {{ $title }}</p>
    </div>

    <div class="about-text">
        
        <div class="about-descriptions">
            <p class="bg-text" data-aos="fade-in" data-aos-duration="300">OUR STORY</p>
            
            <p data-aos="fade-right" data-aos-duration="1000">Our company was born out of a desire to bridge the gap in healthcare accessibility in Nepal, especially for those in rural areas where medical resources are scarce.</p>
            
            <p data-aos="fade-right" data-aos-duration="1200"> It all started with a journey of compassion and the determination to make a difference. Our founders were driven by empathy for the underserved communities, as they witnessed the struggles many Nepali people face in accessing basic healthcare.</p>
            
            <p data-aos="fade-right" data-aos-duration="1400"> With a clear vision in mind, we began our mission to create a company that would revolutionize healthcare accessibility in Nepal.</p>
        </div>
        <div class="about-img"></div>
    </div>

    <div class="about-aim">
        <h1 data-aos="fade-up" data-aos-duration="500">Our Aim</h1>
        <p data-aos="fade-up" data-aos-duration="700">Our approach is simple yet powerful: to make affordable healthcare products available to every corner of Nepal. We focus on rural areas where the need is most urgent. By leveraging innovative distribution channels and partnering with local organizations, we ensure that essential medical supplies reach those who need them the most. We strive to provide a comprehensive range of solutions that empower individuals and communities to lead healthier lives.</p>
    </div>

    <div class="about-vision">
        <h1 data-aos="fade-up" data-aos-duration="500">Looking Ahead</h1>
        <p data-aos="fade-up" data-aos-duration="700">As we continue to grow, our commitment to our mission remains unwavering. We envision a Nepal where no one has to choose between basic necessities and healthcare, where every individual has the opportunity to thrive. We invite you to join us in making this vision a reality. Together, we can bring hope, health, and happiness to every corner of Nepal.</p>

        <p data-aos="fade-up" data-aos-duration="900">Thank you for being a part of our story. With your support, we can continue to make a meaningful impact and ensure that affordable and accessible healthcare becomes a reality for all.</p>
    </div>

    <hr class="abouthr">

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

