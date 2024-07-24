<!-- utility bar begins -->
<div class="utility-bar">

    <div class="inner-utility-bar">
        <div class="utility-contacts">
            <i class="fa fa-phone"></i> &nbsp; 9876543210
            <i class="fa fa-envelope"></i> &nbsp; support@sparkinc.com
        </div>

        <div class="utility-social-media">
            <a href="https://www.facebook.com/spark.inc.pvt.ltd">
                <svg class="svg-social-media" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 24 24">
                    <path d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z" fill="#fff"></path>
                </svg>
            </a>

            <a href="https://www.instagram.com/sparkincpvtltd/">
                <svg class="svg-social-media" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
                    <path d="M 16 3 C 8.83 3 3 8.83 3 16 L 3 34 C 3 41.17 8.83 47 16 47 L 34 47 C 41.17 47 47 41.17 47 34 L 47 16 C 47 8.83 41.17 3 34 3 L 16 3 z M 37 11 C 38.1 11 39 11.9 39 13 C 39 14.1 38.1 15 37 15 C 35.9 15 35 14.1 35 13 C 35 11.9 35.9 11 37 11 z M 25 14 C 31.07 14 36 18.93 36 25 C 36 31.07 31.07 36 25 36 C 18.93 36 14 31.07 14 25 C 14 18.93 18.93 14 25 14 z M 25 16 C 20.04 16 16 20.04 16 25 C 16 29.96 20.04 34 25 34 C 29.96 34 34 29.96 34 25 C 34 20.04 29.96 16 25 16 z" fill="#fff"></path>
                </svg>
            </a>

            <a href="#">
                <svg class="svg-social-media" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
                    <path d="M 6.9199219 6 L 21.136719 26.726562 L 6.2285156 44 L 9.40625 44 L 22.544922 28.777344 L 32.986328 44 L 43 44 L 28.123047 22.3125 L 42.203125 6 L 39.027344 6 L 26.716797 20.261719 L 16.933594 6 L 6.9199219 6 z" fill="#fff"></path>
                </svg>
            </a>
        </div>
    </div>

</div>
<!-- utility bar begins -->

<!-- main header begins -->
<header>
    <div class="inner-header">
        <div class="logo">
            <a href="/">
                <img src="{{asset('images/spark.png')}}" alt="Spark Inc Logo" class="imagelogo">
            </a>
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
                            <a class="nav-link {{ $slug === 'homepageslug' ? 'activenavlink' : '' }}" href="/">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $slug === 'aboutpageslug' ? 'activenavlink' : '' }}" href="/about">ABOUT</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $slug === 'productpageslug' ? 'activenavlink' : '' }}" href="/products">PRODUCTS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $slug === 'blogpageslug' ? 'activenavlink' : '' }}" href="/blogs">BLOGS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ $slug === 'contactpageslug' ? 'activenavlink' : '' }}" href="/contact">CONTACT</a>
                        </li>
                    </ul>

                    <form class="d-flex ms-4 search-resp" action="{{ route('products.search') }}"
                        method="POST" novalidate>
                        @csrf
                        <input class="search-box search" type="search" name="search" placeholder="Search our products" aria-label="Search">
                        
                        <button class="btn btn-outline-success search-btn" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                    
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- main header ends -->