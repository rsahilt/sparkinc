@extends('frontend.layouts.frontend')

@section('content')

@if(session('success'))
    <div class="modal show d-block" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="width: 100vw; height: 100vh;">
            <div class="modal-content" style="background: transparent; border: none;">
                <div class="modal-body text-center d-flex align-items-center justify-content-center" style="width: 100%; height: 100%;">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" viewBox="0 0 300 300" style="width: 50px; height: 50px;">
                        <path class="circle" stroke="#1C9943" stroke-width="10" fill="#fff" fill-opacity="0" stroke-miterlimit="10" d="M150,47.9c18.4,0,35.4,4.6,51,13.8s28,21.6,37.2,37.2s13.8,32.6,13.8,51s-4.6,35.4-13.8,51s-21.6,28-37.2,37.2 s-32.6,13.8-51,13.8s-35.4-4.6-51-13.8s-28-21.6-37.2-37.2s-13.8-32.6-13.8-51s4.6-35.4,13.8-51s21.6-28,37.2-37.2 S131.7,47.9,150,47.9z M150,238.7c16.2,0,31-4,"/>
                        <path class="tick" cx="0" cy="0" r="1" opacity="1" fill="#1C9943" stroke="" stroke-width="10" d="M208.4,118.6c0.8-0.8,1.2-1.9,1.2-3.3c0-1.4-0.4-2.6-1.2-3.7l-3.7-3.3c-0.8-1.1-1.9-1.6-3.3-1.6 s-2.6,0.4-3.7,1.2l-67,67l-28.4-28.8c-1.1-0.8-2.3-1.2-3.7-1.2c-1.4,0-2.5,0.4-3.3,1.2l-3.7,3.3c-0.8,1.1-1.2,2.3-1.2,3.7 s0.4,2.5,1.2,3.3l35.4,35.8c1.1,1.1,2.3,1.6,3.7,1.6c1.4,0,2.5-0.5,3.3-1.6L208.4,118.6z"/>
                    </svg>
                    <p class="mt-3 success-msg">Your message has been sent successfully.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#successModal').removeClass('show').addClass('fade').modal('hide');
        }, 3000); // 3 seconds
    });
    </script>
@endif

    <div class="banner contact-banner">
        <h1>{{ $title }}</h1>
        <p>Spark Inc / {{ $title }}</p>
    </div>

    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h2 class="mb-5">Get In Touch <br> It's easy.</h2>
                        
                            <form action="{{ route('send.message') }}" method="POST" novalidate class="border-right pr-5 mb-5">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last name">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>  

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="Send Message" class="btn btn-primary learnmore rounded-0 py-2 px-4">
                                    </div>
                                </div>

                            </form>

                        </div>

                        <div class="col-lg-6 contact-icons">
                            <div class="tel">
                                <div class="icn">
                                    <img src="{{asset('/images/email.png')}}" alt="envelope icon">
                                </div>
                                <div class="txt">support@sparkinc.com</div>
                            </div>
                            <div class="adr">
                                <div class="icn">
                                    <img src="{{asset('/images/telephone.png')}}" alt="telephone icon">
                                </div>
                                <div class="txt">+977-9876543210</div>
                            </div>
                            <div class="eml">
                                <div class="icn">
                                    <img src="{{asset('/images/location.png')}}" alt="location icon">
                                </div>
                                <div class="txt">Kathmandu, Nepal</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection