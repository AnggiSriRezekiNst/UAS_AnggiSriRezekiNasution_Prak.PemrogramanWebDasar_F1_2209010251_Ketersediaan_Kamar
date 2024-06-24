<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_bookings extends Model
{
    use HasFactory;

    protected $fillable = ['room_id', 'patient_id', 'start_date', 'end_date'];

    public function rooms()
    {
        return $this->belongsTo(Rooms::class);
    }

    public function patients()
    {
        return $this->belongsTo(Patients::class);
    }
}
