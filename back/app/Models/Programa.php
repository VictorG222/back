<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;


    protected $fillable =[
        'nombre',
        'descripcion',
        'clave',
        'areas_id',
        'estados_globales',
    ];

    public function proyectos(){
        return $this->hasMany(Proyecto::class, 'programa_id', 'id');
    }

}
