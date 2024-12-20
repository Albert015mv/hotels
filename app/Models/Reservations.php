<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;
    public function hotel()
{
    return $this->belongsTo(hotels::class, 'hotel_id', 'id');
}

    public function user()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }
}
