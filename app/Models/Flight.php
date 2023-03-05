<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $fillable = ['name','airline_id','price','departure_time','arrival_time','return_date','class','type','duration','image','from','to','departure_airport','arrival_airport','boarding_time'];
}
