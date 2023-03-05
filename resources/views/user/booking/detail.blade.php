@extends('user.layouts.master')
@section('myContent')
<!-- start banner Area -->
<section class="relative about-banner">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Booking Detail
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<!--================Order Details Area =================-->

<section class="order_details section_gap">
    <div class="container">
        <h5 class="fa fa-arrow-left fs-6" onclick="history.back()" style="cursor: pointer"></h5>
        <div id="download">
            <div class="row order_d_inner">
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Booking Info</h4>
                        <ul class="list mt-3">
                            <li><a href="#"><span>Booking Number</span> : {{$bookings[0]->booking_code}}</a></li>
                            <li><a href="#"><span>Date</span> : {{date('j F Y',strtotime($bookings[0]->created_at))}}</a></li>
                            <li><a href="#"><span>Total</span> : {{$bookings[0]->total_price}} MMK</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>User Info</h4>
                        <ul class="list mt-3">
                            <li><a href="#"><span>Name</span> : {{$bookings[0]->name}}</a></li>
                            <li><a href="#"><span>Email</span> : {{$bookings[0]->email}}</a></li>
                            <li><a href="#"><span>Passenger Quantity</span> :{{$bookings[0]->passenger_qty}} People</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Shipping Address</h4>
                        <ul class="list mt-3">
                            <li><a href="#"><span>Address</span> :  {{$bookings[0]->address}}</a></li>
                            <li><a href="#"><span>City</span> :  {{$bookings[0]->city}}</a></li>
                            <li><a href="#"><span>Country</span> :  {{$bookings[0]->country}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="order_details_table">
                <h2>Booking Details</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Air Name</th>
                                <th scope="col">Passenger Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>{{$bookings[0]->flight_name}}</p>
                                </td>
                                <td>
                                    <h5>x {{$bookings[0]->passenger_qty}}</h5>
                                </td>
                                <td>
                                    <p>{{$bookings[0]->flight_price}} MMK</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Shipping</h4>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <p>2000 MMK</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Tax</h4>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <p>1000 MMK</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Total</h4>
                                </td>
                                <td>
                                    <h5></h5>
                                </td>
                                <td>
                                    <p>{{$bookings[0]->total_price}} MMK</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-2 offset-10 mt-4">
            <button class="btn btn-danger" id="generateBtn">Download PDF</button>
        </div>
    </div>
</section>
<!--================End Order Details Area =================-->
@endsection

@section('scriptSource')
<script>
     var btn = document.getElementById("generateBtn");
      var createpdf = document.getElementById("download");
      var opt = {
         margin: 1,
         filename: 'pdfcreated.pdf',
         html2canvas: {
            scale: 2
         },
         jsPDF: {
            unit: 'in',
            format: 'letter',
            orientation: 'portrait'
         }
      };
      btn.addEventListener("click", function() {
         html2pdf().set(opt).from(createpdf).save();
      });
</script>
@endsection
