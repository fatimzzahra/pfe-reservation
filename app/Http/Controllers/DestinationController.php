<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    public function topDestinations()
    {
        $topDestinations = Destination::topReserved();
        return view('acceuil', compact('topDestinations'));
    }
}
