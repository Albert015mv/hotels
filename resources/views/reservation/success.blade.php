@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Reserva completada con éxito</h1>
    <p>Tu reserva ha sido registrada correctamente.</p>
    <a href="{{ route('reservation.ticket', ['id' => $reservation->id]) }}" class="btn btn-primary">Descargar Ticket</a>
</div>
@endsection
