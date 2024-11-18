<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket de Reserva</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .ticket {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 0 auto;
            width: 300px; /* Ancho del ticket */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .info {
            margin-bottom: 15px;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .info:last-child {
            border-bottom: none; /* Eliminar el borde del último elemento */
        }
        .label {
            font-weight: bold;
            color: #555;
        }
        .value {
            color: #333;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <h2>Ticket de Reserva</h2>
        <div class="info">
            <span class="label">Hotel:</span> <span class="value">{{ $reservation->hotel->name }}</span>
        </div>
        <div class="info">
            <span class="label">A nombre de :</span> <span class="value">{{ $reservation->name }}</span>
        </div>
        <div class="info">
            <span class="label">Apellido Paterno:</span> <span class="value">{{ $reservation->paternal_surname }}</span>
        </div>
        <div class="info">
            <span class="label">Apellido Materno:</span> <span class="value">{{ $reservation->maternal_surname }}</span>
        </div>
        <div class="info">
            <span class="label">Registro del hotel:</span> <span class="value">{{ $reservation->registration_date }}</span>
        </div>
        <div class="info">
            <span class="label">Personas:</span> <span class="value">{{ $reservation->number_people }}</span>
        </div>
        <div class="info">
            <span class="label">Habitación:</span> <span class="value">{{ $reservation->room_number }}</span>
        </div>
        <div class="info">
            <span class="label">Salida propuesta:</span> <span class="value">{{ $reservation->end_date }}</span>
        </div>
        <div class="footer">
            Gracias por elegir nuestro hotel. ¡Esperamos que disfrute su estancia!
        </div>
    </div>
</body>
</html>