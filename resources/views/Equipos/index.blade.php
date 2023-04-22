@extends('layouts.app')

@section('title', 'Home')
@section('meta-description', 'Home meta description')

@section('content')
    <!-- component -->
@section('content')
<section class="min-h-screen bg-white ">
    <div class="container px-6 py-10 mx-auto">
        <div class="flex justify-center space-between">
            <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl ">Lista de equipos:</h1>
            
        </div>
        <a href="{{ route('equipos.create') }}">
            <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                Crea un equipo!
            </button>
        </a>
        @foreach ($equipos as $equipo)
        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
            <div class="lg:flex">
                <a href="{{ route('equipos.show', $equipo) }}">
                </a>
                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="{{ route('equipos.show', $equipo) }}" class="text-4xl font-semibold text-gray-800 hover:underline  ">
                        {{ $equipo->nombre }}
                    </a>
                    <span class="text-sm text-gray-500 ">Entrenador: {{ $equipo->entrenador }}</span>
                    <span class="text-sm text-gray-500 ">Estadio: {{ $equipo->estadio }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
