<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark Inc - We Measure What Matters</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



    <!-- slide in animation js -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts Link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="utility-bar">

        <div class="inner-utility-bar">
            <div class="utility-contacts">
                <i class="fa fa-phone"></i> &nbsp; 9876543210
                <i class="fa fa-envelope"></i> &nbsp; contact@sparkinc.com
            </div>

            <div class="utility-social-media">
                <svg class="svg-social-media" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 24 24">
                    <path d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z" fill="#fff"></path>
                </svg>

                <svg class="svg-social-media" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
                    <path d="M 16 3 C 8.83 3 3 8.83 3 16 L 3 34 C 3 41.17 8.83 47 16 47 L 34 47 C 41.17 47 47 41.17 47 34 L 47 16 C 47 8.83 41.17 3 34 3 L 16 3 z M 37 11 C 38.1 11 39 11.9 39 13 C 39 14.1 38.1 15 37 15 C 35.9 15 35 14.1 35 13 C 35 11.9 35.9 11 37 11 z M 25 14 C 31.07 14 36 18.93 36 25 C 36 31.07 31.07 36 25 36 C 18.93 36 14 31.07 14 25 C 14 18.93 18.93 14 25 14 z M 25 16 C 20.04 16 16 20.04 16 25 C 16 29.96 20.04 34 25 34 C 29.96 34 34 29.96 34 25 C 34 20.04 29.96 16 25 16 z" fill="#fff"></path>
                </svg>

                <svg class="svg-social-media" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
                    <path d="M 6.9199219 6 L 21.136719 26.726562 L 6.2285156 44 L 9.40625 44 L 22.544922 28.777344 L 32.986328 44 L 43 44 L 28.123047 22.3125 L 42.203125 6 L 39.027344 6 L 26.716797 20.261719 L 16.933594 6 L 6.9199219 6 z" fill="#fff"></path>
                </svg>
            </div>
        </div>

    </div>

    <header>
        <div class="inner-header">
            <div class="logo">
                <img src="{{asset('images/spark.png')}}" alt="Spark Inc Logo" class="imagelogo">
            </div>

            <!-- Navigation Bar -->
            <nav class="navbar navbar-expand-lg">
                <div class="navbar-content">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
                            <li class="nav-item">
                                <a class="nav-link" href="#">HOME</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link"  href="#">ABOUT</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">CONTACT</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">PRODUCTS</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">BLOG</a>
                            </li>
                        </ul>

                        <form class="d-flex ms-4">
                            @csrf
                            <input class="search-box" type="search" placeholder="Search our products" aria-label="Search">
                            
                            <button class="btn btn-outline-success search-btn" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                        
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section>
    
            <div class="homepage-content">
                <div class="text-box" data-aos="fade-right" data-aos-duration="2000">
                    <h1>Listen to Your Heart:  <br> The Crucial Role of ECG Checks</h1>
                    <p><sup>" </sup>Your heart beats tirelessly, and ECG checks offer a way to tune into its rhythm, ensuring it stays strong and healthy. Regular checks are a proactive step towards a healthier heart and a longer, happier life.<sup> "</sup></p>
                    <p>
                        <button class="btn btn-primary learnmore">LEARN MORE</button>
                    </p>
                </div>

                <div class="image-box" data-aos="fade-left" data-aos-duration="2000">
                    <!-- <img src="{{asset('images/hero-img.jpg')}}" width="70%" height="100%" alt="hero image"> -->
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
                        <button class=" btn btn-primary about-btn">More About Us</button>
                    </p>
                </div>
                <div class="image-container" data-aos="fade-left" data-aos-duration="2000">
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
                        <button class=" btn btn-primary about-btn">All Blog Posts</button>
                    </p>
                </div>
                <div class="image-container" data-aos="fade-left" data-aos-duration="2000">
                    <img src="{{asset('images/blog-thumbnail.jpg')}}" alt="image" width="80%" height="80%">
                </div>
            </div>

    </section>

    


    


     <!-- js for animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  	<script>
    	AOS.init();
  	</script>

</body>
</html>