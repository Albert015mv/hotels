<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    
    public function Crear()
    {
        return view('users.crear');
    }

    public function Consultar()
    {
        $user = User::all();
        return view('users/consultarU', compact('user'));
    }

    public function eliminar()
    {
        $hotels = User::all();
        return view('users.eliminar', compact('user'));
    }

    public function update(Request $request, User $hotel)
    {
        $request->validate([
            'name' => 'string',
            'address' => 'string',
            'number_rooms' => 'integer',
            'phone_number' => 'string',
            'qualification' => 'string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Actualizar los campos de texto
        $hotel->name = $request->name;
        $hotel->address = $request->address;
        $hotel->number_rooms = $request->number_rooms;
        $hotel->phone_number = $request->phone_number;
        $hotel->qualification = $request->qualification;
        // Guardar los cambios
        $hotel->save();

        return redirect()->back()->with('success', 'Hotel actualizado con éxito!');
    }
    public function store(Request $request)
    {
        // Validación de los datos de entrada
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'number_rooms' => 'required|integer',
            'phone_number' => 'required|string',
            'qualification' => 'required|string',
        ]);

        // Crear una nueva instancia de Hotel
        $hotel = new User();
        $hotel->name = $request->name;
        $hotel->address = $request->address;
        $hotel->number_rooms = $request->number_rooms;
        $hotel->phone_number = $request->phone_number;
        $hotel->qualification = $request->qualification;

        // Guardar el nuevo hotel en la base de datos
        $hotel->save();

        // Redirigir a la página deseada con un mensaje de éxito
        return redirect()->route('CRUD.consultar')->with('success', 'Hotel insertado con éxito!');
    }


    public function destroy(User $hotel)
    {
        $hotel->delete();

        return redirect()->back()->with('success', 'Hotel eliminado correctamente.');
    }
}
