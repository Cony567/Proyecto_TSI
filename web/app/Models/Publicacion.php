<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;
    protected $table = 'publicaciones';
    protected $primarykey = 'cod_publicacion';
    //public $incrementing = true;
    protected $attributes = [
        'cod_publicacion' => 0,
    ];
    
}
