@extends('layouts.admin')
@section('content')

<div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg mt-10">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Eliminar Hotel</h2>

    <form method="POST" action="{{route('CRUD.destroy')}}" class=" space-y-4 px-8">
        @csrf
        <!-- Nombre -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Id del hotel</label>
            <input type="text" id="id" name="id" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>

        <!-- Botón de Enviar -->
        <div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Eliminar
            </button>

        </div>
    </form>
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
        
    @endif
    @if (session('error'))
    <div class="alert alert-success" role="alert">
        {{session('error')}}
    </div>
        
    @endif
</div>

@endsection