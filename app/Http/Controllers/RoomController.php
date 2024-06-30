<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\RoomType;

class RoomController extends Controller
{
    public function index($hotelId)
    {
        $hotel = Hotel::findOrFail($hotelId);
        $rooms = $hotel->rooms()->with('roomType')->get(); // Fetch all rooms without pagination
        $roomTypes = RoomType::all();

        $roomTypeIcons = [
            'Single' => asset('images/icons/single.svg'),
            'Double' => asset('images/icons/double.svg'),
            'Suite' => asset('images/icons/suite.svg'),
            'Triple' => asset('images/icons/triple.svg')
        ];
        
        return view('rooms', compact('hotel', 'rooms', 'roomTypes', 'roomTypeIcons'));
    }
}
