@extends('layouts.app')

@section('title', 'Publicidad')

@section('contenido')
<div class="max-w-7xl mx-auto py-12 px-6">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-extrabold text-amber-900">Publicidad</h1>
        <p class="text-lg text-cyan-600 mt-4">Descubre nuestras soluciones de publicidad para impulsar tu marca y llegar a más clientes.</p>
    </div>

    <div class="prose lg:prose-xl mx-auto">
        <h2 class="text-2xl font-semibold text-white-900">¿Por qué elegirnos para tu publicidad?</h2>
        <p>En nuestra agencia, ofrecemos estrategias de publicidad personalizadas para ayudarte a alcanzar tus objetivos comerciales. Ya sea que busques aumentar tu visibilidad en línea, atraer más clientes o mejorar tu posicionamiento, tenemos las soluciones adecuadas para ti.</p>
        
        <h2 class="text-2xl font-semibold text-white-900 mt-6">Nuestros Servicios de Publicidad</h2>
        <p>Ofrecemos una variedad de servicios diseñados para satisfacer tus necesidades de publicidad. Entre ellos se incluyen:</p>
        <ul class="list-disc ml-6">
            <li><strong>Publicidad Digital:</strong> Anuncios en redes sociales, Google Ads, campañas de remarketing.</li>
            <li><strong>Publicidad en Medios Tradicionales:</strong> Publicidad en televisión, radio y prensa.</li>
            <li><strong>Publicidad en Sitios Web:</strong> Banners, anuncios contextuales y marketing de contenidos.</li>
            <li><strong>Publicidad en Eventos:</strong> Patrocinio de eventos, activaciones y stands publicitarios.</li>
        </ul>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Beneficios de la Publicidad con Nosotros</h2>
        <p>Al trabajar con nosotros, disfrutarás de los siguientes beneficios:</p>
        <ul class="list-disc ml-6">
            <li><strong>Estrategias Personalizadas:</strong> Cada campaña de publicidad es adaptada a tus objetivos y tu público objetivo.</li>
            <li><strong>Alcance Global:</strong> Llega a audiencias locales y globales a través de nuestros canales publicitarios.</li>
            <li><strong>Medición de Resultados:</strong> Realizamos un seguimiento detallado de los resultados de la campaña, garantizando que obtienes el mejor retorno de inversión (ROI).</li>
            <li><strong>Creatividad:</strong> Nuestro equipo de creativos diseñará anuncios que impacten a tu audiencia.</li>
        </ul>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">¿Cómo Funciona?</h2>
        <p>El proceso para trabajar con nosotros es simple y transparente. Aquí te mostramos los pasos:</p>
        <ol class="list-decimal ml-6">
            <li><strong>Consulta Inicial:</strong> Agenda una reunión con nosotros para entender tus necesidades publicitarias.</li>
            <li><strong>Estrategia Personalizada:</strong> Creamos una propuesta de campaña adaptada a tus objetivos.</li>
            <li><strong>Desarrollo de la Campaña:</strong> Diseñamos y lanzamos tus anuncios en los canales acordados.</li>
            <li><strong>Monitoreo y Optimización:</strong> Realizamos un seguimiento constante y optimizamos la campaña para obtener los mejores resultados.</li>
        </ol>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Testimonios de Nuestros Clientes</h2>
        <div class="space-y-4">
            <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                <p class="text-gray-700 italic">"Gracias a la campaña de publicidad digital, aumentamos nuestras ventas en un 40% en solo 3 meses. ¡Recomiendo totalmente su servicio!"</p>
                <p class="mt-2 text-right font-semibold text-white-900">— Juan Pérez, CEO de Tienda XYZ</p>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                <p class="text-gray-700 italic">"Las estrategias de publicidad en medios tradicionales nos ayudaron a llegar a una audiencia mucho más amplia, ¡los resultados fueron increíbles!"</p>
                <p class="mt-2 text-right font-semibold text-white-900">— María López, Directora de Marketing, Agencia ABC</p>
            </div>
        </div>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Contáctanos para Comenzar</h2>
        <p>Si estás listo para llevar tu marca al siguiente nivel con publicidad efectiva, no dudes en contactarnos. ¡Nos encantaría ayudarte a crecer!</p>
        <div class="mt-6">
            <a href="{{ route('contacto') }}" class="bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700">Contáctanos Ahora</a>
        </div>
    </div>
</div>
@endsection
