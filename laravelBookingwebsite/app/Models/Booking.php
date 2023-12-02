<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $primaryKey = 'BookingID';
    protected $fillable = [

        'BookingStatus',
        'ArravingTime',
        'LeavingTime',
        'RenterID',
        'HouseID',
    ];
    public function renter()
    {
        return $this->belongsTo(User::class, 'RenterID');
    }
    public function house()
    {
        return $this->belongsTo(House::class, 'HouseID');
    }
}
