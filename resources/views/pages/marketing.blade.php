@extends('layouts.app')

@section('title', 'Marketing')

@section('contenido')
<div class="max-w-7xl mx-auto py-12 px-6">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-extrabold text-amber-900">Servicios de Marketing Digital</h1>
        <p class="text-lg text-cyan-600 mt-4">Transformamos tu presencia digital con estrategias efectivas y campañas de marketing que conectan con tu audiencia.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Estrategia de Marketing Digital -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="text-center">
                <h2 class="text-2xl font-semibold text-gray-900">Estrategia Digital</h2>
                <p class="text-gray-700 mt-2">Desarrollamos estrategias personalizadas para tu negocio, con enfoque en SEO, SEM y marketing de contenidos.</p>
                <div class="mt-4">
                    <a href="#" class="inline-block px-8 py-3 text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600">Más Información</a>
                </div>
            </div>
        </div>

        <!-- Gestión de Redes Sociales -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="text-center">
                <h2 class="text-2xl font-semibold text-gray-900">Gestión de Redes Sociales</h2>
                <p class="text-gray-700 mt-2">Te ayudamos a crear contenido atractivo, gestionar tus cuentas y aumentar la interacción con tu audiencia.</p>
                <div class="mt-4">
                    <a href="#" class="inline-block px-8 py-3 text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600">Más Información</a>
                </div>
            </div>
        </div>

        <!-- Publicidad Pagada -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="text-center">
                <h2 class="text-2xl font-semibold text-gray-900">Publicidad Pagada</h2>
                <p class="text-gray-700 mt-2">Lanza campañas de publicidad pagada a través de Google Ads, Facebook Ads y otras plataformas para generar leads.</p>
                <div class="mt-4">
                    <a href="#" class="inline-block px-8 py-3 text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600">Más Información</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-12 text-center">
        <h2 class="text-3xl font-semibold text-white-900 mb-6">¿Por qué elegirnos para tu Marketing Digital?</h2>
        <p class="text-lg text-white-600 max-w-3xl mx-auto">Somos expertos en crear estrategias de marketing digital que aumentan la visibilidad y los ingresos de tu negocio. Con años de experiencia en el mercado, sabemos cómo generar resultados efectivos.</p>
    </div>

    <div class="mt-12 text-center">
        <a href="{{ route('contacto') }}" class="inline-block px-8 py-3 text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600">
            Contáctanos para más información
        </a>
    </div>
</div>
@endsection
