<?php

namespace App\Http\Controllers;

use App\Models\administration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.indexA');
    }

    public function admin()
    {
        $users = User::all();
        return view('Admin.consultaAdm', compact('users'));
    }

    public function create()
    {
        return view('Admin.create'); // Retorna la vista del formulario de creación
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password'=>'required|string',
            'rol' => 'required|integer|in:1,2,3', // Asegura que el rol sea válido
        ]);
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->rol = $request->rol;
        $user->save();

        return redirect()->route('Consulta.adm')->with('success','El usuario a sido registrador correctamente');
    }
    public function destroy($id)
    {
        // Buscar el hotel por su id
        $hotel = user::findOrFail($id);
    
        // Eliminar el hotel
        $hotel->delete();
        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->back()->with('success', 'Hotel eliminado correctamente.');
    }
}
