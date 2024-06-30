<?php

// app/Http/Controllers/DestinationController.php
namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Hotel;
use Illuminate\Http\Request;

class DestinationPageController extends Controller
{
    public function index(Request $request)
    {
        $selectedDestination = $request->get('destination_id');
        
        if ($selectedDestination) {
            $destination = Destination::findWithHotels($selectedDestination);
            $hotels = $destination->hotels()->paginate(20);
            $isDestinationSelected = true;
        } else {
            $destination = null;
            $hotels = Hotel::getRandomHotelsQuery();
            $isDestinationSelected = false;
        }

        $destinations = Destination::getTopDestinations(4);

        return view('destination', compact('destination', 'hotels', 'isDestinationSelected', 'destinations'));
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        $destinations = Destination::searchDestinations($query);

        return view('destination', compact('destinations'))->with('isSearch', true);
    }
    public function autocomplete(Request $request)
    {
        $search = $request->get('term');
        $destinations = Destination::where('name', 'LIKE', '%' . $search . '%')->get();

        $result = [];
        foreach ($destinations as $destination) {
            $result[] = ['id' => $destination->id, 'value' => $destination->name];
        }

        return response()->json($result);
    }
}
