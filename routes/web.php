<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[App\Http\Controllers\FrontendController::class, 'index'])->name('index');
Route::get('/menu',[App\Http\Controllers\FrontendController::class, 'menu'])->name('menu');
Route::get('/menu/detail/{id}',[App\Http\Controllers\FrontendController::class, 'detail'])->name('detail');
Route::get('/package/detailpromo',[App\Http\Controllers\FrontendController::class, 'detailpromo'])->name('detailpromo');
Route::get('/reservation',[App\Http\Controllers\FrontendController::class, 'reservation'])->name('reservation');
Route::post('/reservation', [App\Http\Controllers\FrontendController::class, 'guardarReservacion'])->name('guardar_reservacion');

Route::get('/crus',[App\Http\Controllers\FrontendController::class, 'crus'])->name('crus');
Route::post('/package',[App\Http\Controllers\FrontendController::class, 'guardarPaquete'])->name('guardar_paquete');
Route::get('/package/edit/{id}',[App\Http\Controllers\FrontendController::class, 'editarPaquete'])->name('editar_paquete');
Route::post('/package/update/{id}',[App\Http\Controllers\FrontendController::class, 'actualizarPaquete'])->name('actualizar_paquete');
Route::get('/package/delete/{id}',[App\Http\Controllers\FrontendController::class, 'eliminarPaquete'])->name('eliminar_paquete');



Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google-auth/callback', function () {
    $user_google = Socialite::driver('google')->user();
    // $user->token
    $user = User::updateOrCreate([
        'google_id' => $user_google->id,
    ], [
        'name' => $user_google->name,
        'email' => $user_google->email,        
    ]);
    
    Auth::login($user);

    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';