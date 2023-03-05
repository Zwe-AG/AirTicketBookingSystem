<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    // booking List for admin
    public function bookingList(){
        $bookings = Booking::select('bookings.*','flights.name as flight_name','from_cities.name as city_from','to_cities.name as city_to')
                    ->join('flights','bookings.flight_id','flights.id')
                    ->leftJoin('cities as from_cities', 'from_cities.id','flights.from')
                    ->leftJoin('cities as to_cities', 'to_cities.id','flights.to')
                    ->orderBy('created_at','asc')->paginate(5);
           $bookings->appends(request()->all());
        return view('admin.booking.list',compact('bookings'));
    }

    // status List
    public function statusList()
    {
        $bookings = Booking::select('bookings.*','flights.name as flight_name','from_cities.name as city_from','to_cities.name as city_to')
                    ->join('flights','bookings.flight_id','flights.id')
                    ->leftJoin('cities as from_cities', 'from_cities.id','flights.from')
                    ->leftJoin('cities as to_cities', 'to_cities.id','flights.to')
                    ->orderBy('created_at','asc')->get();
        return view('admin.booking.statuslist',compact('bookings'));
    }

    // booking page for user
    public function bookingPage($id){
        // dd($id);
        $flights = Flight::select('flights.*','airlines.name as airline_name','from_cities.name as city_from','to_cities.name as city_to','departure_airports.airport as de_airport','arrival_airports.airport as arr_airport')
                ->join('airlines', 'flights.airline_id','airlines.id')
                ->leftJoin('cities as from_cities', 'from_cities.id','flights.from')
                ->leftJoin('cities as to_cities', 'to_cities.id','flights.to')
                ->leftJoin('cities as departure_airports', 'departure_airports.id','flights.departure_airport')
                ->leftJoin('cities as arrival_airports', 'arrival_airports.id','flights.arrival_airport')
                ->where('flights.id',$id)
                ->get();
        return view('user.booking.page',compact('flights'));
    }

    // booking process
    public function flightBook(Request $request)
    {
        $this->bookingValidation($request);
        $tax = 1000;
        $shipping = 2000;
        $price = $request->flightPrice;
        $random = "G0AWAY" . rand();
        $data = [
                'user_id' => $request->userId,
                'flight_id' => $request->flightId,
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone_one' => $request->phoneone,
                'phone_two' => $request->phonetwo,
                'city' => $request->city,
                'country' => $request->country,
                'passenger_qty' => $request->passengerQty,
                'booking_code' => $random,
                'total_price' => ($price * $request->passengerQty) + $tax + $shipping,
                ];
        Booking::create($data);
        return redirect()->route('user#bookingrecieved');
    }

     // booking data validation
     private function bookingValidation($request)
     {
         $response = [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phoneone' => 'required',
            'phonetwo' => 'required',
            'city' => 'required',
            'country' => 'required',
         ];
         Validator::make($request->all(),$response)->validate();
     }

    // booking Recieved
    public function bookingRecieved(){
        return view('user.booking.recieved');
    }

    // booking history
    public function bookingHistory(){
        $bookings = Booking::select('bookings.*','flights.name as flight_name','from_cities.name as city_from','to_cities.name as city_to')
                    ->join('flights','bookings.flight_id','flights.id')
                    ->leftJoin('cities as from_cities', 'from_cities.id','flights.from')
                    ->leftJoin('cities as to_cities', 'to_cities.id','flights.to')
                    ->where('bookings.user_id',Auth::user()->id)
                    ->orderBy('created_at','asc')->paginate(5);
           $bookings->appends(request()->all());
        return view('user.booking.history',compact('bookings'));
    }

    // booking detail
    public function bookingDetail($id){
        $bookings = Booking::select('bookings.*','flights.name as flight_name','flights.price as flight_price')
        ->join('flights','bookings.flight_id','flights.id')
        ->where('bookings.id',$id)
        ->get();
        return view('user.booking.detail',compact('bookings'));
    }

}
