@extends('user.layouts.master')
@section('myContent')
<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Customer Review Chatting Page
                </h1>
                <p class="text-white link-nav"><a href="{{route('user#home')}}"> Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('user#reviewpage')}}"> Customer Review Chat </a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
    <div class="container">
            <div class="card mx-auto" style="width: 18rem; margin:100px 0px">
                <div class="card-header">
                    @if (Auth::user()->image == null)
                        @if (Auth::user()->gender == 'male')
                            <img src="{{asset('profile/male.jpeg')}}" class="rounded-circle me-2" height="50" width="50">
                        @else
                            <img src="{{asset('profile/female.jpeg')}}" class="rounded-circle me-2" height="50" width="50"/>
                        @endif
                        @else
                            <img src="{{ asset('storage/'.Auth::user()->image) }}" class="rounded-circle me-2" height="50" width="50" style="object-fit:cover;"/>
                        @endif
                    <strong class="me-auto">{{Auth::user()->name}}</strong>
                    <a href="{{route('user#rulepage')}}" type="button" class="close" style="margin-left:80px;margin-top:-60px">
                        <span aria-hidden="true">&times;</span>
                      </a>
                  </div>
                <img src="https://cdn.pixabay.com/photo/2019/09/07/02/56/background-4457839__480.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Let's Chat Together</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{route('user#reviewpage')}}" class="btn btn-primary mx-auto">Let's Chat</a>
                </div>
            </div>
    </div>
@endsection
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
