@extends('layouts.app')
@section('title', 'Update game')

@section('content')

<div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
        </div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <div class="max-w-md mx-auto">
                <div>
                    <h1 class="text-2xl font-semibold">Actualiza el resultado!</h1>
                </div>
                <form action="{{ route('partidos.update', $juego) }}" method="post">
                    @csrf
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="relative">
                                <input required autocomplete="off" id="goles_local" name="goles_local" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Equipo" />
                                <label for="goles_local" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">{{ $partido->goles_local->nombre }} goles:</label>
                                @error('goles_local')
                                <br>
                                <small class="text-red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="relative">
                                <input required autocomplete="off" id="goles_visitante" name="goles_visitante" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Entrenador" />
                                <label for="goles_visitante" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">{{ $partido->goles_visitante->nombre }} goles:</label>
                                @error('goles_visitante')
                                <br>
                                <small class="text-red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="relative">
                                <button type="submit" class=" bg-blue-500 text-white rounded-md px-2 py-1">Actualizar</button>
                            </div>
                        </div>
                </form>
                <a href="{{ route('partidos.show', $juego) }}" class="bg-purple-500 text-white rounded-md px-2 py-1">
                    Cancelar
                </a>
            </div>
        </div>
    </div>
</div>

@endsection