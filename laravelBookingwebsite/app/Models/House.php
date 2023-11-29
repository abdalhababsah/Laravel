<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $fillable = [
        'HouseID',
        'Address',
        'AreaID',
        'UserID',
        'Contact',
        'NumberOfRoom',
        'NumberOfToilet',
        'NumberOfBelcony',
        'Rent',
        'Image',
        'BookingID',
        'Status',
        // Add other fields as needed...
    ];
    public function area()
    {
        return $this->belongsTo(Area::class, 'AreaID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'BookingID', 'HouseID');
    }

}
