<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Destination extends Model
{
    protected $fillable = ['name', 'description', 'location'];

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }

    public static function topReserved()
    {
        return self::select('destinations.*', DB::raw('COUNT(hotel_reservations.id) as reservations_count'))
            ->join('hotels', 'destinations.id', '=', 'hotels.destination_id')
            ->join('rooms', 'hotels.id', '=', 'rooms.hotel_id')
            ->join('hotel_reservations', 'rooms.id', '=', 'hotel_reservations.room_id')
            ->groupBy('destinations.id', 'destinations.name', 'destinations.description', 'destinations.created_at', 'destinations.updated_at')
            ->orderBy('reservations_count', 'desc')
            ->take(10)
            ->get();
    }
    public static function getTopDestinations($limit = 4)
    {
        return self::take($limit)->get();
    }

    public static function searchDestinations($query)
    {
        return self::where('name', 'like', '%' . $query . '%')->get();
    }

    public static function findWithHotels($id)
    {
        return self::with('hotels')->findOrFail($id);
    }
}
