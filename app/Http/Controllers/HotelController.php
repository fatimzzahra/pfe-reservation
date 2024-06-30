<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
class HotelController extends Controller
{
    public function topHotels()
    {
        $topHotels = Hotel::topReserved();
        return view('acceuil', compact('topHotels'));
    }
    public function show($id)
    {
        $hotel = Hotel::with(['destination', 'rooms' => function($query) {
            $query->with('roomType')->limit(4);
        }])->findOrFail($id);
        
        return view('hotel', compact('hotel'));
    }
    
}
