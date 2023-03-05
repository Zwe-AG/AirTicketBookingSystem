<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AirTicketController extends Controller
{
    // direct Air Ticket Page
    public function airTicketPage($id)
    {
        $bookings = Booking::select('bookings.*','flights.name as flight_name','flights.class as flight_class','flights.departure_time as flight_departure_time','flights.arrival_time as flight_arrival_time','flights.duration as flight_duration','flights.boarding_time as flight_boarding_time','from_cities.name as city_from','to_cities.name as city_to')
        ->join('flights','bookings.flight_id','flights.id')
        ->leftJoin('cities as from_cities', 'from_cities.id','flights.from')
        ->leftJoin('cities as to_cities', 'to_cities.id','flights.to')
        ->where('bookings.id',$id)->get();
        return view('admin.ticket.show',compact('bookings'));
    }

    // air Ticket Download
    public function airTicketDownload($id)
    {
        $bookings = Booking::select('bookings.*','flights.name as flight_name','flights.class as flight_class','flights.departure_time as flight_departure_time','flights.arrival_time as flight_arrival_time','flights.duration as flight_duration','flights.boarding_time as flight_boarding_time','from_cities.name as city_from','to_cities.name as city_to')
        ->join('flights','bookings.flight_id','flights.id')
        ->leftJoin('cities as from_cities', 'from_cities.id','flights.from')
        ->leftJoin('cities as to_cities', 'to_cities.id','flights.to')
        ->where('bookings.id',$id)->get();
        return view('admin.ticket.download',compact('bookings'));
    }

}
