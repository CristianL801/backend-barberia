<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'nombre_cliente',
        'telefono',
        'fecha_cita',
        'servicio',
        'comentarios'
    ];
}