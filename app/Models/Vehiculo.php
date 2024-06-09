<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function papaletas()
    {
        return $this->hasMany(Papeleta::class);
    }

    public function propietario()
    {
        return $this->belongsTo(Propietario::class);
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function tipoVehiculo()
    {
        return $this->belongsTo(TipoVehiculo::class);
    }

    public function tipoCarroceria()
    {
        return $this->belongsTo(TipoCarroceria::class);
    }

}
