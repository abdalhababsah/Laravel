<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $primaryKey = 'HouseID';

    protected $fillable = [

        'Address',
        'Type',
        'NumberOfRoom',
        'NumberOfToilet',
        'NumberOfBelcony',
        'Rent',
        'Image',
        'Status',
        'Location',
        'UserID',
        // Add other fields as needed...
    ];



    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'HouseID');
    }
}
