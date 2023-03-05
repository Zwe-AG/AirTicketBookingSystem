@extends('admin.layouts.master')
@section('myContent')
<div style="margin-left:100px;margin-top:30px">
    <h5 class="material-icons" onclick="history.back()" style="cursor: pointer">arrow_back</h5>
</div>
<section>
    <div class="col-4 offset-8">
        <button class="btn btn-danger" id="btn">Download PDF</button>
    </div>
    <div class="formatDesign" id="download">
        <div class="ticket">
            <div id="barBig">
                <!-- <img src="https://www.incimages.com/uploaded_files/image/1024x576/*Barcode_32896.jpg" alt="Bar Code"> -->
            </div>
            <div id="mainInfo">
                <div class="passenger-info-container">
                    <div class="passenger-info">
                        <span>Name of Passenger</span>
                        <span class="details">{{$bookings[0]->name}}</span>
                    </div>
                    <div class="passenger-info">
                        <span>Flight</span>
                        <span class="details">{{$bookings[0]->flight_name}}</span>
                    </div>
                    <div class="passenger-info">
                        <span>Date</span>
                        <span class="details">{{date('d/m/Y',strtotime($bookings[0]->flight_departure_time))}}</span>
                    </div>
                    <div class="passenger-info">
                        <span>Seat</span>
                        <span class="details">8C</span>
                    </div>
                </div>
                <h1 class="destination">
                    {{$bookings[0]->city_from}}
                    <img src="https://i.pinimg.com/originals/e9/0a/29/e90a299a041b7d37cdafc6eb2905e9d6.png" alt="Destination">
                    {{$bookings[0]->city_to}}
                </h1>
                <div class="flight-info-container">
                    <div class="flight-info">
                        <span>Gate</span>
                        <span>D 12</span>
                    </div>
                    <div class="flight-info">
                        <span>Boarding Time</span>
                        <span>{{date('h:i',strtotime($bookings[0]->flight_boarding_time))}} AM MMT</span>
                    </div>
                    <div class="flight-info">
                        <span>Departure</span>
                        <span>{{date('h:i',strtotime($bookings[0]->flight_departure_time))}} AM MMT</span>
                    </div>
                    <div class="flight-info">
                        <span>Arrival</span>
                        <span>{{date('h:i',strtotime($bookings[0]->flight_arrival_time))}} AM MMT</span>
                    </div>
                </div>
                <p class="note">Gate closes 20 minutes before departure</p>
            </div>
            <div id="circles">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
            <div id="sideInfo">
                <img src="https://www.incimages.com/uploaded_files/image/1024x576/*Barcode_32896.jpg" alt="Small Bar" id="barSmall">
                <div class="details-container">
                    <div class="flight-details">
                        <div>
                            <span>Name of Passenger</span>
                            <span>{{$bookings[0]->name}}</span>
                        </div>
                        <div>
                            <span>Flight</span>
                            <span>{{$bookings[0]->flight_name}}</span>
                        </div>
                        <div>
                            <span>Date</span>
                            <span>{{date('N, j F Y',strtotime($bookings[0]->flight_departure_time))}}</span>
                        </div>
                        <div>
                            <span>Seat</span>
                            <span>8C</span>
                        </div>
                    </div>
                    <div class="destination-details">
                        {{$bookings[0]->city_from}}
                        <img src="https://i.pinimg.com/originals/e9/0a/29/e90a299a041b7d37cdafc6eb2905e9d6.png" alt="Destination">
                        {{$bookings[0]->city_to}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scriptSource')
<script>
     var btn = document.getElementById("btn");
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
