<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    use HasFactory;
    public function hotel()
    {
        return $this->belongsTo(hotels::class); // Asegúrate de que el nombre del modelo Hotel sea correcto
    }
}
