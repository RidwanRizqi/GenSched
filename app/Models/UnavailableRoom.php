<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnavailableRoom extends Model
{
    use HasFactory;

    protected $table = 'unavailable_rooms';

    protected $guarded = ['id'];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function class()
    {
        return $this->belongsTo(CollegeClass::class, 'class_id');
    }
}
