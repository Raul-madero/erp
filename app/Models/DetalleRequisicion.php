<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleRequisicion extends Model
{
    //
    public function requisiciones()
    {
        return $this->belongsTo(Requisiciones::class);
    }
    public function productos()
    {
        return $this->hasMany(Product::class);
    }
}
