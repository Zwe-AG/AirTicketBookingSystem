@extends('user.layouts.master')
@section('myContent')
<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    About
                </h1>
                <p class="text-white link-nav"><a href="{{route('user#home')}}"> Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('user#about')}}"> About </a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start about-info Area -->
<section class="about-info-area section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 info-left">
                <img class="img-fluid" src="{{asset('user/img/about-img.jpg')}}" alt="">
            </div>
            <div class="col-lg-6 info-right">
                <h6>About Us</h6>
                <h1>Who We Are?</h1>
                <p>
                    Here, I focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End about-info Area -->

<!-- Start price Area -->
<section class="price-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">We Provide Affordable Prices</h1>
                    <p>Well educated, intellectual people, especially scientists at all times demonstrate considerably.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-price">
                    <h4>Cheap Packages</h4>
                    <ul class="price-list">
                        <li class="d-flex justify-content-between align-items-center">
                            <span>New York</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Maldives</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Sri Lanka</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Nepal</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Thiland</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Singapore</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-price">
                    <h4>Luxury Packages</h4>
                    <ul class="price-list">
                        <li class="d-flex justify-content-between align-items-center">
                            <span>New York</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Maldives</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Sri Lanka</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Nepal</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Thiland</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Singapore</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-price">
                    <h4>Camping Packages</h4>
                    <ul class="price-list">
                        <li class="d-flex justify-content-between align-items-center">
                            <span>New York</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Maldives</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Sri Lanka</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Nepal</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Thiland</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>Singapore</span>
                            <a href="#" class="price-btn">$1500</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End price Area -->


{{-- <!-- Start hot-deal Area -->
<section class="hot-deal-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Today’s Hot Deals</h1>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day to.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 active-hot-deal-carusel">
                <div class="single-carusel">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="https://cdn.pixabay.com/photo/2017/09/02/10/10/singapore-2706849__480.jpg" alt="">
                    </div>
                    <div class="price-detials">
                        <a href="#" class="price-btn">Starting From <span>$250</span></a>
                    </div>
                    <div class="details">
                        <h4 class="text-white">Modern Architecture</h4>
                        <p class="text-white">
                            Singapore
                        </p>
                    </div>
                </div>
                <div class="single-carusel">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="https://cdn.pixabay.com/photo/2017/01/14/22/47/egypt-1980586__480.jpg" alt="">
                    </div>
                    <div class="price-detials">
                        <a href="#" class="price-btn">Starting From <span>$150</span></a>
                    </div>
                    <div class="details">
                        <h4 class="text-white">Ancient Architecture</h4>
                        <p class="text-white">
                            Cairo, Egypt
                        </p>
                    </div>
                </div>
                <div class="single-carusel">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/07/29/20/01/manchester-1555612__480.jpg" alt="">
                    </div>
                    <div class="price-detials">
                        <a href="#" class="price-btn">Starting From <span>$350</span></a>
                    </div>
                    <div class="details">
                        <h4 class="text-white">Great Airport</h4>
                        <p class="text-white">
                            England , Manchester
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End hot-deal Area -->


<!-- Start testimonial Area -->
<section class="testimonial-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Testimonial from our Clients</h1>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-testimonial">
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{asset('user/img/elements/user1.png')}}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
                        </p>
                        <h4>Harriet Maxwell</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{asset('user/img/elements/user2.png')}}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                        </p>
                        <h4>Carolyn Craig</h4>
                           <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{asset('user/img/elements/user1.png')}}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
                        </p>
                        <h4>Harriet Maxwell</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{asset('user/img/elements/user2.png')}}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                        </p>
                        <h4>Carolyn Craig</h4>
                           <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{asset('user/img/elements/user1.png')}}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
                        </p>
                        <h4>Harriet Maxwell</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial item d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{asset('user/img/elements/user2.png')}}" alt="">
                    </div>
                    <div class="desc">
                        <p>
                            A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                        </p>
                        <h4>Carolyn Craig</h4>
                           <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimonial Area --> --}}


@endsection
