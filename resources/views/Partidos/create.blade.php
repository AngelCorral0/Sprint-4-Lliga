@extends('layouts.app')
@section('title', 'Crear partido')



@section('content')
<!-- component -->
<body class="font-mono bg-gray-800">
		<!-- Container -->
		<div class="container mx-auto">
			<div class="flex justify-center px-12 my-24">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
					<div
						class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
						style="background-image: url('https://images.unsplash.com/photo-1504016798967-59a258e9386d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80')"
					></div>
					<!-- Col -->
					<div class="w-full lg:w-7/12 bg-white p-10 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-4xl text-center">Crea un nuevo partido</h3>
						<form action="{{ route('partidos.store') }}" method="post">
                            @csrf
                            <div class="divide-y divide-gray-200">
                                <div class="py-12 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                    <div class="relative" >
                                        <label class="text-black" for="equipo_local">Equipo local:</label>
                                        <select name="equipo_local" id="equipo_local">
                                        @foreach($equipos as $equipo)
                                            <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                                        @endforeach
                                        </select>
                                        @error('equipo_local')
                                            <br>
                                            <small class="text-red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="relative space-y-4">
                                        <label class="text-black" for="equipo_visitante">Equipo Visitante:</label>
                                        <select name="equipo_visitante" id="equipo_visitante">
                                        @foreach($equipos as $equipo)
                                            <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                                        @endforeach
                                        </select>
                                        @error('equipo_visitante')
                                            <br>
                                            <small class="text-red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="relative py-6 ">
                                        <input required autocomplete="off" id="fecha_partido" name="fecha_partido" type="date" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="01-01-2001" />
                                        <label class="absolute left-0 top-2.5 text-black text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Fecha</label>
                                        @error('fecha_partido')
                                            <br>
                                            <small class="text-red">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="relative py-2">
                                        <button type="submit" class="bg-blue-500 text-white rounded-md px-2 py-1">Crea un nuevo partido</button>
                                        <a href="{{route('partidos.index')}}" class="bg-red-500 text-white rounded-md px-2 py-2">Cancelar</a>
                                    </div>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</body>
    @endsection