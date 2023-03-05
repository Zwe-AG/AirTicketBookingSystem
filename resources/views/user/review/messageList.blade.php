@extends('user.layouts.master')
@section('myContent')
<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Customer Review List Page
                </h1>
                <p class="text-white link-nav"><a href="{{route('user#home')}}"> Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('user#reviewList')}}"> Customer Review List </a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
    <!-- Start testimonial Area -->
<section class="testimonial-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Chatting List from our Customers</h1>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="">
                @foreach ($reviews as $r)
                <div class="single-testimonial item d-flex flex-row col-10 offset-1 mb-5">
                    <div class="thumb">
                        @if ($r->user_image == null)
                        @if ($r->user_gender == 'male')
                            <img src="{{asset('profile/male.jpeg')}}" class="rounded-circle me-2" width="100px" height="100px">
                        @else
                            <img src="{{asset('profile/female.jpeg')}}" class="rounded-circle me-2" width="100px" height="100px"/>
                        @endif
                        @else
                            <img src="{{ asset('storage/'.$r->user_image) }}" class="rounded-circle me-2" style="object-fit:cover"  width="100px" height="100px"/>
                        @endif
                    </div>
                    <div class="desc">
                        <p>
                            {{$r->review}}
                        </p>
                        <h4>{{$r->name}}</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End testimonial Area -->
@endsection
@section('scriptSource')
<script>
    @if(Session::has('success'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true,
            "positionClass": "toast-bottom-right",
        }
        toastr.success("{{ session('success') }}");
    @endif
</script>
@endsection
