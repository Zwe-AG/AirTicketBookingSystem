<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','flight_id','name','email','address','phone_one','phone_two','city','country','passenger_qty','booking_code','total_price','status'];
}
