<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    //
    protected $fillable = [
        'nombre',
        'fecha_recepcion',
        'id_producto'
    ];
    public function requisiciones()
    {
        return $this->hasMany(Requisiciones::class);
    }
    public function productos()
    {
        return $this->hasMany(Product::class);
    }
}
