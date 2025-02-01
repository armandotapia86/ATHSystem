@extends('layouts.app')

@section('title', 'Diseño')

@section('contenido')
<div class="max-w-7xl mx-auto py-12 px-6">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-extrabold text-gray-900">Servicios de Diseño</h1>
        <p class="text-lg text-gray-600 mt-4">Transformamos tus ideas en creaciones visuales impactantes que capturan la esencia de tu marca.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Diseño gráfico -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="text-center">
                <img src="https://via.placeholder.com/150" alt="Diseño Gráfico" class="w-32 h-32 mx-auto mb-4">
                <h2 class="text-2xl font-semibold text-gray-900">Diseño Gráfico</h2>
                <p class="text-gray-700 mt-2">Creamos logos, papelería corporativa y todo tipo de materiales gráficos que le darán vida a tu marca.</p>
            </div>
        </div>

        <!-- Diseño Web -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="text-center">
                <img src="https://via.placeholder.com/150" alt="Diseño Web" class="w-32 h-32 mx-auto mb-4">
                <h2 class="text-2xl font-semibold text-gray-900">Diseño Web</h2>
                <p class="text-gray-700 mt-2">Desarrollamos sitios web modernos, responsivos y con diseño intuitivo para una experiencia de usuario excepcional.</p>
            </div>
        </div>

        <!-- Diseño UX/UI -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="text-center">
                <img src="https://via.placeholder.com/150" alt="Diseño UX/UI" class="w-32 h-32 mx-auto mb-4">
                <h2 class="text-2xl font-semibold text-gray-900">Diseño UX/UI</h2>
                <p class="text-gray-700 mt-2">Optimización de la interfaz de usuario (UI) y experiencia de usuario (UX) para garantizar un uso eficiente y agradable de tus productos digitales.</p>
            </div>
        </div>
    </div>

    <div class="mt-12 text-center">
        <h2 class="text-3xl font-semibold text-gray-900 mb-6">¿Por qué elegirnos?</h2>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Nuestro equipo de diseñadores está comprometido en ofrecer soluciones creativas y personalizadas, adaptadas a las necesidades específicas de tu negocio. Ya sea que necesites un logotipo, una página web o un diseño gráfico completo, estamos aquí para ayudarte a destacar.</p>
    </div>

    <div class="mt-12 text-center">
        <a href="{{ route('contacto') }}" class="inline-block px-8 py-3 text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600">
            Contáctanos para más información
        </a>
    </div>
</div>
@endsection
