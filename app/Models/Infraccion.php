<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraccion extends Model
{
    use HasFactory;

    public function papaletas ()
    {
        return $this->hasMany(Papeleta::class);
    }
}
