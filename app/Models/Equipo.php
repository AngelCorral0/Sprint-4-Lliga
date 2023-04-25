<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Equipo extends Model
{
    use HasFactory;

    public function partidos_local()
    {
        return $this->hasMany(Partido::class, 'equipo_local');
    }
    public function partidos_visitante()
    {
        return $this->hasMany(Partido::class, 'equipo_visitante');
    }
}
