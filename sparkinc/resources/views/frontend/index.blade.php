<!-- extending the frontend layout -->
@extends('frontend.layouts.frontend')

@section('content')
    
    <div class="homepage-content">
        <div class="text-box" data-aos="fade-right" data-aos-duration="2000">
            <h1>Listen to Your Heart:  <br> The Crucial Role of ECG Checks</h1>
            <p><sup>" </sup>Your heart beats tirelessly, and ECG checks offer a way to tune into its rhythm, ensuring it stays strong and healthy. Regular checks are a proactive step towards a healthier heart and a longer, happier life.<sup> "</sup></p>
            <p>
                <a href="/about"><button class="btn btn-primary learnmore">LEARN MORE</button></a>
            </p>
        </div>

        <div class="image-box" data-aos="fade-left" data-aos-duration="2000">
            <img src="{{asset('images/kit.png')}}" alt="hero image">
        </div>
    </div>

    <div class="cards-homepage" data-aos="fade-right" data-aos-duration="2000">
        <div class="card">
            <div class="card-body">
                <p class="card-icon icon1"><i class="fas fa-user-md"></i></p>
                <h5 class="card-title">Qualified Doctors</h5>
                <p class="card-text">
                Our team includes highly qualified doctors dedicated to providing exceptional care. Our team includes highly qualified doctors dedicated to providing exceptional care. With their expertise and commitment, you can trust that you're in good hands.  </p>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <p class="card-icon icon2"><i class="fas fa-users"></i></p>
                <h5 class="card-title">Professional Staffs</h5>
                <p class="card-text">
                Our professional medical staff is highly skilled and experienced in providing top-notch healthcare services. Their dedication and expertise ensure that you receive the best possible care.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <p class="card-icon icon3"><i class="fas fa-chalkboard-teacher"></i></p>
                <h5 class="card-title">Training Sessions</h5>
                <p class="card-text">
                Our professional medical staff regularly participates in advanced training sessions to stay updated with the latest medical advancements. This continuous education ensures they provide the highest quality care to our patients.</p>
            </div>
        </div>
    </div>

    <div class="home-about">
        <div class="description-container" data-aos="fade-up" data-aos-duration="2000">
            <p>About Us</p>
            <h1>We Measure What Matters</h1>
            <p>Our commitment to cutting-edge technology and patient care is stronger than ever with the introduction of the Spandan ECG Kit. This innovative device allows us to provide faster, more accurate ECG readings, ensuring prompt diagnosis and treatment for patients.</p>
            <br>
            <p>
                <a href="/about"><button class=" btn btn-primary about-btn">More About Us</button></a>
            </p>
        </div>
        <div class="image-container">
            <!-- data-aos="fade-left" data-aos-duration="2000" -->
            <img src="{{asset('images/heartbeat.jpg')}}" alt="image" width="80%" height="80%">
        </div>
    </div>

    <div class="video-container">
        <a href="https://www.youtube.com/watch?v=bjQ0E311Nyk&ab_channel=SparkInc" target="_blank">
            <div class="circle">
                <i class="fa fa-play"></i>
            </div>
        </a>        
        <p>Spandan - A Portable ECG Kit</p>
    </div>


    <div class="home-blog">
        <div class="description-container" data-aos="fade-up" data-aos-duration="2000">
            <p>Blog Posts</p>
            <h1>Our Latest Blog Posts</h1>
            <p>Your comprehensive guide to health and wellness, featuring expert insights, the latest medical advancements, and practical tips for living a healthier life.</p>
            <br>
            <p>
                <a href="/blogs"><button class=" btn btn-primary about-btn">All Blog Posts</button></a>
            </p>
        </div>
        <div class="image-container" data-aos="fade-left" data-aos-duration="2000">
            <img src="{{asset('images/blog-thumbnail.jpg')}}" alt="image" width="80%" height="80%">
        </div>
    </div>

    <div class="cards-homepage testimonials">
        
        <div class="card-container testimonials-container">
            <div class="testimonial-text-container">
                <p>Testimonials</p>
                <h1>Invaluable Feedbacks</h1>
            </div>
            <div class="testimonial-card-container">
                <!-- data-aos="fade-left" data-aos-duration="2000" -->
                <div class="card">
                    <div class="card-body testimonial-card-body">
                        <p class="card-text testimonial-text">
                        These kits are a valuable addition to our medical toolkit, whether it's in a bedside or outpatient setting. They facilitate the assessment of UTls and proteinuria, which is pivotal in my line of work. I confidently recommend them to my fellow clinicians, and the user-friendly reporting system makes it easy for paramedics to grasp.</p>
                            <div class="client-detail">
                                <!-- <div class="client-dp"></div> -->
                                <div class="client-name">
                                    <p>- Dr. Mala Shrestha</p>
                                    <p>
                                        <i class="fa fa-star" ></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star" ></i>
                                        <i class="fa fa-star" ></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body testimonial-card-body">
                        <p class="card-text testimonial-text">
                        Thank you Spark Inc for the Neodocs, UTI Kit, incredibly convenient and simple. I was able to take the test at home, which gave me confidence and comfort. The cost-effective gear and expert report were outstanding, which I also discussed with my doctor, this experience has been amazing and really emotional. I appreciate you offering such a fantastic product.</p>
                            <div class="client-detail">
                                <!-- <div class="client-dp"></div> -->
                                <div class="client-name">
                                    <p>- Gagan Raj Dangol</p>
                                    <p>
                                        <i class="fa fa-star" ></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star" ></i>
                                        <i class="fa fa-star" ></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body testimonial-card-body">
                        <p class="card-text testimonial-text">
                            Due to my parents diabetic condition, they needed to make frequent visits to the doctor, which was quite time-consuming. During this time, I came across the Neodocs Kidney test kit, which I purchased and utilized for my parents' health. Conducting the test before their doctor's appointment allowed us to identify any issues ahead of time. This not only brought comfort and ease but also managed to save some valuable</p>                        
                            <div class="client-detail">
                                <!-- <div class="client-dp"></div> -->
                                <div class="client-name">
                                    <p>- Shanta Shrestha</p>
                                    <p>
                                        <i class="fa fa-star" ></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star" ></i>
                                        <i class="fa fa-star" ></i>
                                        <i class="fa fa-star"></i>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>

                

                
            </div>
        </div>
    </div>

@endsection

    