<?php

namespace App\Http\Controllers;

use App\Models\administration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showForm()
    {
        return view('auth.register'); // Regresa la vista del formulario
    }

    public function crear(Request $request)
    {
        // Validación de los datos de entrada
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|integer',
        ]);

        // Crear una nueva instancia de Hotel
        $admin = new administration();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;

        // Guardar el nuevo hotel en la base de datos
        $admin->save();

        // Redirigir a la página deseada con un mensaje de éxito
        return redirect()->route('/Admin/registerA')->with('success', 'Administrador insertado con éxito!');
    }

    public function loginA(Request $request)
    {
        // Validación
        // $credentials = [
        //"password" => $request->password,
        //"email" => $request->email,
        //    //"active" => true
        //];
        //
        //$remember = $request->has('remember');
        //// Autenticar usando el guard de administradores
        //
        //if (Auth::guard('admin')->attempt($credentials, $remember)) {
        //    
        //    $request->session()->regenerate();
        //    return redirect()->intended(route('privada'));
        //} else {
        //    return redirect('/Admin/loginA');
        //}
    }



    public function logoutA(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));

    }
}
