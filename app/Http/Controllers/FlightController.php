<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Flight;
use App\Models\Airline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FlightController extends Controller
{
    // flight list
    public function list()
    {
        $flights = Flight::select('flights.*','airlines.name as airline_name','from_cities.name as city_from','to_cities.name as city_to','departure_airports.airport as de_airport','arrival_airports.airport as arr_airport')
                ->join('airlines', 'flights.airline_id','airlines.id')
                ->leftJoin('cities as from_cities', 'from_cities.id','flights.from')
                ->leftJoin('cities as to_cities', 'to_cities.id','flights.to')
                ->leftJoin('cities as departure_airports', 'departure_airports.id','flights.departure_airport')
                ->leftJoin('cities as arrival_airports', 'arrival_airports.id','flights.arrival_airport')
                ->orderBy('flights.created_at','desc')->paginate(3);
        $flights->appends(request()->all());
        return view('admin.flight.list',compact('flights'));
    }

    // direct flight Create Page
    public function flightCreatePage()
    {
        $airline = Airline::get();
        $city = City::get();
        return view('admin.flight.create',compact('airline','city'));
    }

    // create flight
    public function flightCreate(Request $request){
        $this->flightValidaion($request);
        $data = $this->flightData($request);
       if($request->hasFile('image')){
          $filename = uniqid() . $request->file('image')->getClientOriginalName();
          $request->file('image')->storeAs('public',$filename);
          $data['image'] = $filename;
       }
       Flight::create($data);
       return redirect()->route('admin#flightlist')->with('success','Success Create Flight');
    }

    // delete flight
    public function flightDelete($id)
    {
        Flight::where('id',$id)->delete();
        return redirect()->route('admin#flightlist')->with('success','Success Delete Flight');
    }

    // edit flight page
    public function flightEdit($id)
    {
        $flight = Flight::where('id',$id)->first();
        $airline = Airline::get();
        $city = City::get();
        return view('admin.flight.edit',compact('flight','airline','city'));
    }

    // flight Update
    function flightUpdate(Request $request,$id)
    {
        $this->flightValidaion($request);
       $data = $this->flightData($request);
       if($request->hasFile('image')){
          $dbImage = Flight::where('id',$id)->first();
          $dbImage = $dbImage->image;
          if ($dbImage != null) {
             Storage::delete('public/'.$dbImage);
          }
          $filename = uniqid() . $request->file('image')->getClientOriginalName();
          $request->file('image')->storeAs('public',$filename);
          $data['image'] = $filename;
       }
       Flight::where('id',$id)->update($data);
       return redirect()->route('admin#flightlist')->with('success','Success Flight Update');
    }

    // flight Validaion
    public function flightValidaion($request)
    {
        $reponse = [
            'name' => 'required',
            'airline' => 'required',
            'price' => 'required',
            'departureTime' => 'required',
            'arrivalTime' => 'required',
            'flightClass' => 'required',
            'styleTrip' => 'required',
            'duration' => 'required',
            'from' => 'required',
            'to' => 'required',
            'departureAirport' => 'required',
            'arrivalAirport' => 'required',
            'boardingTime' => 'required',
            'image' => 'mimes:jpg,jpeg,webp,png',
        ];
        Validator::make($request->all(),$reponse)->validate();
    }

    // flight data store
    public function flightData($request)
    {
        $reponse = [
            'name' => $request->name,
            'airline_id' => $request->airline,
            'price' => $request->price,
            'departure_time' => $request->departureTime,
            'arrival_time' => $request->arrivalTime,
            'return_date' => $request->returnDate,
            'class' => $request->flightClass,
            'type' => $request->styleTrip,
            'duration' => $request->duration,
            'from' => $request->from,
            'to' => $request->to,
            'departure_airport' => $request->departureAirport,
            'arrival_airport' => $request->arrivalAirport,
            'boarding_time' => $request->boardingTime,
        ];
        return $reponse;
    }
}
