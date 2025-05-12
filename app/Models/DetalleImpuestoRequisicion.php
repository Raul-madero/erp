<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleImpuestoRequisicion extends Model
{
    //
    public function requisiciones()
    {
        return $this->belongsTo(Requisiciones::class);
    }
}
