<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CarritoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Ruta para la página de inicio
Route::view('/', 'welcome')->name('home');

// Rutas públicas
Route::get('/servicios', [PagesController::class, 'servicios'])->name('servicios');
Route::get('/acerca-de-nosotros', [PagesController::class, 'acercaDeNosotros'])->name('acerca-de-nosotros');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    // Productos (CRUD)
    Route::resource('productos', ProductoController::class);

    // Perfil del usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dashboard protegido
Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas del pie de página
Route::get('/diseno', [PagesController::class, 'diseno'])->name('diseno');
Route::get('/marketing', [PagesController::class, 'marketing'])->name('marketing');
Route::get('/publicidad', [PagesController::class, 'publicidad'])->name('publicidad');
Route::get('/quienes-somos', [PagesController::class, 'quienesSomos'])->name('quienes-somos');
Route::get('/contacto', [PagesController::class, 'contacto'])->name('contacto');
Route::get('/empleos', [PagesController::class, 'empleos'])->name('empleos');
Route::get('/condiciones-de-uso', [PagesController::class, 'condicionesDeUso'])->name('condiciones-de-uso');
Route::get('/politica-de-privacidad', [PagesController::class, 'politicaDePrivacidad'])->name('politica-de-privacidad');
Route::get('/politica-de-cookies', [PagesController::class, 'politicaDeCookies'])->name('politica-de-cookies');

// Ruta para mostrar el formulario
Route::get('/formulario', function () {
    return view('pages.formulario'); // Asegúrate de que el archivo esté en resources/views/pages/formulario.blade.php
});

Route::post('/enviar-formulario', function (Request $request) {
    $datos = $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|email',        
        'ciudad' => 'require|string',
        'telefono' =>'require|regex:/^\d{10}$/', // Valida 10 dígitos
        'direccion' => 'required|string|max:255',
        'mensaje' => 'required|string'
    ]);

    // Aquí puedes guardar los datos en la base de datos o enviar un correo.
    return back()->with('success', 'Formulario enviado correctamente.');
});

Route::middleware('auth')->group(function () {

    Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito'); // Para mostrar el carrito
    Route::post('/carrito/agregar', [CarritoController::class, 'agregar'])->name('carrito.agregar'); // Para agregar productos
    Route::post('/carrito/eliminar', [CarritoController::class, 'eliminar'])->name('carrito.eliminar'); // Para eliminar productos
    Route::post('/carrito/actualizar', [CarritoController::class, 'actualizar'])->name('carrito.actualizar'); // Para actualizar cantidades
    Route::post('/carrito/procesar-compra', [CarritoController::class, 'procesarCompra'])->name('carrito.procesarCompra'); // Para procesar la compra
});


// Rutas de autenticación
require __DIR__ . '/auth.php';

