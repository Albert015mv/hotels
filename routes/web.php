<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\adminHotelsController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Auth;


//Login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Vista de usuarios
    })->name('dashboard');
});

//Rutas del usuario
Route::middleware('auth')->group(function () {
    //vistas
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
    //CRUD Reservatios
    Route::get('/reservation/crearH', [ReservationController::class, 'crear'])->name('reservation.crearH');
    Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');
    Route::get('/reservations/ticket/{id}', [ReservationController::class, 'ticket'])->name('reservation.downloadTicket');
    Route::get('/reservation/consultarH', [ReservationController::class, 'consultar'])->name('reservation.consultar');
    Route::put('/reservation/{reservations}', [ReservationController::class, 'update'])->name('reservation.update');
    Route::get('/reservation/eliminar', [ReservationController::class, 'eliminar'])->name('reservation.eliminar');
    Route::delete('/reservation/{reservations}', [ReservationController::class, 'destroy'])->name('reservation.destroy');
    //Hotel
    Route::get('/CRUD/crear', [HotelsController::class, 'crear'])->name('CRUD.crear');
    Route::post('/CRUD/store', [HotelsController::class, 'store'])->name('CRUD.store');
    Route::get('/CRUD/consultar', [HotelsController::class, 'consultar'])->name('CRUD.consultar');
    Route::put('/CRUD/{hotel}', [HotelsController::class, 'update'])->name('CRUD.update');
    Route::get('/CRUD/eliminar', [HotelsController::class, 'eliminar'])->name('CRUD.eliminar');
    Route::delete('/CRUD/{hotel}', [HotelsController::class, 'destroy'])->name('CRUD.destroy');

    //User
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas para administradores
Route::middleware('auth.admin')->group(function () {
    Route::get('/adm/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('ConsultaAdmin', [AdminController::class, 'admin'])->name('Consulta.adm');
    Route::get('/users/create', [AdminController::class, 'create'])->name('user.create');
    Route::post('/users/store', [AdminController::class, 'store'])->name('user.store');
    Route::delete('/users/destroy/{id}', [AdminController::class, 'destroy'])->name('user.destroy');
});

//Rutas del administrador del hotel
Route::middleware('auth.adminHotel')->group(function () {
    Route::get('reservations', [adminHotelsController::class, 'destroy'])->name('reservations.delete');
    Route::delete('reservations', [adminHotelsController::class, 'destroy'])->name('reservations.destroy');
    Route::get('/admHotel/dashboard', [adminHotelsController::class, 'index'])->name('adminH.index');
    Route::get('/regisHotel', [adminHotelsController::class, 'crear'])->name('hotels.add');
    Route::post('/regisStore', [adminHotelsController::class, 'store'])->name('hotels.store');
    Route::get('/reservationH', [adminHotelsController::class, 'reserv'])->name('reservation');
    Route::get('/consultaH', [adminHotelsController::class, 'consult'])->name('consultaHotels');
    Route::delete('/delete/{id}', [adminHotelsController::class, 'eliminar'])->name('hotels.destroy');
    Route::get('/reservations', [adminHotelsController::class, 'index'])->name('reservations.index');
});

Route::post('/logout', function () {
    Auth::logout();  // Cierra la sesión del usuario autenticado
    return redirect('/login');  // Redirige a la página de login
})->name('logout');

require __DIR__ . '/auth.php';

// Ruta pública para la página de bienvenida
Route::get('/', function () {
    return view('welcome');
});

