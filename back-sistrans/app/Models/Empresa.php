<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function padrones()
    {
        return $this->hasMany(Padron::class);
    }

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }

    public function tipoVehiculo()
    {
        return $this->belongsTo(TipoVehiculo::class);
    }
    public function tipoServicio()
    {
        return $this->belongsTo(TipoServicio::class);
    }

    public function ruta()
    {
        return $this->belongsTo(Ruta::class);
    }
}
