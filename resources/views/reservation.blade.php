@extends('partials.master')
@include('partials.menu')


    <h1>Genera tu reservación</h1>
    <form class="row g-3" id="reservation-form" action="{{ route('guardar_reservacion') }}" method="POST">
        @csrf
        <div class="col-md-4">
            <label for="nombre">Nombre:</label>
            <input  type="text" class="form-control"id="nombre" name="nombre" required>
        </div>
        <div class="col-md-4">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="col-md-4">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-md-3">
            <label for="telefono">Teléfono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>
        <div class="col-md-3">
            <label for="fecha">Fecha de Reservación:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
        <div class="col-md-3">
            <label for="hora">Hora de Reservación:</label>
            <input type="time" class="form-control" id="hora" name="hora" required>
        </div>
        <div class="col-md-3">
            <label for="id_location">Ubicación:</label>
            <select id="id_location" name="id_location" class="form-select" required>
                @foreach($locations as $location)
                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                @endforeach
            </select>
        </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar</button>
              </div>
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