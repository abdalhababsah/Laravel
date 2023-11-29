<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'ReviewID',
        'Opinion',
        'Rate',
        'UserID',
        'HouseID',

        // Add other fields as needed...
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function house()
    {
        return $this->belongsTo(House::class, 'HouseID');
    }
}
