<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    public function requisiciones()
    {
        return $this->hasMany(Requisiciones::class)->selected('id', 'nombre');
    }
}
