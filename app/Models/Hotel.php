<?php

// namespace App\Models;


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Hotel extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'description', 'email', 'phone', 'destination_id', 'price_per_night'];

    public static function topReserved()
    {
        return self::select('hotels.id', 'hotels.name as hotel_name', 'hotels.address', 'hotels.description', 'hotels.email', 'hotels.phone', 'hotels.destination_id', 'hotels.hotel_class_id', 'rooms.price_per_night', 'destinations.name as destination_name', 'classes.number as class_stars', DB::raw('COUNT(hotel_reservations.id) as reservations_count'))
        ->join('rooms', 'hotels.id', '=', 'rooms.hotel_id')
        ->join('hotel_reservations', 'rooms.id', '=', 'hotel_reservations.room_id')
        ->join('destinations', 'hotels.destination_id', '=', 'destinations.id')
        ->leftJoin('classes', 'hotels.hotel_class_id', '=', 'classes.id')
        ->groupBy('hotels.id', 'hotels.name', 'hotels.address', 'hotels.description', 'hotels.email', 'hotels.phone', 'hotels.destination_id', 'hotels.hotel_class_id', 'rooms.price_per_night', 'destinations.name', 'classes.number')
        ->orderBy('reservations_count', 'desc')
        ->distinct()
        ->take(4)
        ->get();
    }
    
    public static function getRandomHotelsQuery()
    {
        return self::select('hotels.id', 'hotels.name as hotel_name', 'hotels.address', 'hotels.description', 'hotels.email', 'hotels.phone', 'hotels.destination_id', 'hotels.hotel_class_id',  'destinations.name as destination_name', 'classes.number as class_stars', DB::raw('COUNT(hotel_reservations.id) as reservations_count'))
        ->join('rooms', 'hotels.id', '=', 'rooms.hotel_id')
        ->join('hotel_reservations', 'rooms.id', '=', 'hotel_reservations.room_id')
        ->join('destinations', 'hotels.destination_id', '=', 'destinations.id')
        ->leftJoin('classes', 'hotels.hotel_class_id', '=', 'classes.id')
        ->groupBy('hotels.id', 'hotels.name', 'hotels.address', 'hotels.description', 'hotels.email', 'hotels.phone', 'hotels.destination_id', 'hotels.hotel_class_id',  'destinations.name', 'classes.number')
        ->orderBy('reservations_count', 'desc')
        ->paginate(8);
    }

    public static function getHotelsByDestination($destinationId)
    {
        return self::where('destination_id', $destinationId)->get();
    }
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }
}
