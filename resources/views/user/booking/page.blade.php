@extends('user.layouts.master')
@section('myContent')
<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Booking
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<section class="checkout_area section_gap">
    <div class="container">
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Booking Details</h3>
                    <form class="row contact_form" action="{{route('user#bookingflight')}}" method="post">
                        @csrf
                        <div class="col-md-6 form-group">
                            <label for="">User Name</label>
                            <input type="text" class="form-control name" id="first" name="name" value="{{old('name')}}">
                            @error('name')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <input type="hidden" class="flightId" value="{{$flights[0]->id}}" name="flightId">
                        <input type="hidden" class="userId" value="{{Auth::user()->id}}" name="userId">
                        <input type="hidden" class="flightPrice" value="{{$flights[0]->price}}" name="flightPrice">
                        <div class="col-md-6 form-group">
                            <label for="">User Email</label>
                            <input type="text" class="form-control email" name="email" value="{{old('email')}}">
                            @error('email')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Phone One</label>
                            <input type="number" class="form-control phoneone" id="number" name="phoneone" value="{{old('phoneone')}}">
                            @error('phoneone')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Phone Two</label>
                            <input type="number" class="form-control phonetwo" id="number" name="phonetwo" value="{{old('phonetwo')}}">
                            @error('phonetwo')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">City</label>
                            <input type="text" class="form-control city" id="first" name="city" value="{{old('city')}}">
                            @error('city')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Country</label>
                            <input type="text" class="form-control country" id="last" name="country" value="{{old('country')}}">
                            @error('country')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control address" id="add1" name="address" value="{{old('address')}}">
                            @error('address')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <h3>Passenger Quantity</h3>
                                <small class="text-danger">Maximum passenger are 10 people and minimum passenger is 1 people </small>
                            </div>
                            <input type="number" class="form-control passengerQty" value="1" name="passengerQty" min="1" max="10">
                        </div>
                        <button type="submit" class="primary-btn ms-3">Proceed to Booking</button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Flight</h2>
                        <ul class="list">
                            <li><a href="#">Air Name<span>{{$flights[0]->name}}</span></a></li>
                            <li><a href="#">Airline <span>{{$flights[0]->airline_name}}</span></a></li>
                            <li><a href="#">From <span>{{$flights[0]->city_from}}</span></a></li>
                            <li><a href="#">To <span>{{$flights[0]->city_to}}</span></a></li>
                            <li><a href="#">Departure Airport <span>{{$flights[0]->de_airport}}</span></a></li>
                            <li><a href="#">Arrival Airport <span>{{$flights[0]->arr_airport}}</span></a></li>
                            <li><a href="#">Date <span>{{date('j/F/Y G:i A',strtotime($flights[0]->departure_time))}}</span></a></li>
                            <li><a href="#">Boarding<span>{{date('j/F/Y G:i A',strtotime($flights[0]->boarding_time))}}</span></a></li>
                            <li><a href="#">Shipping  <span>2000 MMMK</span></a></li>
                            <li><a href="#">Tax  <span>1000 MMK</span></a></li>
                            <li><a href="#">Per Person  <span>{{$flights[0]->price}}MMK</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

