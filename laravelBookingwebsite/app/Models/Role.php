<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $primaryKey = 'RoleID';
    protected $fillable = [

        'Name',
        // Add other fields as needed...
    ];


    public function users()
    {
        return $this->hasMany(User::class, 'RoleID');
    }
}
