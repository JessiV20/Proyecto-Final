<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Location;
use App\Models\Menu;
use App\Models\Reservation;
use App\Models\Package;



class FrontendController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function menu() {
        return view('menu');
    }
    public function reservation() {
        $locations = Location::all(); // Obtener todas las ubicaciones disponibles
        return view('reservation', compact('locations'));
    }
    public function detail($id){
        $menu = Menu::where('id_category',$id)->get();
        return view('detail')->with(['menu' => $menu]);
    }
    public function detailpromo()
    {
        $packages = Package::all(); // Obtiene todos los registros de la tabla 'package'
        return view('detailpromo', ['packages' => $packages]);
    }
    public function guardarReservacion(Request $request) {
        $reservation = new Reservation();
        $reservation->name = $request->nombre;
        $reservation->lastname = $request->apellido;
        $reservation->email = $request->email;
        $reservation->cellphone = $request->telefono;
        $reservation->date_reservation = $request->fecha;
        $reservation->hour_reservation = $request->hora;
        $reservation->id_location = $request->id_location;
        // Guardar la reservación
        $reservation->save();
        return view('welcome')->with('success', '¡Reservación realizada con éxito!');;
    }
}
				