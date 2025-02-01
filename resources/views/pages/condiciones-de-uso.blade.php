@extends('layouts.app')

@section('title', 'Condiciones de uso')

@section('contenido')
<div class="max-w-7xl mx-auto py-12 px-6">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-extrabold text-amber-900">Condiciones de Uso</h1>
        <p class="text-lg text-cyan-600 mt-4">Por favor, lee cuidadosamente estas condiciones antes de usar nuestros servicios.</p>
    </div>

    <div class="bg-white shadow-md rounded-lg p-8">
        <div class="space-y-8">
            <section>
                <h2 class="text-2xl font-semibold text-gray-900">1. Aceptación de los Términos</h2>
                <p class="text-gray-700 mt-2">
                    Al acceder o utilizar nuestros servicios, aceptas cumplir con estas Condiciones de Uso y con nuestra Política de Privacidad. Si no estás de acuerdo con alguno de estos términos, te recomendamos no utilizar nuestros servicios.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-gray-900">2. Uso de los Servicios</h2>
                <p class="text-gray-700 mt-2">
                    Nuestros servicios están disponibles solo para usuarios registrados. Debes asegurarte de que tu cuenta esté protegida y no compartir tu información personal con terceros. Cualquier uso indebido de los servicios será motivo de suspensión de la cuenta.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-gray-900">3. Privacidad y Protección de Datos</h2>
                <p class="text-gray-700 mt-2">
                    La privacidad de nuestros usuarios es una prioridad. Recopilamos y procesamos los datos personales conforme a nuestra Política de Privacidad. Asegúrate de leerla antes de utilizar nuestros servicios.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-gray-900">4. Propiedad Intelectual</h2>
                <p class="text-gray-700 mt-2">
                    Todo el contenido de nuestro sitio web, incluyendo textos, gráficos, logotipos, imágenes y software, está protegido por derechos de autor y otras leyes de propiedad intelectual. No puedes copiar, reproducir o distribuir este contenido sin nuestro permiso expreso.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-gray-900">5. Modificaciones de los Términos</h2>
                <p class="text-gray-700 mt-2">
                    Nos reservamos el derecho de modificar estas Condiciones de Uso en cualquier momento. Te notificaremos cualquier cambio mediante un aviso en nuestro sitio web. Tu uso continuo de nuestros servicios después de cualquier cambio implica tu aceptación de los nuevos términos.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-gray-900">6. Limitación de Responsabilidad</h2>
                <p class="text-gray-700 mt-2">
                    No nos hacemos responsables por daños directos, indirectos, incidentales o consecuentes que puedan surgir del uso o la imposibilidad de usar nuestros servicios, salvo que se indique lo contrario en la legislación aplicable.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-gray-900">7. Ley Aplicable</h2>
                <p class="text-gray-700 mt-2">
                    Estas Condiciones de Uso se rigen por las leyes del país en el que operamos. Cualquier disputa relacionada con el uso de nuestros servicios será resuelta en los tribunales correspondientes.
                </p>
            </section>

            <div class="mt-8 text-center">
                <a href="{{ route('home') }}" class="inline-block px-6 py-3 text-white bg-blue-500 rounded-md shadow-md hover:bg-blue-600">
                    Regresar al inicio
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
