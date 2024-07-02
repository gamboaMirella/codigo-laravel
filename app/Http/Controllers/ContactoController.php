<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store(Request $request)
    {
        // Validar la solicitud con reglas y mensajes personalizados
        $mensaje = $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required|min:3',
        ], [
            'nombre.required' => 'Ingresa tu nombre',
            'email.required' => 'Ingresa tu correo',
            'email.email' => 'El correo no es válido',
            'asunto.required' => 'Ingresa un asunto',
            'mensaje.required' => 'Ingresa el mensaje',
            'mensaje.min' => 'El mensaje debe tener al menos 3 caracteres',
        ]);

        // Enviar el correo electrónico
        Mail::to('mgamboav@unitru.edu.pe')->send(new MensajeRecibido(
            $mensaje['nombre'],
            $mensaje['email'],
            $mensaje['asunto'],
            $mensaje['mensaje']
        ));

        // Aquí puedes manejar la lógica después de la validación exitosa
        return back()->with('success', 'Datos validados y correo enviado correctamente');
    }
}
