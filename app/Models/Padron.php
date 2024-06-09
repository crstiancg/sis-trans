<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Padron extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    public function tucs()
    {
        return $this->hasMany(Tuc::class);
    }
    
    public function empresa ()
    {
        return $this->belongsTo(Empresa::class);
    }

}
