<?php

namespace App\Http\Controllers\Website;

use App\Models\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Airline;
use App\Models\City;

class FlightController extends Controller
{
    // flight list Page
    public function listPage(){
        $flights = Flight::select('flights.*','airlines.name as airline_name','from_cities.name as city_from','to_cities.name as city_to','departure_airports.airport as de_airport','arrival_airports.airport as arr_airport')
                ->join('airlines', 'flights.airline_id','airlines.id')
                ->leftJoin('cities as from_cities', 'from_cities.id','flights.from')
                ->leftJoin('cities as to_cities', 'to_cities.id','flights.to')
                ->leftJoin('cities as departure_airports', 'departure_airports.id','flights.departure_airport')
                ->leftJoin('cities as arrival_airports', 'arrival_airports.id','flights.arrival_airport')
                ->orderBy('flights.created_at','desc')->paginate(3);
        $airline = Airline::get();
        $city = City::get();
        return view('user.flight.page',compact('flights','airline','city'));
    }
}
