@extends('layouts.app')

@section('title', 'Política de Privacidad')

@section('contenido')
<div class="max-w-7xl mx-auto py-12 px-6">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-extrabold text-amber-900">Política de Privacidad</h1>
        <p class="text-lg text-cyan-600 mt-4">Esta página describe cómo recopilamos, usamos y protegemos tu información personal. Al utilizar nuestro sitio, aceptas las prácticas descritas en esta política.</p>
    </div>

    <div class="prose lg:prose-xl mx-auto">
        <h2 class="text-2xl font-semibold text-white-900">¿Qué Información Recopilamos?</h2>
        <p>Recopilamos información personal que nos proporcionas al registrarte en nuestro sitio, completar formularios o realizar compras. Esta información puede incluir:</p>
        <ul class="list-disc ml-6">
            <li>Nombre y apellidos</li>
            <li>Dirección de correo electrónico</li>
            <li>Dirección postal</li>
            <li>Información de pago</li>
            <li>Información sobre tu actividad en el sitio web</li>
        </ul>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">¿Cómo Usamos Tu Información?</h2>
        <p>Usamos la información que recopilamos para proporcionarte los servicios que solicitas, mejorar tu experiencia en el sitio web y comunicarte contigo. Esto incluye:</p>
        <ul class="list-disc ml-6">
            <li>Procesar pedidos y pagos</li>
            <li>Personalizar tu experiencia en el sitio</li>
            <li>Enviarte correos electrónicos de confirmación o actualizaciones</li>
            <li>Mejorar el funcionamiento y la seguridad del sitio web</li>
            <li>Realizar análisis y estudios sobre el uso del sitio</li>
        </ul>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Protección de Tu Información</h2>
        <p>Nos comprometemos a proteger tu información personal. Implementamos medidas de seguridad técnicas y organizativas para evitar el acceso no autorizado, la alteración, divulgación o destrucción de tus datos personales. Sin embargo, ningún sistema de transmisión de datos a través de Internet es 100% seguro, por lo que no podemos garantizar la seguridad absoluta.</p>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Cookies y Tecnologías Similares</h2>
        <p>Utilizamos cookies y tecnologías similares para mejorar la experiencia del usuario y analizar el tráfico web. Puedes leer más sobre el uso de cookies en nuestra <a href="{{ route('politica-de-cookies') }}" class="text-blue-500">Política de Cookies</a>.</p>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">¿Compartimos Tu Información?</h2>
        <p>No compartimos tu información personal con terceros, excepto en los siguientes casos:</p>
        <ul class="list-disc ml-6">
            <li>Cuando sea necesario para procesar transacciones o pedidos (por ejemplo, con proveedores de pagos o servicios de envío).</li>
            <li>Cuando sea requerido por la ley o para proteger nuestros derechos legales.</li>
            <li>Cuando contratamos a proveedores de servicios para que realicen funciones en nuestro nombre, como el análisis de datos o el soporte al cliente.</li>
        </ul>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Tus Derechos</h2>
        <p>Tienes derecho a acceder, corregir, eliminar o restringir el uso de tu información personal. Si deseas ejercer estos derechos, puedes ponerte en contacto con nosotros a través de nuestro <a href="{{ route('contacto') }}" class="text-blue-500">formulario de contacto</a>.</p>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Retención de Datos</h2>
        <p>Conservamos tu información personal mientras sea necesaria para cumplir con los fines para los cuales fue recopilada, o mientras estés usando nuestros servicios. Si decides cancelar tu cuenta, eliminaremos tu información personal de acuerdo con nuestras políticas internas.</p>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Enlaces a Terceros</h2>
        <p>Este sitio web puede contener enlaces a otros sitios. No nos hacemos responsables de las prácticas de privacidad de estos sitios. Te recomendamos que leas las políticas de privacidad de los sitios externos que visitas.</p>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Cambios en la Política de Privacidad</h2>
        <p>Podemos actualizar esta política de privacidad de vez en cuando. Cualquier cambio será publicado en esta página, y la fecha de la última actualización se indicará al final de este documento.</p>

        <h2 class="text-2xl font-semibold text-white-900 mt-6">Contacto</h2>
        <p>Si tienes alguna pregunta sobre nuestra Política de Privacidad o sobre el manejo de tus datos personales, no dudes en ponerte en contacto con nosotros a través de nuestro <a href="{{ route('contacto') }}" class="text-blue-500">formulario de contacto</a>.</p>
    </div>

    <div class="mt-12 text-center">
        <p class="text-sm text-gray-600">Última actualización: Noviembre 2024</p>
    </div>
</div>
@endsection
