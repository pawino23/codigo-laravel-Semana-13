<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeRecibido;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function store(Request $request)
    {
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

        Mail::to('t052700920@unitru.edu.pe')->send(new MensajeRecibido($mensaje));

        return 'Mensaje Enviado correctamente';
    }
}