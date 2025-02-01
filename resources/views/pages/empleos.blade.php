@extends('layouts.app')

@section('title', 'Empleos')

@section('contenido')
<div class="max-w-7xl mx-auto py-12 px-6">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-extrabold text-amber-900">Oportunidades de Empleo</h1>
        <p class="text-lg text-cyan-600 mt-4">Únete a nuestro equipo de trabajo y forma parte de una empresa innovadora, en constante crecimiento y dedicada a la excelencia.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Puesto 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="text-center">
                <h2 class="text-2xl font-semibold text-white-900">Diseñador Gráfico</h2>
                <p class="text-gray-700 mt-2">Buscamos un diseñador gráfico creativo con experiencia en creación de logotipos, materiales publicitarios y diseño digital.</p>
                <div class="mt-4">
                    <a href="#" class="inline-block px-8 py-3 text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600">Aplicar</a>
                </div>
            </div>
        </div>

        <!-- Puesto 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="text-center">
                <h2 class="text-2xl font-semibold text-white-900">Desarrollador Web</h2>
                <p class="text-gray-700 mt-2">Necesitamos un desarrollador web con conocimientos en HTML, CSS, JavaScript y Laravel para unirse a nuestro equipo de tecnología.</p>
                <div class="mt-4">
                    <a href="#" class="inline-block px-8 py-3 text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600">Aplicar</a>
                </div>
            </div>
        </div>

        <!-- Puesto 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="text-center">
                <h2 class="text-2xl font-semibold text-white-900">Especialista en Marketing Digital</h2>
                <p class="text-gray-700 mt-2">Estamos buscando un especialista en marketing digital para gestionar campañas publicitarias en redes sociales, SEO y SEM.</p>
                <div class="mt-4">
                    <a href="#" class="inline-block px-8 py-3 text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600">Aplicar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-12 text-center">
        <h2 class="text-3xl font-semibold text-white-900 mb-6">¿Por qué trabajar con nosotros?</h2>
        <p class="text-lg text-white-600 max-w-3xl mx-auto">Ofrecemos un ambiente dinámico y creativo donde valoramos la innovación y el trabajo en equipo. Si eres una persona apasionada por lo que haces y quieres hacer crecer tu carrera profesional, ¡queremos conocerte!</p>
    </div>

    <div class="mt-12 text-center">
        <a href="{{ route('contacto') }}" class="inline-block px-8 py-3 text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600">
            Contáctanos para más información
        </a>
    </div>
</div>
@endsection
