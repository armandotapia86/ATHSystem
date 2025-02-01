<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //controlador de pied e pagina 
    public function servicios()
    {
        return view('pages.servicios');
    }

    public function acercaDeNosotros()
    {
        return view('pages.acerca-de-nosotros');
    }

    public function diseno()
    {
        return view('pages.diseno');
    }

    public function marketing()
    {
        return view('pages.marketing');
    }

    public function publicidad()
    {
        return view('pages.publicidad');
    }

    public function quienesSomos()
    {
        return view('pages.quienes-somos');
    }

    public function contacto()
    {
        return view('pages.contacto');
    }

    public function empleos()
    {
        return view('pages.empleos');
    }

    public function condicionesDeUso()
    {
        return view('pages.condiciones-de-uso');
    }

    public function politicaDePrivacidad()
    {
        return view('pages.politica-de-privacidad');
    }

    public function politicaDeCookies()
    {
        return view('pages.politica-de-cookies');
    }
}
