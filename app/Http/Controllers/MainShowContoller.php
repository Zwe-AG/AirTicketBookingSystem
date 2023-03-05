<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Flight;
use App\Models\Review;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainShowContoller extends Controller
{
    //Direct Main Page
    public function mainPage()
    {
        $reviews = Review::get();
        $customers = User::get();
        $flights = Flight::get();
        $bookings = Booking::orderBy('created_at','desc')->paginate(4);
        $totalsales = Booking::select('total_price')->get();
        $totalPrice = 0;
        foreach ($totalsales as $totalsale) {
            $totalPrice += $totalsale->total_price;
        }
        $bookings->appends(request()->all());
        return view('admin.dashboard.main',compact('reviews','customers','flights','bookings','totalPrice'));
    }
}

