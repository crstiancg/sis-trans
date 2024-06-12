<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuc extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function padron()
    {
        return $this->belongsTo(Padron::class);
    }

    public function vehiculo()
    {
        return $this->hasOne(Vehiculo::class);
    }
}
