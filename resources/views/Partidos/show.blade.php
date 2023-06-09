@extends('layouts.app')
@section('title', 'Partido')


@section('content')
<section class="min-h-screen bg-white ">
    <div class="container px-6 py-1 mx-auto">
        <div class="mt-20 inline-block min-w-full shadow rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-400 text-center text-xs font-semibold text-white-600 uppercase tracking-wider">
                            Local
                        </th>
                        <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-400 text-center text-xs font-semibold text-white-600 uppercase tracking-wider">
                            |
                        </th>
                        <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-400 text-center text-xs font-semibold text-white-600 uppercase tracking-wider">
                            -
                        </th>
                        <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-400 text-center text-xs font-semibold text-white-600 uppercase tracking-wider">
                            |
                        </th>
                        <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-400 text-center text-xs font-semibold text-white-600 uppercase tracking-wider">
                            Visitante
                        </th>
                        <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-400 text-center text-xs font-semibold text-white-600 uppercase tracking-wider">
                            Fecha
                        </th>
                        <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-400 text-center text-xs font-semibold text-white-600 uppercase tracking-wider">
                            Estadio
                        </th>
                        <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-400 text-center text-xs font-semibold text-white-600 uppercase tracking-wider">
                            Vista
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <a href="{{ route('partidos.show', $partido) }}">
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                                <div class="flex items-center">
                                    
                                    <div class="ml-3">
                                        <a href="{{ route('equipos.show', $partido->equipo_local_id) }}" class="text-gray-900 whitespace-no-wrap">
                                            {{ $partido->equipo_local->nombre}}
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap text-center">{{ $partido->goles_local }}</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p>VS</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap text-center">
                                    {{ $partido->goles_visitante }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                                <div class="flex items-center float-right">
                                    <div class="mr-3">
                                        <a href="{{ route('equipos.show', $partido->equipo_visitante_id) }}" class="text-gray-900 whitespace-no-wrap text-right">
                                            {{ $partido->equipo_visitante->nombre }}
                                        </a>
                                    </div>
                                    
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap text-center">{{ $partido->fecha_partido }}</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap text-center">{{ $partido->equipo_local->estadio}}</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <a href="{{ route('partidos.show', $partido) }}">
                                    <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </a>
                </tbody>
            </table>
        </div>
        <div class="flex justify-center">
            <a href="{{ route('partidos.edit', $partido )}}" type="button" class="text-white bg-orange-400 hover:bg-orange-500  font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Actualizar resultado </a>
            <form method="post" action="{{ route('partidos.delete', $partido )}}">
                @csrf @method('delete')
                <button type="submit" class="text-white bg-red-400 hover:bg-red-500  font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Eliminar </button>
            </form>
            <a href="{{ route('partidos.index') }}" class="text-white bg-blue-400 hover:bg-blue-500  font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Atrás</a>
            </div>
    </div>
</section>
@endsection