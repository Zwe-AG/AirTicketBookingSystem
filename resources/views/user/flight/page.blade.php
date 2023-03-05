@extends('user.layouts.master')
@section('myContent')
<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Flight
                </h1>
                <p class="text-white link-nav"><a href="{{route('user#home')}}"> Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('user#flightlistpage')}}"> Flight</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start destinations Area -->
<section class="destinations-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Popular Destinations</h1>
                    <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day to.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-2 offset-10">
                    {{-- <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit">Search</button>
                      </form> --}}
                      <select class="form-select form-control" id="sortingOption">
                        <option value="">Sorting Flight</option>
                        <option value="desc">Descending</option>
                        <option value="asc">Ascending</option>
                      </select>
                </div>
        </div>
        <div class="row">
            <!-- Start filter  -->
            <div class="col-lg-4 mt-4">
                {{-- <div class="card p-4 mb-3 mt-2">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="card-header">
                                Class
                              </div>
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="{{route('user#flightlistpage')}}">All</a></li>
                                <li class="list-group-item"><a href="{{route('user#filterflight',['first'])}}">First</a></li>
                                <li class="list-group-item"><a href="{{route('user#filterflight',['economy'])}}">Economy</a></li>
                                <li class="list-group-item"><a href="{{route('user#filterflight',['bussiness'])}}">Bussiness</a></li>
                              </ul>
                        </div>
                    </div>
                </div>--}}
                <div>
                    <div class="row">
                        <div class="col-12 sidebar-widgets">
                            <div class="widget-wrap">
                                <div class="single-sidebar-widget post-category-widget">
                                    <h4 class="category-title">Class</h4>
                                    <ul class="cat-list">
                                        <li><a href="{{route('user#flightlistpage')}}" class="d-flex justify-content-between">All</a></li>
                                        <li><a href="{{route('user#filterflight',['first'])}}" class="d-flex justify-content-between">First</a></li>
                                        <li><a href="{{route('user#filterflight',['economy'])}}" class="d-flex justify-content-between">Economy</a></li>
                                        <li><a href="{{route('user#filterflight',['bussiness'])}}" class="d-flex justify-content-between">Bussiness</a></li>
                                    </ul>
                                </div>
                                <div class="single-sidebar-widget post-category-widget">
                                    <h4 class="category-title">Airline</h4>
                                    <ul class="cat-list">
                                        <li><a href="{{route('user#flightlistpage')}}" class="d-flex justify-content-between">All</a></li>
                                        @foreach ($airline as $a)
                                            <li><a href="{{route('user#filterairline',$a->id)}}" class="d-flex justify-content-between">{{$a->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="single-sidebar-widget post-category-widget">
                                    <h4 class="category-title">Price</h4>
                                    <ul class="cat-list">
                                        <li><a href="{{route('user#flightlistpage')}}" class="d-flex justify-content-between">All</a></li>
                                        @foreach ($flights as $f)
                                            <li><a href="{{route('user#filterprice',$f->price)}}" class="d-flex justify-content-between">{{$f->price}} MMK </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="single-sidebar-widget tag-cloud-widget">
                                    <h4 class="tagcloud-title">Destination</h4>
                                    <ul>
                                        <li>
                                            <a href="{{route('user#flightlistpage')}}">All</a>
                                        </li>
                                        @foreach ($city as $c)
                                            <li><a href="{{route('user#filtercity',$c->id)}}">{{$c->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End filter  -->

             <!-- Start Flights  -->
            <div class="col-lg-8">
                <div class="row" id="dataList">
                    @if (count($flights) != 0)
                    @foreach ($flights as $f)
                    <div class="col-lg-6">
                        <div class="single-destinations">
                            <div class="thumb">
                                <img src="{{asset('storage/'.$f->image)}}" alt="" height="200px">
                            </div>
                            <div class="details">
                                <h4>{{$f->city_from}} To {{$f->city_to}}</h4>
                                <p>
                                    {{$f->airline_name}}
                                </p>
                                <ul class="package-list">
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Boarding Time</span>
                                        <span>{{date('d-m-Y h:m:s',strtotime($f->boarding_time))}}</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Type</span>
                                        <span>{{$f->type}}</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Class</span>
                                        <span>{{$f->class}}</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Departure Airport</span>
                                        <span>{{$f->de_airport}}</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Arrival Airport</span>
                                        <span>{{$f->arr_airport}}</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Price per person</span>
                                        <a href="{{route('user#bookingpage',$f->id)}}" class="price-btn">{{$f->price}} MMK</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-lg-12" style="margin-top:200px">
                        <h1 class="text-danger text-center fs-5">There is no flight</h1>
                    </div>
                    @endif
                </div>
               <div class="float-right mt-4">
                {{$flights->links()}}
               </div>
            </div>
            <!-- End Flights  -->

        </div>
    </div>
</section>
<!-- End destinations Area -->

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
                <img class="img-fluid" src="https://images.pexels.com/photos/3943882/pexels-photo-3943882.jpeg?auto=compress&cs=tinysrgb&w=800" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->

	<!-- Start related-product Area -->
    <section class="destinations-area  section-gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Latest Flight Ticket During this Week</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#">
                                    <img src="https://media.istockphoto.com/id/1333271397/photo/caucasian-girl-joyful-holding-an-air-ticket-for-the-plane-and-travel-in-her-hands.jpg?b=1&s=170667a&w=0&k=20&c=Rb_d8zsJlBIybHpDjDzmihmJrLp__PtzD0ao22WNUm4=" style="width:70px;height:65px;object-fit:cover;margin-right:10px" alt="">
                                </a>
								<div class="desc">
									<a href="#" class="title" style="color:black">Black lace Heels</a>
									<div>
										<h6>$189.00</h6>
										<h6><del>$210.00</del></h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#">
                                    <img src="https://media.istockphoto.com/id/1333271397/photo/caucasian-girl-joyful-holding-an-air-ticket-for-the-plane-and-travel-in-her-hands.jpg?b=1&s=170667a&w=0&k=20&c=Rb_d8zsJlBIybHpDjDzmihmJrLp__PtzD0ao22WNUm4=" style="width:70px;height:65px;object-fit:cover;margin-right:10px" alt="">
                                </a>
								<div class="desc">
									<a href="#" class="title" style="color:black">Black lace Heels</a>
									<div>
										<h6>$189.00</h6>
										<h6><del>$210.00</del></h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#">
                                    <img src="https://media.istockphoto.com/id/1333271397/photo/caucasian-girl-joyful-holding-an-air-ticket-for-the-plane-and-travel-in-her-hands.jpg?b=1&s=170667a&w=0&k=20&c=Rb_d8zsJlBIybHpDjDzmihmJrLp__PtzD0ao22WNUm4=" style="width:70px;height:65px;object-fit:cover;margin-right:10px" alt="">
                                </a>
								<div class="desc">
									<a href="#" class="title" style="color:black">Black lace Heels</a>
									<div>
										<h6>$189.00</h6>
										<h6><del>$210.00</del></h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#">
                                    <img src="https://media.istockphoto.com/id/1333271397/photo/caucasian-girl-joyful-holding-an-air-ticket-for-the-plane-and-travel-in-her-hands.jpg?b=1&s=170667a&w=0&k=20&c=Rb_d8zsJlBIybHpDjDzmihmJrLp__PtzD0ao22WNUm4=" style="width:70px;height:65px;object-fit:cover;margin-right:10px" alt="">
                                </a>
								<div class="desc">
									<a href="#" class="title" style="color:black">Black lace Heels</a>
									<div>
										<h6>$189.00</h6>
										<h6><del>$210.00</del></h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#">
                                    <img src="https://media.istockphoto.com/id/1333271397/photo/caucasian-girl-joyful-holding-an-air-ticket-for-the-plane-and-travel-in-her-hands.jpg?b=1&s=170667a&w=0&k=20&c=Rb_d8zsJlBIybHpDjDzmihmJrLp__PtzD0ao22WNUm4=" style="width:70px;height:65px;object-fit:cover;margin-right:10px" alt="">
                                </a>
								<div class="desc">
									<a href="#" class="title" style="color:black">Black lace Heels</a>
									<div>
										<h6>$189.00</h6>
										<h6><del>$210.00</del></h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#">
                                    <img src="https://media.istockphoto.com/id/1333271397/photo/caucasian-girl-joyful-holding-an-air-ticket-for-the-plane-and-travel-in-her-hands.jpg?b=1&s=170667a&w=0&k=20&c=Rb_d8zsJlBIybHpDjDzmihmJrLp__PtzD0ao22WNUm4=" style="width:70px;height:65px;object-fit:cover;margin-right:10px" alt="">
                                </a>
								<div class="desc">
									<a href="#" class="title" style="color:black">Black lace Heels</a>
									<div>
										<h6>$189.00</h6>
										<h6><del>$210.00</del></h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#">
                                    <img src="https://media.istockphoto.com/id/1333271397/photo/caucasian-girl-joyful-holding-an-air-ticket-for-the-plane-and-travel-in-her-hands.jpg?b=1&s=170667a&w=0&k=20&c=Rb_d8zsJlBIybHpDjDzmihmJrLp__PtzD0ao22WNUm4=" style="width:70px;height:65px;object-fit:cover;margin-right:10px" alt="">
                                </a>
								<div class="desc">
									<a href="#" class="title" style="color:black">Black lace Heels</a>
									<div>
										<h6>$189.00</h6>
										<h6><del>$210.00</del></h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#">
                                    <img src="https://media.istockphoto.com/id/1333271397/photo/caucasian-girl-joyful-holding-an-air-ticket-for-the-plane-and-travel-in-her-hands.jpg?b=1&s=170667a&w=0&k=20&c=Rb_d8zsJlBIybHpDjDzmihmJrLp__PtzD0ao22WNUm4=" style="width:70px;height:65px;object-fit:cover;margin-right:10px" alt="">
                                </a>
								<div class="desc">
									<a href="#" class="title" style="color:black">Black lace Heels</a>
									<div>
										<h6>$189.00</h6>
										<h6><del>$210.00</del></h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#">
                                    <img src="https://media.istockphoto.com/id/1333271397/photo/caucasian-girl-joyful-holding-an-air-ticket-for-the-plane-and-travel-in-her-hands.jpg?b=1&s=170667a&w=0&k=20&c=Rb_d8zsJlBIybHpDjDzmihmJrLp__PtzD0ao22WNUm4=" style="width:70px;height:65px;object-fit:cover;margin-right:10px" alt="">
                                </a>
								<div class="desc">
									<a href="#" class="title" style="color:black">Black lace Heels</a>
									<div>
										<h6>$189.00</h6>
										<h6><del>$210.00</del></h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="#" target="_blank">
							<img class="img-fluid d-block mx-auto" src="https://cdn.pixabay.com/photo/2016/06/12/09/08/iphone-1451614__480.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End related-product Area -->
@endsection

@section('scriptSource')
    <script>
        $(document).ready(function(){
            $('#sortingOption').change(function(){
                $eventOption = $('#sortingOption').val();
                if($eventOption == 'asc'){
                    $.ajax({
                        type: "get",
                        url: "/user/ajax/flights/list",
                        data: { "status" : 'asc' },
                        dataType: "json",
                        success: function (response) {
                           $list = '';
                            for ($i = 0; $i < response.length; $i++) {
                                $list += `
                            <div class="col-lg-6">
                                <div class="single-destinations">
                                     <div class="thumb">
                                        <img src="{{asset('storage/${response[$i].image}')}}" alt="" height="200px">
                                    </div>
                                    <div class="details">
                                        <h4> ${response[$i].city_from} To ${response[$i].city_to}</h4>
                                        <p>
                                            ${response[$i].airline_name}
                                        </p>
                                        <ul class="package-list">
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>Boarding Time</span>
                                                <span>${response[$i].boarding_time}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>Type</span>
                                                <span>${response[$i].type}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>Class</span>
                                                <span>${response[$i].class}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>Departure Airport</span>
                                                <span>${response[$i].de_airport}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>Arrival Airport</span>
                                                <span>${response[$i].arr_airport}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>Price per person</span>
                                                <a href="#" class="price-btn">${response[$i].price} MMK</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                                `;
                            }
                            $('#dataList').html($list);
                        }
                    });
                }else if($eventOption == 'desc'){
                    $.ajax({
                        type: "get",
                        url: "/user/ajax/flights/list",
                        data: { 'status' : 'desc'},
                        dataType: "json",
                        success: function (response) {
                            $list = '';
                            for ($i = 0; $i < response.length; $i++) {
                                $list += `
                            <div class="col-lg-6">
                                <div class="single-destinations">
                                     <div class="thumb">
                                        <img src="{{asset('storage/${response[$i].image}')}}" alt="" height="200px">
                                    </div>
                                    <div class="details">
                                        <h4> ${response[$i].city_from} To ${response[$i].city_to}</h4>
                                        <p>
                                            ${response[$i].airline_name}
                                        </p>
                                        <ul class="package-list">
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>Boarding Time</span>
                                                <span>${response[$i].boarding_time}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>Type</span>
                                                <span>${response[$i].type}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>Class</span>
                                                <span>${response[$i].class}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>Departure Airport</span>
                                                <span>${response[$i].de_airport}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>Arrival Airport</span>
                                                <span>${response[$i].arr_airport}</span>
                                            </li>
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>Price per person</span>
                                                <a href="#" class="price-btn">${response[$i].price} MMK</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                                `;
                            }

                            $('#dataList').html($list);
                        }
                    });
                }
            })
        })
    </script>
@endsection
