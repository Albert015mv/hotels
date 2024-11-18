<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        User::insert([
            [
                'name' => 'Jose Alberto',
                'email' => 'albertomart420@gmail.com',
                'password' => Hash::make('jose12345'), // Contraseña encriptada
                'rol' => '1', // Rol asignado
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'administrador',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin12345'), // Contraseña encriptada
                'rol' => '2', // Rol asignado
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'adminHotel',
                'email' => 'adminhotel@gmail.com',
                'password' => Hash::make('hotel12345'), // Contraseña encriptada
                'rol' => '3', // Rol asignado
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
