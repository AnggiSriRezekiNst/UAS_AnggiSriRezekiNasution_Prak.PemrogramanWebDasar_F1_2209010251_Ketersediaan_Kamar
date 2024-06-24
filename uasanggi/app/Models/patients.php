<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    use HasFactory; 

    protected $fillable = ['name', 'date_of_birth', 'gender'];

    public function room_bookings()
    {
        return $this->hasMany(Room_bookings::class);
    }
}