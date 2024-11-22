<?php

namespace App\Http\Controllers;

use App\Models\AdminHotels;
use App\Models\hotels;
use App\Models\Reservations;
use Illuminate\Http\Request;

class adminHotelsController extends Controller
{
    public function index()
    {
        $reservations = Reservations::all();
        return view('AdminHotels.index', compact('reservations'));;
    }
    public function destroy($id)
    {
        // Buscar la reservación por ID
        $reservation = Reservations::find($id);

        // Verificar si existe la reservación
        if ($reservation) {
            $reservation->delete(); // Eliminar la reservación
            return redirect()->route('reservations.index')->with('success', 'Reservación eliminada correctamente.');
        }

        return redirect()->route('reservations.index')->with('error', 'Reservación no encontrada.');
    }

    public function Crear()
    {

        // Obtén el ID del administrador autenticado
        $adminH = auth()->user()->id; // Asegúrate de que 'id' sea el campo correcto del modelo User
        return view('AdminHotels.add-hotel', compact('adminH')); // Elimina 'hotels' si no es necesario


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
            'price' => 'required|numeric', // Cambiado de 'string' a 'numeric'
        ]);

        // Crear una nueva instancia de Hotel
        $hotel = new Hotels(); // Cambiado 'hotels' por 'Hotel'
        $hotel->name = $request->name;
        $hotel->id_admin = $request->id_admin;
        $hotel->address = $request->address;
        $hotel->number_rooms = $request->number_rooms;
        $hotel->phone_number = $request->phone_number;
        $hotel->qualification = $request->qualification;
        $hotel->price = $request->price;

        // Guardar el nuevo hotel en la base de datos
        $hotel->save();

        // Redirigir a la página deseada con un mensaje de éxito
        return redirect()->route('consultaHotels')->with('success', 'Hotel insertado con éxito!');
    }



    public function reserv()
    {
        // Obtener las reservaciones de los hoteles del administrador autenticado
    $reservations = Reservations::whereHas('hotel', function ($query) {
        $query->where('id_admin', auth()->user()->id); // Filtra por el administrador autenticado
    })->with('hotel') // Carga la relación con el hotel
      ->get();

    return view('AdminHotels.reservation', compact('reservations'));
    }

    public function consult()
    {
        $hotels = hotels::all();
        return view('AdminHotels.consult', compact('hotels'));
    }
    public function eliminar($id)
    {
        // Buscar el hotel por su id
        $hotel = Hotels::findOrFail($id);
    
        // Eliminar el hotel
        $hotel->delete();
        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->back()->with('success', 'Hotel eliminado correctamente.');
    }
}
