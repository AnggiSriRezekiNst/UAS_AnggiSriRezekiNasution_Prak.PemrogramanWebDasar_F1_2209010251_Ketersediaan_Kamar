<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    use HasFactory;

    protected $fillable = ['room_number', 'room_level_id'];

    public function roomlevels()
    {
        return $this->belongsTo(Room_levels::class);
    }

    public function room_bookings()
    {
        return $this->hasMany(Room_bookings::class);
    }
}

