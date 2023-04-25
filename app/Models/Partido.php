<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Equipo;

class Partido extends Model
{
    use HasFactory;

    public function equipo_local()
    {
        return $this->belongsTo(Equipo::class, 'equipo_local');
    
    }
    public function equipo_visitante()
    {
        return $this->belongsTo(Equipo::class, 'equipo_visitante');
    }
}

