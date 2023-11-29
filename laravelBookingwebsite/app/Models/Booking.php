<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'BookingID',
        'Address',
        'Rent',
        'BookingStatus',
        'ArravingTime',
        'LeavingTime',
        'RenterID',
    ];
    public function renter()
    {
        return $this->belongsTo(User::class, 'RenterID');
    }
    public function Houses()
    {
        return $this->hasMany(House::class, 'HouseID');
    }

}
