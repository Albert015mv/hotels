<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ReservationController extends Controller
{
    // Método para mostrar el formulario de creación
    public function crear(Request $request)
    {

        $hotel_id = $request->input('hotel_id'); // Obtén el hotel_id desde la solicitud
        $user_id = Auth::id(); // Obtén el ID del usuario autenticado

        return view('reservation.crearH', compact('hotel_id', 'user_id'));  // Pasa el hotel_id a la vista
    }

    // Método para almacenar la reserva en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'user' => 'required|integer',
            'hotel_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'paternal_surname' => 'required|string|max:255',
            'maternal_surname' => 'required|string|max:255',
            'registration_date' => 'required|date',
            'number_people' => 'required|integer',
            'room_number' => 'required|integer',
            'end_date' => 'required|date',
        ]);

        // Guardar la reservación en la base de datos
        $reservation = new Reservations();
        $reservation->user = $request->user; // Asignar el ID del usuario autenticado
        $reservation->hotel_id = $request->hotel_id;
        $reservation->name = $request->name;
        $reservation->paternal_surname = $request->paternal_surname;
        $reservation->maternal_surname = $request->maternal_surname;
        $reservation->registration_date = $request->registration_date;
        $reservation->number_people = $request->number_people;
        $reservation->room_number = $request->room_number;
        $reservation->end_date = $request->end_date;

        $reservation->save();

        // Guarda el ID de la reserva en la sesión para mostrar el modal de éxito y proporcionar el ID para el ticket
        Session::flash('reservation_success', true);
        Session::flash('reservation_id', $reservation->id);

        return redirect()->back()->with('success', 'Registro hecho con éxito');
    }

    // Método para generar y descargar el ticket en PDF
    public function ticket($id)
    {
        $reservation = Reservations::with('hotel')->findOrFail($id);
        $pdf = Pdf::loadView('reservation.ticket', compact('reservation'));
        return $pdf->download('ticket_reserva_' . $reservation->id . '.pdf');
    }

    public function update(Request $request, Reservations $reservations)
    {
        $request->validate([
            'hotel_id' => 'integer',
            'name' => 'string',
            'paternal_surname' => 'string',
            'maternal_surname' => 'string',
            'registration_date' => 'date',
            'number_people' => 'integer',
            'room_number' => 'integer',
            'end_date' => 'date',
        ]);

        // Actualizar los campos de texto

        $reservations->name = $request->name;
        $reservations->paternal_surname = $request->paternal_surname;
        $reservations->maternal_surname = $request->maternal_surname;
        $reservations->registration_date = $request->registration_date;
        $reservations->number_people = $request->number_people;
        $reservations->room_number = $request->room_number;
        $reservations->end_date = $request->end_date;
        // Guardar los cambios
        $reservations->save();

        return redirect()->back()->with('success', 'Reservacion actualizado con éxito!');
    }


    public function eliminar()
    {
        $reservations = Reservations::all();
        return view('reservation.eliminar', compact('reservations'));
    }
    public function destroy(Reservations $reservations)
    {
        $reservations->delete();

        return redirect()->back()->with('success', 'Hotel eliminado correctamente.');
    }
    public function Consultar()
    {
        $reservations = Reservations::all(); // Cambia $Reservations a $reservations para ser consistente
        return view('reservation/consultarH', compact('reservations'));
    }
    public function index()
    {
        // Obtener todas las reservaciones de la base de datos
        $reservations = Reservations::all();

        // Retornar la vista con los datos de las reservaciones
        return view('AdminHotels.reservation', compact('reservations'));
    }
}
