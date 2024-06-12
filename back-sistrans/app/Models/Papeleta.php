<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Papeleta extends Model
{
    use HasFactory;

    public function recibos()
    {
        return $this->hasMany(Recibo::class);
    }

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }
}
