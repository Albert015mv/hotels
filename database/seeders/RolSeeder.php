<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    public function run(): void
    {
        // Inserta directamente los roles con sus nombres
        Rol::insert([
            ['name' => 'usuario', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'administrador', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'adminHotel', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
