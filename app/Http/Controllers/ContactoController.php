<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeRecibido;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function store(Request $request)
    {
        // Valida y obtén los datos del formulario
        $mensaje = $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required|min:3',
        ], [
            'nombre.required' => 'Ingresa tu nombre',
            'email.required' => 'Ingresa tu correo',
            'asunto.required' => 'Ingresa un asunto',
            'mensaje.required' => 'Ingresa el mensaje'
        ]);

        // Guarda los datos en la base de datos usando el modelo Contacto
        Contacto::create([
            'nombre' => $mensaje['nombre'],
            'email' => $mensaje['email'],
            'asunto' => $mensaje['asunto'],
            'mensaje' => $mensaje['mensaje'],
        ]);

        // Envía el correo electrónico
        Mail::to('t052700920@unitru.edu.pe')->send(new MensajeRecibido($mensaje));

        // Retorna una respuesta al usuario
        return 'Mensaje Enviado correctamente';
    }
}