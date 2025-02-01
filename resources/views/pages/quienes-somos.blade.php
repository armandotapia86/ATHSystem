@extends('layouts.app')

@section('title', 'Quiénes Somos')

@section('contenido')
<div class="max-w-7xl mx-auto py-12 px-6">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-extrabold text-amber-900">Quiénes Somos</h1>
        <p class="text-lg text-cyan-600 mt-4">Conoce a nuestro equipo y descubre nuestra misión y visión.</p>
    </div>

    <div class="prose lg:prose-xl mx-auto">
        <h2 class="text-2xl font-semibold text-white-900">Nuestra Historia</h2>
        <p>Somos un equipo apasionado por ayudar a las empresas a crecer y tener éxito. Desde nuestros inicios, nos hemos enfocado en ofrecer soluciones innovadoras y personalizadas que respondan a las necesidades de nuestros clientes. Cada proyecto es una oportunidad para mostrar nuestra creatividad y habilidades.</p>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Nuestra Misión</h2>
        <p>Nuestra misión es proporcionar servicios de alta calidad que impulsen el crecimiento de las marcas, generando impacto a través de campañas de publicidad, marketing y diseño. Trabajamos con compromiso y pasión para ayudar a nuestros clientes a alcanzar sus metas comerciales.</p>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Nuestra Visión</h2>
        <p>Queremos ser reconocidos como líderes en la industria de la publicidad y el marketing, brindando soluciones creativas y eficaces para empresas de todos los tamaños. Nuestro objetivo es establecer relaciones de largo plazo con nuestros clientes, basadas en confianza y resultados tangibles.</p>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Conoce a Nuestro Equipo</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
            <div class="text-center bg-gray-50 p-6 rounded-lg shadow-md">
                <img class="w-32 h-32 mx-auto rounded-full" src="https://via.placeholder.com/150" alt="Miembro del equipo">
                <h3 class="mt-4 text-xl font-semibold text-white-900">Juan Pérez</h3>
                <p class="text-gray-600 mt-2">CEO & Fundador</p>
                <p class="text-gray-600 mt-2">Juan es el líder de nuestra empresa y tiene más de 15 años de experiencia en la industria de la publicidad. Su visión ha guiado el crecimiento de nuestra agencia desde el principio.</p>
            </div>

            <div class="text-center bg-gray-50 p-6 rounded-lg shadow-md">
                <img class="w-32 h-32 mx-auto rounded-full" src="https://via.placeholder.com/150" alt="Miembro del equipo">
                <h3 class="mt-4 text-xl font-semibold text-white-900">María López</h3>
                <p class="text-gray-600 mt-2">Directora de Marketing</p>
                <p class="text-gray-600 mt-2">María tiene una gran experiencia en marketing digital y publicidad en redes sociales. Es responsable de desarrollar estrategias para nuestros clientes que generan resultados reales.</p>
            </div>

            <div class="text-center bg-gray-50 p-6 rounded-lg shadow-md">
                <img class="w-32 h-32 mx-auto rounded-full" src="https://via.placeholder.com/150" alt="Miembro del equipo">
                <h3 class="mt-4 text-xl font-semibold text-white-900">Carlos Sánchez</h3>
                <p class="text-gray-600 mt-2">Director Creativo</p>
                <p class="text-gray-600 mt-2">Carlos lidera el equipo creativo, diseñando campañas visuales impactantes y estrategias de contenido. Su creatividad es fundamental para el éxito de nuestras campañas publicitarias.</p>
            </div>
        </div>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Nuestros Valores</h2>
        <p>En nuestra empresa, nos guiamos por principios fundamentales que aseguran que cada cliente reciba lo mejor de nosotros:</p>
        <ul class="list-disc ml-6">
            <li><strong>Integridad:</strong> Mantenemos altos estándares éticos en todas nuestras relaciones comerciales.</li>
            <li><strong>Innovación:</strong> Buscamos siempre nuevas formas de hacer las cosas, adoptando las últimas tendencias y tecnologías.</li>
            <li><strong>Compromiso:</strong> Estamos comprometidos con el éxito de nuestros clientes y nos esforzamos por superar sus expectativas.</li>
            <li><strong>Creatividad:</strong> La creatividad es el corazón de lo que hacemos. Nos aseguramos de ofrecer soluciones únicas y originales.</li>
        </ul>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Únete a Nuestro Equipo</h2>
        <p>Si compartes nuestra pasión por el marketing, la publicidad y el diseño, ¡nos encantaría contar contigo! Estamos siempre buscando talento para unirse a nuestro equipo.</p>
        <a href="{{ route('empleos') }}" class="bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 mt-4 inline-block">Ver Ofertas de Empleo</a>
    </div>
</div>
@endsection
