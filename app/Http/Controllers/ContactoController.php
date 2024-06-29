<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto; // Importa el modelo Contacto
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeRecibido; // Asegúrate de tener esta clase de Mailable

class ContactoController extends Controller
{
    /**
     * Muestra el formulario de contacto.
     */
    public function create()
    {
        return view('contacto.create'); // Asegúrate de tener esta vista
    }

    /**
     * Procesa y guarda los datos del formulario de contacto.
     */
    public function store(Request $request)
    {
        // Valida los datos recibidos en el formulario
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255',
            'asunto' => 'required|string|max:255',
            'mensaje' => 'required|string',
        ]);

        // Guarda los datos en la base de datos
        $contacto = new Contacto();
        $contacto->nombre = $validatedData['nombre'];
        $contacto->correo = $validatedData['correo'];
        $contacto->asunto = $validatedData['asunto'];
        $contacto->mensaje = $validatedData['mensaje'];
        $contacto->save();

        // Envía un correo con los datos del formulario
        Mail::to('destinatario@example.com')->send(new MensajeRecibido($contacto));

        // Redirige a la página de contacto con un mensaje de éxito
        return redirect()->route('contacto.create')->with('success', 'Mensaje enviado correctamente');
    }
}
