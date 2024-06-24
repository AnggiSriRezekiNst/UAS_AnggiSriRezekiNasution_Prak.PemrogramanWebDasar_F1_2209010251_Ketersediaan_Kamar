<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_levels extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function rooms()
    {
        return $this->hasMany(Rooms::class);
    }
}
