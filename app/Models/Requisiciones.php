<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Requisiciones extends Model
{
    //

    protected $fillable = [
        'fecha',
        'fecha_requiere',
        'fecha_entrega',
        'id_almacen',
        'id_departamento',
        'id_user',
        'id_proveedores',
        'estado'
    ];
    public function almacen()
    {
        return $this->belongsTo(Almacen::class)->selected('id', 'nombre');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }

    public function user()
    {
        return $this->belongsTo(User::class)->selected('id', 'name');
    }
    public function proveedores()
    {
        return $this->belongsTo(Proveedores::class)->selected('id', 'nombre');
    }
}
