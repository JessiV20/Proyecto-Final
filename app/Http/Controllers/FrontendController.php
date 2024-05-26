<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Location;
use App\Models\Menu;
use App\Models\Reservation;
use App\Models\Package;
use Illuminate\Support\Facades\Storage;



class FrontendController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function menu() {
        return view('menu');
    }
    public function crus() {
        $packages = Package::all(); // Obtener todos los paquetes
        return view('crus', compact('packages')); // Pasar los paquetes a la vista
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





/*/ Método para guardar un paquete
public function guardarPaquete(Request $request) {
    $package = new Package();
    $package->name = $request->name;
    $package->description = $request->description;
    $package->image = $request->image;
    $package->save();
    
    return redirect()->route('crus')->with('success', '¡Paquete agregado con éxito!');
}

// Método para mostrar el formulario de edición de paquete
public function editarPaquete($id) {
    $package = Package::findOrFail($id);
    return view('editar_paquete', compact('package'));
}

// Método para actualizar un paquete
public function actualizarPaquete(Request $request, $id) {
    $package = Package::findOrFail($id);
    $package->name = $request->name;
    $package->description = $request->description;
    $package->image = $request->image;
    $package->save();
    
    return redirect()->route('crus')->with('success', '¡Paquete actualizado con éxito!');
}

// Método para eliminar un paquete
public function eliminarPaquete($id) {
    $package = Package::findOrFail($id);
    $package->delete();
    
    return redirect()->route('crus')->with('success', '¡Paquete eliminado con éxito!');
}*/



 // Método para guardar un paquete
 public function guardarPaquete(Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $package = new Package();
    $package->name = $request->name;
    $package->description = $request->description;

    // Subir imagen y guardar la ruta en la base de datos
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images/packages', 'public');
        $package->image = $imagePath;
    }

    $package->save();
    
    return redirect()->route('crus')->with('success', '¡Paquete agregado con éxito!');
}

// Método para mostrar el formulario de edición de paquete
public function editarPaquete($id) {
    $package = Package::findOrFail($id);
    return view('editar_paquete', compact('package'));
}

// Método para actualizar un paquete
public function actualizarPaquete(Request $request, $id) {
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $package = Package::findOrFail($id);
    $package->name = $request->name;
    $package->description = $request->description;

    // Subir nueva imagen si existe y eliminar la anterior
    if ($request->hasFile('image')) {
        // Eliminar la imagen anterior
        if ($package->image) {
            Storage::disk('public')->delete($package->image);
        }

        // Subir la nueva imagen
        $imagePath = $request->file('image')->store('images/packages', 'public');
        $package->image = $imagePath;
    }

    $package->save();
    
    return redirect()->route('crus')->with('success', '¡Paquete actualizado con éxito!');
}

// Método para eliminar un paquete
public function eliminarPaquete($id) {
    $package = Package::findOrFail($id);

    // Eliminar la imagen asociada
    if ($package->image) {
        Storage::disk('public')->delete($package->image);
    }

    $package->delete();
    
    return redirect()->route('crus')->with('success', '¡Paquete eliminado con éxito!');
}

 }

				