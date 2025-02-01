@extends('layouts.app')

@section('title', 'Carrito de Compras')

@section('contenido')

    <div class="container mx-auto mt-10 px-4">
        
        <h1 class="text-4xl font-bold mb-8 text-center text-amber-600">🛒 Carrito de Compras</h1>

        <!-- Mensaje de éxito (flash message) -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-6 shadow-md">
                {{ session('success') }}
            </div>
        @endif

        <!-- Validar si hay productos en el carrito -->
        @if (count($carrito) > 0)
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                @php
                    $total = 0; // Inicializa el total
                @endphp

                <!-- Iterar sobre los productos en el carrito -->
                @foreach ($carrito as $producto)
                    @php
                        $subtotal = $producto['precio'] * $producto['cantidad']; // Calcula el subtotal
                        $total += $subtotal; // Suma al total
                    @endphp
                    <div class="flex border border-gray-200 shadow-lg rounded-lg p-4 bg-white hover:shadow-xl transition-shadow duration-300">
                        <!-- Imagen del producto -->
                        <div class="w-1/3">
                            <img src="https://picsum.photos/id/{{ $producto['id'] }}/240" 
                                 alt="{{ $producto['nombre'] }}"
                                 class="w-full h-full object-cover rounded-lg">
                        </div>

                        <!-- Detalles del producto -->
                        <div class="w-2/3 pl-4 flex flex-col justify-between">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800">{{ $producto['nombre'] }}</h2>
                                <p class="text-gray-600 mt-1">Precio: ${{ number_format($producto['precio'], 2) }}</p>
                                <p class="text-gray-600 mt-1">Cantidad: {{ $producto['cantidad'] }}</p>
                                <p class="text-gray-800 font-bold mt-2">Subtotal: ${{ number_format($subtotal, 2) }}</p>
                            </div>

                            <!-- Formulario para eliminar el producto -->
                            <form action="{{ route('carrito.eliminar') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $producto['id'] }}">
                                <button type="submit" 
                                    class="mt-4 bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Mostrar el total y botón de comprar -->
            <div class="mt-8 flex flex-col items-end">
                <div class="text-2xl font-bold mb-4 text-white-800">
                    Total: ${{ number_format($total, 2) }}
                </div>
                
                <!-- Botón para proceder con la compra -->
                <form action="{{ route('carrito.procesarCompra') }}" method="POST">
                    @csrf
                    <button type="submit" 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg shadow-lg transition duration-300">
                        Proceder a la Compra
                    </button>
                </form>
            </div>
        @else
            <!-- Mensaje si el carrito está vacío -->
            <div class="text-center">
                <p class="text-gray-600 text-xl">Tu carrito está vacío.</p>
                <a href="{{ route('productos.index') }}" 
                   class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
                    Ir a Productos
                </a>
            </div>
        @endif
    </div>
@endsection
