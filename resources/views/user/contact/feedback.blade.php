@extends('user.layouts.master')
@section('myContent')
<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Contact Us
                </h1>
                <p class="text-white link-nav"><a href="{{route('user#home')}}"> Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('user#contactPage')}}"> Contact Us</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row">
            <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <div class="contact-details">
                        <h5>Binghamton, New York</h5>
                        <p>
                            4343 Hinkle Deegan Lake Road
                        </p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5>00 (958) 9865 562</h5>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5>support@colorlib.com</h5>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="form-area contact-form text-right" action="{{route('user#sendmessage')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input name="name" placeholder="Enter your name" class="common-input mb-20 form-control" value="{{old('name',Auth::user()->name)}}"  type="text">
                            @error('name')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            <input name="email" placeholder="Enter email address" class="common-input mb-20 form-control" value="{{old('email',Auth::user()->email)}}"  type="email">
                            @error('email')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="message" placeholder="Enter Messege">{{old('message')}}</textarea>
                            @error('message')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            {{-- <div class="alert-msg" style="text-align: left;"></div> --}}
                            <button class="genric-btn primary" style="float: right;" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End contact-page Area -->
@endsection