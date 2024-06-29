<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model {
    use HasFactory;

    // Especificar el nombre de la tabla que el modelo debe usar
    protected $table = 'contactos';

    // Definir campos rellenables
    protected $fillable = ['nombre', 'correo', 'asunto', 'mensaje'];
}

