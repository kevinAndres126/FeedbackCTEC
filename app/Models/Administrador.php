<?php

namespace CTEC\Models;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'administrador';
    protected $fillable = ['nombre_usuario', 'contraseña'];

    public function reportes(){
        return $this->hasMany(Reporte::Class);
    }

    public function instalaciones(){
        return $this->hasMany(Instalacion::Class);
    }

    public function evaluaciones(){
        return $this->hasMany(Evaluacion::Class);
    }
}
