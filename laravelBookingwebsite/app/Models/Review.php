<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $primaryKey = 'ReviewID';
    protected $fillable = [

        'Opinion',
        'Rate',
        'UserID',
        'HouseID',

        // Add other fields as needed...
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID');
    }
    public function house()
    {
        return $this->belongsTo(House::class, 'HouseID');
    }
}
