@extends('partials.master')
@include('partials.menu')


    <h1>Genera tu reservación</h1>
    <form id="reservation-form" action="{{ route('guardar_reservacion') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono">
        </div>
        <div>
            <label for="fecha">Fecha de Reservación:</label>
            <input type="date" id="fecha" name="fecha">
        </div>
        <div>
            <label for="hora">Hora de Reservación:</label>
            <input type="time" id="hora" name="hora">
        </div>
        <div>
            <label for="id_location">Ubicación:</label>
            <select id="id_location" name="id_location">
                @foreach($locations as $location)
                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Enviar</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("Script de validación cargado.");
            $('#reservation-form').on('submit', function(e) {
                var fecha = $('#fecha').val();
                var today = new Date();
                today.setHours(0, 0, 0, 0); // Restablece la hora a las 00:00:00 para la comparación

                // Convierte la fecha seleccionada en un objeto Date en UTC para evitar problemas de zona horaria
                var selectedDate = new Date(fecha + 'T00:00:00Z');

                // Fecha del 10 de mayo del año seleccionado
                var selectedYear = selectedDate.getFullYear();
                var diezDeMayo = new Date(selectedYear + '-05-10T00:00:00Z');

                console.log('Fecha seleccionada:', selectedDate);
                console.log('Fecha de hoy:', today);
                console.log('10 de mayo:', diezDeMayo);

                // Validar que la fecha no sea anterior a hoy y no sea el 10 de mayo
                if (selectedDate < today) {
                    alert('La fecha de reservación no puede ser anterior a hoy.');
                    e.preventDefault();
                } else if (selectedDate.getTime() === diezDeMayo.getTime()) {
                    alert('No se pueden hacer reservaciones el 10 de mayo.');
                    e.preventDefault();
                }
            });
        });
    </script>