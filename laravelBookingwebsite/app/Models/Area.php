<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'AreaID',
        'Name',
        'UserID',
        // Add other fields as needed...
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

}
