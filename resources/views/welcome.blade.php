@extends('layouts.app')

@section('titulo', 'Pagina principal')

@section('contenido')
    <div class="hero min-h-screen" style="background-image: url('{{ asset('Imagenes/pagina-de-inicio.png') }}');">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content text-center">
                <div class="max-w-md">
                     <h1 class="mb-5 text-5xl font-bold">Bienvenidos a ATHSystem</h1>
                     <p class="mb-5">
                    En ATHSystem, estamos aquí para ayudarte a dar el siguiente paso en tecnología. Desde soporte técnico
                    especializado hasta venta de equipos, brindamos las herramientas y soluciones que tu empresa necesita
                    para crecer.
                     </p>
                     <a href="{{ route('register') }}">
                        <button class="btn btn-primary">Registrate es Gratis</button>
                     </a>
                     
                </div>
        </div>
    </div>

@endsection
