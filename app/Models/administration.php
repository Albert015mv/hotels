<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
class administration extends Authenticatable
{
    protected $table = 'administrations'; // Nombre de la tabla
    protected $fillable = [ 'name', 'email', 'password']; // Campos que se pueden usar en la autenticación
}
