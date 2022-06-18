<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemaVentas extends Model
{
    //use HasFactory;
    protected $table = 'sistema_ventas';
    public $timestamps = false;
    public $fillable = ['Nombre_Producto','Cantidad','Foto'];
}
