<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCarroceria extends Model
{
    use HasFactory;

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
