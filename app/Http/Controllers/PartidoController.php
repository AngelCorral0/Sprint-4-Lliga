<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Partido;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    public function index()
    {
        return view('partidos.index', ['partidos' => Partido::get()]);
    }
    
    public function create()
    {
        return view('partidos.create',  ['equipos' => Equipo::get()]);
    }
    
    public function edit(Partido $partido)
    {
        return view('partdios.edit', ['partido' => $partido]);
    }
    
    public function show(Partido $partido)
    {
        return view('partidos.show', ['partido' => $partido]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'equipo_local' => ['required'],
            'equipo_visitante' => ['required'],
            'fecha_partido' => ['required']

        ]);

        $partido = new Partido;
        $partido->equipo_local = $request->equipo_local;
        $partido->equipo_visitante = $request->equipo_visitante;
        $partido->fecha_partido = $request->fecha_partido;
        $partido->save();
        session()->flash('status','Partido Creado!');
        return to_route('partidos.index');
    }

    public function update(Request $request, Partido $partido)
    {
        $request->validate([
            'goles_local' => ['required','integer','between:0,20'],
            'goles_visitante' => ['required','integer','between:0,20']
        ]);

       
        $partido->goles_local = $request->input('goles_local');
        $partido->goles_visitante = $request->input('goles_visitante');
        $partido->save();

        session()->flash('status', 'Resultado Actualizado!');

        return to_route('partidos.show', $partido);
    }

    public function delete(Partido $partido)
    {
        $partido->delete();
        return to_route('partidos.index')->with('status', 'Partido eliminado');
    }
}
