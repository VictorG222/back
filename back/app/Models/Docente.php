<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{

    protected $primaryKey = 'matricula';
    protected $keyType = 'string';
    public $incrementing = false;
    use HasFactory;
}
