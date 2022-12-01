<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;



    protected $fillable =[
        'nombre',
        'clave',
        'programa_id',
        'estados_globales',
    ];

    public function programa(){
        return $this->belongsTo(Programa::class, 'programa_id', 'id');
    }


}
