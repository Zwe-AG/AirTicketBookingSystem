<?php

namespace App\Http\Controllers\Website;

use App\Models\City;
use App\Models\Flight;
use App\Models\Airline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    // home website direct
    public function home()
    {
        return view('user.main.website');
    }

    // home website direct
    public function about()
    {
        return view('user.about.page');
    }

    // home website direct
    public function insurance()
    {
        return view('user.insurance.page');
    }
    // flight list Page for user page
    public function listPage(){
        $flights = Flight::select('flights.*','airlines.name as airline_name','from_cities.name as city_from','to_cities.name as city_to','departure_airports.airport as de_airport','arrival_airports.airport as arr_airport')
                ->join('airlines', 'flights.airline_id','airlines.id')
                ->leftJoin('cities as from_cities', 'from_cities.id','flights.from')
                ->leftJoin('cities as to_cities', 'to_cities.id','flights.to')
                ->leftJoin('cities as departure_airports', 'departure_airports.id','flights.departure_airport')
                ->leftJoin('cities as arrival_airports', 'arrival_airports.id','flights.arrival_airport')
                ->when(request('searchTo'),function($query){
                    $key = request('searchTo');
                    $query->where('to_cities.name','like','%'.$key.'%');
                })
                ->when(request('searchFrom'),function($query){
                    $key = request('searchFrom');
                    $query->where('from_cities.name','like','%'.$key.'%');
                })
                ->when(request('searchType'),function($query){
                    $key = request('searchType');
                    $query->where('flights.type','like','%'.$key.'%');
                })
                ->when(request('searchClass'),function($query){
                    $key = request('searchClass');
                    $query->where('flights.class','like','%'.$key.'%');
                })
                ->orderBy('flights.created_at','desc')->paginate(5);
                $flights->appends(request()->all());
        $airline = Airline::get();
        $city = City::get();
        return view('user.flight.page',compact('flights','airline','city'));
    }

    // filter Flight
    public function filterFlight($classFlight){
        $flights = Flight::select('flights.*','airlines.name as airline_name','from_cities.name as city_from','to_cities.name as city_to','departure_airports.airport as de_airport','arrival_airports.airport as arr_airport')
                ->join('airlines', 'flights.airline_id','airlines.id')
                ->leftJoin('cities as from_cities', 'from_cities.id','flights.from')
                ->leftJoin('cities as to_cities', 'to_cities.id','flights.to')
                ->leftJoin('cities as departure_airports', 'departure_airports.id','flights.departure_airport')
                ->leftJoin('cities as arrival_airports', 'arrival_airports.id','flights.arrival_airport')
                ->where('class',$classFlight)
                ->orderBy('flights.created_at','desc')->paginate(5);
                $flights->appends(request()->all());
        $airline = Airline::get();
        $city = City::get();
        return view('user.flight.page',compact('flights','airline','city'));
    }

    // filter Airline
    public function filterAirline($airlineFlight){
        $flights = Flight::select('flights.*','airlines.name as airline_name','from_cities.name as city_from','to_cities.name as city_to','departure_airports.airport as de_airport','arrival_airports.airport as arr_airport')
                ->join('airlines', 'flights.airline_id','airlines.id')
                ->leftJoin('cities as from_cities', 'from_cities.id','flights.from')
                ->leftJoin('cities as to_cities', 'to_cities.id','flights.to')
                ->leftJoin('cities as departure_airports', 'departure_airports.id','flights.departure_airport')
                ->leftJoin('cities as arrival_airports', 'arrival_airports.id','flights.arrival_airport')
                ->where('airline_id',$airlineFlight)
                ->orderBy('flights.created_at','desc')->paginate(5);
                $flights->appends(request()->all());
        $airline = Airline::get();
        $city = City::get();
        return view('user.flight.page',compact('flights','airline','city'));
    }

    // filter City
    public function filterCity($cityFlight){
        $flights = Flight::select('flights.*','airlines.name as airline_name','from_cities.name as city_from','to_cities.name as city_to','departure_airports.airport as de_airport','arrival_airports.airport as arr_airport')
                ->join('airlines', 'flights.airline_id','airlines.id')
                ->leftJoin('cities as from_cities', 'from_cities.id','flights.from')
                ->leftJoin('cities as to_cities', 'to_cities.id','flights.to')
                ->leftJoin('cities as departure_airports', 'departure_airports.id','flights.departure_airport')
                ->leftJoin('cities as arrival_airports', 'arrival_airports.id','flights.arrival_airport')
                ->orWhere('flights.from',$cityFlight)
                ->orWhere('flights.to',$cityFlight)
                ->orderBy('flights.created_at','desc')->paginate(5);
                $flights->appends(request()->all());
        $airline = Airline::get();
        $city = City::get();
        return view('user.flight.page',compact('flights','airline','city'));
    }

    // filter Price
    public function filterPrice($priceFlight){
        $flights = Flight::select('flights.*','airlines.name as airline_name','from_cities.name as city_from','to_cities.name as city_to','departure_airports.airport as de_airport','arrival_airports.airport as arr_airport')
                ->join('airlines', 'flights.airline_id','airlines.id')
                ->leftJoin('cities as from_cities', 'from_cities.id','flights.from')
                ->leftJoin('cities as to_cities', 'to_cities.id','flights.to')
                ->leftJoin('cities as departure_airports', 'departure_airports.id','flights.departure_airport')
                ->leftJoin('cities as arrival_airports', 'arrival_airports.id','flights.arrival_airport')
                ->where('flights.price',$priceFlight)
                ->orderBy('flights.created_at','desc')->paginate(5);
                $flights->appends(request()->all());
        $airline = Airline::get();
        $city = City::get();
        return view('user.flight.page',compact('flights','airline','city'));
    }

     // ajax for fligts list
     public function sortFlight(Request $request)
     {
         if($request->status == 'desc'){
             $data = Flight::select('flights.*','airlines.name as airline_name','from_cities.name as city_from','to_cities.name as city_to','departure_airports.airport as de_airport','arrival_airports.airport as arr_airport')
                    ->join('airlines', 'flights.airline_id','airlines.id')
                    ->leftJoin('cities as from_cities', 'from_cities.id','flights.from')
                    ->leftJoin('cities as to_cities', 'to_cities.id','flights.to')
                    ->leftJoin('cities as departure_airports', 'departure_airports.id','flights.departure_airport')
                    ->leftJoin('cities as arrival_airports', 'arrival_airports.id','flights.arrival_airport')
                    ->orderBy('created_at','desc')->get();
         }else if($request->status == 'asc'){
             $data =Flight::select('flights.*','airlines.name as airline_name','from_cities.name as city_from','to_cities.name as city_to','departure_airports.airport as de_airport','arrival_airports.airport as arr_airport')
                    ->join('airlines', 'flights.airline_id','airlines.id')
                    ->leftJoin('cities as from_cities', 'from_cities.id','flights.from')
                    ->leftJoin('cities as to_cities', 'to_cities.id','flights.to')
                    ->leftJoin('cities as departure_airports', 'departure_airports.id','flights.departure_airport')
                    ->leftJoin('cities as arrival_airports', 'arrival_airports.id','flights.arrival_airport')
                    ->orderBy('created_at','asc')->get();
         }
         return $data;
     }
}
