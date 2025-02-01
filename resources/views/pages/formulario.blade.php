@extends('layouts.app')

@section('title', 'Formulario')

@section('contenido')
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-6">Genera Nuevo Ticket</h1>

        <!-- Mensajes de éxito o error -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario -->
        <form action="{{ url('/enviar-formulario') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="nombre" id="nombre" required
                    placeholder="Escribe tu nombre"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" name="email" id="email" required
                    placeholder="Escribe tu correo electrónico"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
            <div>
                <label for="ciudad" class="block text-sm font-medium text-gray-700">Ciudad</label>
                <textarea name="ciudad" id="ciudad" required
                    placeholder="Escribe la ciudad"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
            </div>
            <div>
                <label for="telefono" class="block text-sm font-medium text-gray-700">Telefono</label>
                <textarea name="telefono" id="telefono" required
                    placeholder="Escriba su telefono"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
            </div>
            <div>
                <label for="mensaje" class="block text-sm font-medium text-gray-700">Mensaje</label>
                <textarea name="mensaje" id="mensaje" rows="4" required
                    placeholder="Escribe tu mensaje"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Enviar
            </button>
        </form>
    </div>
@endsection
