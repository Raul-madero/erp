<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function detalleRequisicion()
    {
        return $this->hasMany(DetalleRequisicion::class);
    }
}
