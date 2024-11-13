<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hotels;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Storage;

class HotelsController extends Controller
{

    public function index()
{
    $hotels = hotels::all(); // Asegúrate de obtener los datos
    return view('reservation.hotels', compact('hotels'));
}

    public function Crear()
    {
        return view('CRUD.crear');
    }

    public function Consultar()
    {
        $hotels = hotels::all();
        return view('CRUD.consultar', compact('hotels'));
    }

    public function eliminar()
    {
        $hotels = hotels::all();
        return view('CRUD.eliminar', compact('hotels'));
    }

    public function update(Request $request, Hotels $hotel)
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
        $hotel = new Hotels();
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


    public function destroy(hotels $hotel)
    {
        $hotel->delete();

        return redirect()->back()->with('success', 'Hotel eliminado correctamente.');
    }
}
