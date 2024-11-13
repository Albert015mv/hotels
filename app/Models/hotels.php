<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotels extends Model
{
    use HasFactory;
    protected $fillable = ['name','address','number_rooms','phone_number','qualification'];

    public function reservations()
    {
        return $this->hasMany(Reservations::class, 'hotel_id');
    }
    
}
