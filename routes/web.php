<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\adminHotelsController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
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

//Login
// Rutas para usuarios (role_id == 1)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Vista de usuarios
    })->name('dashboard');
});


Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas para administradores (role_id == 2)
Route::get('/adm/dashboard', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/admHotel/dashboard', [adminHotelsController::class, 'index'])
    ->middleware('auth.adminHotel')
    ->name('adminH.index');
Route::post('/logout', function () {
    Auth::logout();  // Cierra la sesión del usuario autenticado
    return redirect('/login');  // Redirige a la página de login
})->name('logout');

require __DIR__ . '/auth.php';



//Rutas de las vistas
Route::get('usuarios', function () {
    return view('user');
});

//Hotels
Route::get('/CRUD/crear', [HotelsController::class, 'crear'])->name('CRUD.crear');
Route::post('/CRUD/store', [HotelsController::class, 'store'])->name('CRUD.store');
Route::get('/CRUD/consultar', [HotelsController::class, 'consultar'])->name('CRUD.consultar');
Route::put('/CRUD/{hotel}', [HotelsController::class, 'update'])->name('CRUD.update');
Route::get('/CRUD/eliminar', [HotelsController::class, 'eliminar'])->name('CRUD.eliminar');
Route::delete('/CRUD/{hotel}', [HotelsController::class, 'destroy'])->name('CRUD.destroy');

Route::get('balnearios/index', function () {
    return view('balnearios/index');
});

Route::get('restaurants/index', function () {
    return view('restaurants/index');
});

Route::get('tour/index', function () {
    return view('tour/index');
});


Route::get('AdminHotels/index', function () {
    return view('AdminHotels/index');
});

Route::get('/catalogoHoteles', [HotelsController::class, 'index']);

// Ruta pública para la página de bienvenida
Route::get('/', function () {
    return view('welcome');
});

//CRUD Reservatios
Route::get('/reservation/crearH', [ReservationController::class, 'crear'])->name('reservation.crearH');
Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/reservations/ticket/{id}', [ReservationController::class, 'ticket'])->name('reservation.downloadTicket');
Route::get('/reservation/consultarH', [ReservationController::class, 'consultar'])->name('reservation.consultar');
Route::put('/reservation/{reservations}', [ReservationController::class, 'update'])->name('reservation.update');
Route::get('/reservation/eliminar', [ReservationController::class, 'eliminar'])->name('reservation.eliminar');
Route::delete('/reservation/{reservations}', [ReservationController::class, 'destroy'])->name('reservation.destroy');


Route::get('/Admin/registerA', function () {
    return view('/Admin/registerA');
});


//Route::get('register', [AdminController::class, 'showForm'])->name('register.form');
//Route::post('register', [AdminController::class, 'crear'])->name('register.crear');

//Vista de las reservaciones
//Route::get('vistaHoteles', function () {
//    return view('reservation/hotels');
//});


//Route::view('/admin/loginA', "Admin/loginA")->name('inicio');
//Route::view('/admin/registroA', "Admin/registerA")->name('register');
//Route::view('/adminA', "Admin/indexA")->middleware('auth') ->name('privada');
//
//Route::post('/validar-registro',[AdminController::class,'registerA'])->name('validar-registro');
//Route::post('/iniciar-sesion',[AdminController::class,'loginA'])->name('iniciar-sesion');
//Route::get('/logoutA',[AdminController::class,'cerrar'])->name('logout');
