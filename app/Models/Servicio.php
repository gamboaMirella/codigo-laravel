<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    
    //Especificar nombre de la tabla que el modelo debe usar
    protected $table='servicios';

    //Definir campos rellenables
    protected $fillable=['titulo','descripcion'];
}
