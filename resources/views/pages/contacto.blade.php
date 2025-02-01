@extends('layouts.app')

@section('title', 'Contacto')

@section('contenido')
<div class="max-w-7xl mx-auto py-12 px-6">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-extrabold text-gray-900">Contáctanos</h1>
        <p class="text-lg text-gray-600 mt-4">Nos encantaría saber de ti. Si tienes alguna pregunta, comentario o solicitud, por favor, completa el siguiente formulario.</p>
    </div>

    <div class="bg-white shadow-md rounded-lg p-8">
        <div class="space-y-8">
            <!-- Sección de Información de Contacto -->
            <section>
                <h2 class="text-2xl font-semibold text-gray-900">Información de contacto</h2>
                <p class="text-gray-700 mt-2">Puedes comunicarte con nosotros a través de los siguientes canales:</p>
                <ul class="list-disc ml-6 mt-4">
                    <li class="text-gray-700">Email: artahersis@gmail.com</li>
                    <li class="text-gray-700">Teléfono: +573218025830</li>
                    <li class="text-gray-700">Dirección: Calle 26 # 36-79 bogota, Colombia</li>
                </ul>
            </section>

            <!-- Formulario de Contacto -->
            <section>
                <h2 class="text-2xl font-semibold text-gray-900">Formulario de contacto</h2>
                <p class="text-gray-700 mt-2">Por favor, completa el formulario a continuación para enviarnos tu consulta o mensaje:</p>

                <form action="#" method="POST" class="mt-6 space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-900">Nombre</label>
                        <input type="text" id="name" name="name" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-900">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                    </div>

                    <div>
                        <label for="message" class="block text-lg font-medium text-gray-900">Mensaje</label>
                        <textarea id="message" name="message" rows="4" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required></textarea>
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="inline-block px-6 py-3 text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600">
                            Enviar mensaje
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
@endsection
