<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;
    protected $fillable = ['hotel_id','name', 'paternal_surname', 
    'maternal_surname', 'registration_date', 'number_people', 'room_number', 'end_date'];

    public function hotel()
    {
        return $this->belongsTo(hotels::class, 'hotel_id');
    }
}
