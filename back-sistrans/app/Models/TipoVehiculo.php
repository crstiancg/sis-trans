<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    use HasFactory;

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }

    public function empresas()
    {
        return $this->hasMany(Empresa::class);
    }

}
