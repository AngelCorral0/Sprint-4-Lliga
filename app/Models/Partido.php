<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Equipo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Partido extends Model
{
    use HasFactory;

    public function equipo_local()
    {
        return $this->belongsTo(Equipo::class, 'equipo_loca_id');
    
    }
    public function equipo_visitante()
    {
        return $this->belongsTo(Equipo::class, 'equipo_visitante_id');
    }
}

