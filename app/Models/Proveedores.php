<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    //
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
