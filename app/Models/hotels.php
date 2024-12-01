<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotels extends Model
{
    use HasFactory;
    public function owner()
    {
        return $this->belongsTo(User::class, 'id_admin'); // 'admin_id' es la llave foránea que apunta al administrador
    }

    public function reservations()
    {
        return $this->hasMany(Reservations::class, 'hotel_id', 'id');
    }
    
}
