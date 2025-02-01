@extends('layouts.app')

@section('title', 'Política de Cookies')

@section('contenido')
<div class="max-w-7xl mx-auto py-12 px-6">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-extrabold text-amber-900">Política de Cookies</h1>
        <p class="text-lg text-cyan-600 mt-4">En nuestra página, utilizamos cookies para mejorar la experiencia del usuario. Aquí te explicamos cómo las usamos y cómo puedes gestionarlas.</p>
    </div>

    <div class="prose lg:prose-xl mx-auto">
        <h2 class="text-2xl font-semibold text-white-900">¿Qué son las cookies?</h2>
        <p>Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo cuando visitas un sitio web. Son ampliamente utilizadas para que los sitios web funcionen de manera eficiente y para proporcionar información a los propietarios del sitio.</p>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">¿Por qué utilizamos cookies?</h2>
        <p>Utilizamos cookies por diversas razones, como mejorar la funcionalidad de la página, personalizar la experiencia del usuario, analizar el tráfico web y ofrecerte contenido relevante. Algunas cookies son esenciales para que el sitio funcione correctamente.</p>

        <h3 class="text-xl font-semibold text-white-900 mt-4">Tipos de cookies que utilizamos</h3>
        <ul class="list-disc ml-6">
            <li><strong>Cookies necesarias:</strong> Estas cookies son esenciales para que el sitio web funcione correctamente, como las que permiten navegar entre páginas.</li>
            <li><strong>Cookies de rendimiento:</strong> Recopilan información sobre cómo los usuarios interactúan con el sitio web, lo que nos ayuda a mejorar la experiencia de navegación.</li>
            <li><strong>Cookies de funcionalidad:</strong> Permiten recordar tus preferencias y configuraciones en futuras visitas.</li>
            <li><strong>Cookies de publicidad:</strong> Usamos estas cookies para mostrarte anuncios relevantes según tu actividad de navegación.</li>
        </ul>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">¿Cómo puedes gestionar las cookies?</h2>
        <p>La mayoría de los navegadores web permiten controlar las cookies a través de la configuración de preferencias. Puedes bloquear o eliminar cookies a través de la configuración de tu navegador. Ten en cuenta que si desactivas las cookies, es posible que algunas funciones de nuestro sitio no funcionen correctamente.</p>

        <h3 class="text-xl font-semibold text-white-900 mt-4">Cómo gestionar las cookies en diferentes navegadores:</h3>
        <ul class="list-disc ml-6">
            <li><strong>Google Chrome:</strong> Ve a la configuración de Chrome > Configuración avanzada > Privacidad y seguridad > Configuración de cookies.</li>
            <li><strong>Mozilla Firefox:</strong> Ve a Opciones > Privacidad y seguridad > Cookies y datos del sitio.</li>
            <li><strong>Safari:</strong> Ve a Preferencias > Privacidad > Cookies y datos de sitios web.</li>
        </ul>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Cambios en nuestra Política de Cookies</h2>
        <p>Podemos actualizar nuestra Política de Cookies de vez en cuando. Cualquier cambio se publicará en esta página, y la fecha de la última actualización se indicará al final de este documento.</p>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Contacto</h2>
        <p>Si tienes preguntas sobre nuestra Política de Cookies, no dudes en ponerte en contacto con nosotros a través de nuestro <a href="{{ route('contacto') }}" class="text-blue-500">formulario de contacto</a>.</p>
    </div>

    <div class="mt-12 text-center">
        <p class="text-sm text-gray-600">Última actualización: Enero 2024</p>
    </div>
</div>
@endsection
