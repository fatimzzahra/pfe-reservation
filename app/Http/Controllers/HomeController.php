<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Hotel;
use App\Models\FlightOffers;

class HomeController extends Controller
{
    public function index()
    {
        $topDestinations = Destination::topReserved();
        $topHotels = Hotel::topReserved();
        $topFlightOffers = FlightOffers::topFlightOffers();
        $classes = Classes::all(); 

        return view('acceuil', compact('topDestinations', 'topHotels', 'topFlightOffers', 'classes'));
    }
}
