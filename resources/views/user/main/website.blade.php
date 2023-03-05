@extends('user.layouts.master')
@section('myContent')
 <!-- start banner Area -->
 <section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 banner-left">
                <h6 class="text-white">Away from monotonous life</h6>
                <h1 class="text-white">Magical Travel</h1>
                <p class="text-white">
                    If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.
                </p>
                <a href="#" class="primary-btn text-uppercase">Get Started</a>
            </div>
            <div class="col-lg-4 col-md-6 banner-right">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Flights</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                    <form class="form-wrap" action="{{route('user#flightlistpage')}}" method="get">
                        @csrf
                        <input type="text" class="form-control" name="searchFrom" placeholder="From " value="{{request('searchKey')}}">
                        <input type="text" class="form-control" name="searchTo" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '" value="{{request('searchKey')}}">
                        <select class="form-control" name="searchType">
                            <option value="">Select Type</option>
                            <option value="oneway">One Way</option>
                            <option value="roundtrip">Round Trip</option>
                        </select>
                        <select class="form-control" name="searchClass">
                            <option value="">Select Class</option>
                            <option value="first">First</option>
                            <option value="economy">Economy</option>
                            <option value="bussiness">Bussiness</option>
                        </select>
                        <button type="submit" class="genric-btn primary radius text-uppercase" style="margin-left:-135px;margin-top:20px"> Search flights</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start popular-destination Area -->
<section class="popular-destination-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Popular Destinations</h1>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-destination relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/d1.jpg" alt="">
                    </div>
                    <div class="desc">
                        <a href="#" class="price-btn">$150</a>
                        <h4>Mountain River</h4>
                        <p>Paraguay</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-destination relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/d2.jpg" alt="">
                    </div>
                    <div class="desc">
                        <a href="#" class="price-btn">$250</a>
                        <h4>Dream City</h4>
                        <p>Paris</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-destination relative">
                    <div class="thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/d3.jpg" alt="">
                    </div>
                    <div class="desc">
                        <a href="#" class="price-btn">$350</a>
                        <h4>Cloud Mountain</h4>
                        <p>Sri Lanka</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End popular-destination Area -->


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


<!-- Start other-issue Area -->
<section class="other-issue-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-10">Other issues we can help you with</h1>
                    <p>We all live in an age that belongs to the young at heart. Life that is.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="img/o1.jpg" alt="">
                    </div>
                    <a href="#">
                        <h4>Rent a Car</h4>
                    </a>
                    <p>
                        The preservation of human life is the ultimate value, a pillar of ethics and the foundation.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="img/o2.jpg" alt="">
                    </div>
                    <a href="#">
                        <h4>Cruise Booking</h4>
                    </a>
                    <p>
                        I was always somebody who felt quite sorry for myself, what I had not got compared.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="img/o3.jpg" alt="">
                    </div>
                    <a href="#">
                        <h4>To Do List</h4>
                    </a>
                    <p>
                        The following article covers a topic that has recently moved to center stage–at least it seems.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="img/o4.jpg" alt="">
                    </div>
                    <a href="#">
                        <h4>Food Features</h4>
                    </a>
                    <p>
                        There are many kinds of narratives and organizing principles. Science is driven by evidence.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End other-issue Area -->


<!-- Start exclusive deal Area -->
<section class="section-gap backgroundImage" style="margin-top:-100px;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12">
                <div class="menu-content pb-70 clock_sec clockdiv" id="clockdiv">
                    <div class="col-lg-12 text-center mb-6 ">
                        <h1>Valentine Couple Packages Very Soon!</h1>
                        <p>If who are in extremely love with my website, Will you apply flight ticket? </p>
                    </div>
                    <div class="col-lg-12 text-center pt-15">
                        <div class="row clock-wrap">
                            <div class="col-3 clockinner1 clockinner">
                                <h1 class="days">150</h1>
                                <span class="smalltext">Days</span>
                            </div>
                            <div class="col-3 clockinner clockinner1">
                                <h1 class="hours">23</h1>
                                <span class="smalltext">Hours</span>
                            </div>
                            <div class="col-3 clockinner clockinner1">
                                <h1 class="minutes">47</h1>
                                <span class="smalltext">Mins</span>
                            </div>
                            <div class="col-3 clockinner clockinner1">
                                <h1 class="seconds">59</h1>
                                <span class="smalltext">Secs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End exclusive deal Area -->

{{-- <!-- Start testimonial Area -->
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
                        <img class="img-fluid" src="img/elements/user1.png" alt="">
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
                        <img class="img-fluid" src="img/elements/user2.png" alt="">
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
                        <img class="img-fluid" src="img/elements/user1.png" alt="">
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
                        <img class="img-fluid" src="img/elements/user2.png" alt="">
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
                        <img class="img-fluid" src="img/elements/user1.png" alt="">
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
                        <img class="img-fluid" src="img/elements/user2.png" alt="">
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

<!-- Start home-about Area -->
<section class="home-about-area">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-end">
            <div class="col-lg-6 col-md-12 home-about-left">
                <h1>
                    Did not find your Package? <br>
                    Feel free to ask us. <br>
                    We‘ll make it for you
                </h1>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
                </p>
                <a href="#" class="primary-btn text-uppercase">request custom price</a>
            </div>
            <div class="col-lg-6 col-md-12 home-about-right no-padding">
                <img class="img-fluid" src="img/about-img.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->


{{-- <!-- Start blog Area -->
<section class="recent-blog-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-10">Latest from Our Blog</h1>
                    <p>With the exception of Nietzsche, no other madman has contributed so much to human sanity as has.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-recent-blog-carusel">
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b1.jpg" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#"><h4 class="title">Low Cost Advertising</h4></a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b2.jpg" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#"><h4 class="title">Creative Outdoor Ads</h4></a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b3.jpg" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#"><h4 class="title">It's Classified How To Utilize Free</h4></a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b1.jpg" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#"><h4 class="title">Low Cost Advertising</h4></a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b2.jpg" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#"><h4 class="title">Creative Outdoor Ads</h4></a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>
                <div class="single-recent-blog-post item">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b3.jpg" alt="">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <ul>
                                <li>
                                    <a href="#">Travel</a>
                                </li>
                                <li>
                                    <a href="#">Life Style</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#"><h4 class="title">It's Classified How To Utilize Free</h4></a>
                        <p>
                            Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                        </p>
                        <h6 class="date">31st January,2018</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End recent-blog Area --> --}}

<!-- Start brand Area -->
<section class="brand-area section-gap " style="margin-top: -50px">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10 text-">We Work With The Best Partner</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAAB3CAMAAAAO5y+4AAAAeFBMVEX////YoQDWmwDXngD///3fs0/58uHWmQD+/vr16tT58+f37t/y4bjpzZTgtU/9+u7esEPZpBz58Nv16cjcrSzesVbbqTPTlADoyIvnx4Dz5MHu2a3drUj9+vLhuWvapRTnxXXesDvjvGbz5Mjr0p/jvF7jv3bu2LLQHKSuAAAEzklEQVRoge2YC3OjKhSAQQg+4gNJYgzWRaOm//8f3nNQ89gmaXZS587O8s20RRQ+QThACXE4HA6Hw+FwOBwOh8Ph+OfghASXNFxxPiaDx2V+hqr77U0S/B1q0iyqrrxwFpIu45qQXQ99YDZEpmI57Zqx2UuEL5t9THZMkON+Q1KvIXwxcX9uLwmaqltFZHciRKG3yH7YG5NLhZd+HjNDsisJyaz3pz+wTPhdL9D9WtCb5vU5jd7pJeBlNF3Su0qTkVKN7d3Md2K2pLf1PM9HvN3o3dNWmhx8xCzp5QG3kHzyli1AvWRh75kCvevpoqZy9EpOqr1ewNuXyCEYvadyYmuSBMZV7w+xnwZLjGfGKKV7br2YPMPAC1kshSH+894I6fcRh+9bRzPrrcELmMMsP9qnflg7ovdb6R2vc05ehn9Crw/YaREnwvtVe7ppEhc2gNRp2nvd/UI/oH0c8oN0v5h2Et+XB92CC+CC/E8vDVpRNcOwAqTWcnWLjCErFUrCzamESFeyGouK/rzFKz8uhYbDp/i2QVFjxvjv+0cxJSBMTHkDyQxrg2BLvXkhxIiibDLbQrSesissxCweVnB8NrHhZTvD2FGvkSroQ5tYN9TrpiyS5VQGfEvZuVRKqbI7PCUp66eG1SLUOhTIOqwGxsyTcQc9ZSiNv+QfqK/m9B0vQy8JmVQtZdVcfUKpPj8TQzx9vNPkYKCJii9oW8t9rx5XhmRr26vgW6gMxPEkTijTczdyvDo89JJAUrOZPy8SPm6vgi0A4lP0RqDthNIGbfzWiwgKxR56s4LmyQUZj+Pznpceq5EY2qiinPrdYW+H4LS5vvZyLFbUX4Xz7RWlm6/533xf/wBaL9bjomygv8nYs1deTenqYXNhz+DdvNYUkJ975a8IplU1XypG7by66ec6v3rinvnkU1Otr76Eqvk33jJrGc6fmc6jRlnv1HWBqKATTk9WFVzpjAdtljMFnvDAe54EX711y2hyWaugTxnbCpxHxQfU8FEU1PNM/10AjvpB5udNzKrGinFaTmwozSNxHj24Ahoz3FbaUNqK41yFyeXQv7QPCSIxgx87UEJEc2MyIVRdX3IgMsFG57YPoZzKzlWI6KU9F7+tg/9285Ua7uT8lWvzDfdatUD9/Lpezi8/453p9uN90J97u3FYrO2+baM3dg0PYW5qSAkbG4KNHX+YEWl8vPuMH0bFF1H+uDCWEn/DLPJK8PZwchgg8p1abHTo28VAwmlhtYJUwrasedN78NPR+2G9B1JSmEICDn8DFYGp0GufQX3cYXAm5kTqO3H+dXAhacZgNXlLOGfjNU3q3IujPabrbQN50OCmaA9YqC30uweWeFtvk4vXDFoO9nL3uWqOlcF0VWQFHsBJZPLx2CLZnW3LH5HKpDBX3iIf/1W0MW0fsta+kpRlYewwTvGdcJSLtn1Lq6hOSl+TSz8LardQnDFR5wwHuWLwjKcvXtLXQZq+5W0KcBQSd8QFXsOhr8eTEGxfYd9ypNi2Exz2SWuHu0ytt9jvWfi03u+oA+y3GiNDYP8RC9cBTk3OcZ7avNpGi9r+R3ZaApR6UuerTAFpOgqMYYpz/vWUdrNqvBe2+G9/H9f39684DofD4XA4HA6Hw+FwON7kPzauTrgr7V48AAAAAElFTkSuQmCC" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAAAaCAMAAAC6jTM8AAAAbFBMVEX/AAD/////3d3/2Nj/g4P//Pz/6Oj/gID/4+P/sbH/7Oz/8/P/xsb/p6f/tbX/FRX/W1v/kZH/zMz/ior/mJj/amr/c3P/o6P/Hh7/SEj/enr/0dH/QED/Nzf/YmL/RET/Tk7/VVX/v7//LCycCXkeAAADWElEQVRIiaVW25qjIAwmHqvUU7XVGWunte//jhtIArK1O9/M5kYMCX/OoOAtledmqd9vf0tprpr+3aZ6q6aVoer3uHej3/4Yt7C47/e/o4j0s5/iDv+JeyL9+Ke4pHf/Na7+p93M10Xe3vIxgzS2VCIvN2q40JYTAcTe9lN/fnx2M0bTbh4sMx7yts27U0oyq9E/BQonp0C4vWJKZvoeMc4QjzVogNFy5qxRqiGAtWHxa0nfMzLrSQ5RZ2Ngn+qiTsmGVfaWkla5wS0Xp6Ge9IkwTEsdrxdshIth3MBiPc0pFy/OmiNHR6hBqUWN86kzFm332IABcfWkXiiFjBbYwF/mW0WuTC6v4keogv+bS2+HsJ+vCiviPl7ZE8BRcNIpxK1exdUhDf8Rzdtd7ChECuodditZxboqmWPhn+JHSNI097HqjRvFxu5dBa1AonwZfAA7yQkmKmaXTBUspSvBW5e4/EwchIZ6YzTZcHYP4kuXPEWhAcXHfmhTYLJRcFbV1YUJKznD2ZNO4semwM4StAvVu6niRCzh2rcNJZn+AMXmaKtwUO5UEs8Buo0rznu+L7ice8mmUl8Fd++V7Y6cJ4GCurHFRF8SHW7MUcpuYQGuKv4b3aGbIh/tlthdbP2Svwq4YTs+6Gz/plTMxPkxBYZReifYjCScKbhsPbCZrc5uCteTFY4SdEV2yXX15PBLwjIpx5EF2C8O5iDhMfPKVY0xMha7k8DfUY6VARJtzblIVlGcHa9D3IHqh2sGSmvHnMv8PHi7GZcDSgKNBpl00+xhzWVPAV8c7wCBh9b/A9UOSo1XLmROf+Ht5oW1NPugNXaJckPsenOBWiWrbRhKAD9lpvYuy9xkPc82iRrY7qv3RTVeAceo2htXeISLDs0PqQupl4AGqvlrUlUP8bcRgL1xhb6rdIevpZFr6biH4LIjAa0yGxyV4AD2rpHa3Puvc35xj5RZHE8cbvYijrn/i5Fv7N6LUGzfG5trisbGzY0HLWEqHK70rCGuK51+BMe24ePq6Hcecqx950iNPqNGnHNtygccPS6cJKq1HyLrBnn0R1LXznKBFKTQpPy+0lWfJObxE0eGUDqzC2wObRdRCltaUbyvUziIlAnnOhjuMNMfqYUK2h8LfwAVeybUxkfS1QAAAABJRU5ErkJggg==" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="data:image/png;base64,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" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="data:image/png;base64,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" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmI5goHaKdHNrJDPlibE_Y5cyNvQd1BCDlzrKFTmU&usqp=CAE&s" alt="">
            </a>
        </div>
    </div>
</section>
<!-- End brand Area -->

@endsection
