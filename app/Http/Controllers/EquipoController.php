<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Partido;

class EquipoController extends Controller
{
    public function index()
    {
        return view('equipos.index', ['equipos' => Equipo::get()]);
    }
    
    public function create()
    {
        return view('equipos.create');
    }
    
    public function edit(Equipo $equipo)
    {
        return view('equipos.edit', ['equipo' => $equipo]);
    }
    
    public function show(Equipo $equipo)
    {
        $partidos = $equipo->partidos_local;
        foreach($equipo->partidos_visitante as $partido);
        $partidos[]= $partido;

        return view('equipos.show', ['equipo' => $equipo, 'partidos' =>$partidos]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'max:20'],
            'entrenador' => ['required', 'max:20'],
            'estadio' => ['required', 'max:20']

        ]);

        $equipo = new Equipo;
        $equipo->nombre = $request->input('nombre');
        $equipo->entrenador = $request->input('entrenador');
        $equipo->estadio = $request->input('estadio');
        $equipo->save();
        session()->flash('status', 'Equipo Creado!');
        
        
        return to_route('equipos.index');
    }

    public function update(Request $request, Equipo $equipo)
    {
        $request->validate([
            'nombre' => ['required'],
            'entrenador' => ['required'],
            'estadio' => ['required']

        ]);

       
        $equipo->nombre = $request->input('nombre');
        $equipo->entrenador = $request->input('entrenador');
        $equipo->estadio = $request->input('estadio');
        $equipo->save();

        session()->flash('status', 'Equipo Actualizado!');

        return to_route('equipos.index');
    }

    public function delete(Equipo $equipo)
    {
        $equipo->delete();
    
        return to_route('equipos.index')->with('status', 'Equipo eliminado');
    }

}
