@extends('frontend.layouts.frontend')

@section('content')

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
                        
                            <form action="#" class="border-right pr-5 mb-5" method="post" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" name="firstname" id="fname" placeholder="First name">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" name="lastname" id="lname" placeholder="Last name">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>  

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                                        <span class="submitting"></span>
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