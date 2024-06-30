<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightOffers extends Model
{
    use HasFactory;
    protected $table = 'flight_offers';

    public static function topFlightOffers()
    {
        return self::select(
            'flight_offers.id', 
            'flight_offers.offer_name', 
            'flight_offers.description', 
            'flight_offers.discount_percentage', 
            'flight_offers.start_date', 
            'flight_offers.end_date', 
            'flights.flight_number', 
            'flights.price', 
            'flights.departure_time', 
            'flights.arrival_time', 
            'departures.name as departure_name', 
            'arrivals.name as arrival_name'
        )
        ->join('flights', 'flight_offers.flight_id', '=', 'flights.id')
        ->join('destinations as departures', 'flights.departure_airport_id', '=', 'departures.id')
        ->join('destinations as arrivals', 'flights.arrival_airport_id', '=', 'arrivals.id')
        ->orderBy('flight_offers.discount_percentage', 'desc')
        ->take(4)
        ->get();
    }
}
