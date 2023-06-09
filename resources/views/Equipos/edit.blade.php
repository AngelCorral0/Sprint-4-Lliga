@extends('layouts.app')

@section('title', 'Edit')
@section('meta-description', 'Home meta description')

@section('content')
<body class="font-mono bg-gray-800">
		<!-- Container -->
		<div class="container mx-auto">
			<div class="flex justify-center px-12 my-24">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
					<div
						class="w-full h-auto bg-gray-400 hidden lg:block lg:w-6/12 bg-cover rounded-l-lg"
						style="background-image: url('https://images.unsplash.com/photo-1511886929837-354d827aae26?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80')"
					></div>
					<!-- Col -->
					<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-4xl text-center">Edita tu equipo!</h3>
						<form action="{{route('equipos.update', $equipo)}}" method="POST" class="px-8 pt-10 pb-8 mb-4 bg-white rounded">
							@csrf @method('patch')
							<div class="mb-4 md:flex md:justify-center">
								<div class="mb-6 md:mr-2 md:mb-2">
									<label class="block mb-2 text-base font-sans text-black" for="nombre">Nombre del equipo</label>
									<input required autocomplete="off"	id="nombre"	name="nombre" type="text" value="{{old('nombre',$equipo->nombre)}}"	placeholder="Nombre del equipo" class="w-full px-3 py-2 text-base leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"/>
									@error('nombre')
                                	<br>
                                	<small class="text-red">{{ $message }}</small>
                                	@enderror
								</div>
							</div>
							<div class="mb-4 md:flex md:justify-center">
								<div class="mb-6 md:mr-2 md:mb-2">
									<label class="block mb-2 text-base font-sans text-black" for="entrenador">Nombre del entrenador</label>
									<input required autocomplete="off"	id="entrenador" name="entrenador"	type="text"	value="{{old('entrenador',$equipo->entrenador)}}" placeholder="Nombre del entrenador" class="w-full px-3 py-2 text-base leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"/>
									@error('entrenador')
                                	<br>
                                	<small class="text-red">{{ $message }}</small>
                                	@enderror
								</div>
							</div>	
							<div class="mb-6 md:flex md:justify-center">
								<div class="mb-4 md:mr-2 md:mb-2">
									<label class="block mb-2 text-base font-sans text-black" for="estadio">Nombre del estadio</label>
									<input required autocomplete="off" id="estadio" type="text" name="estadio" value="{{old('estadio',$equipo->estadio)}}" placeholder="Nombre del estadio" class="w-full px-3 py-2 text-base leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"/>
									@error('estadio')
                                	<br>
                                	<small class="text-red">{{ $message }}</small>
                                	@enderror
								</div>
							</div>
							<div class="mb-8 text-center">
								<button	type="submit" class="w-auto px-4 py-2 font-sans text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline">Actualizar</button>
								<a href="{{route('equipos.index')}}" class="w-auto px-4 py-2 font-sans text-white bg-blue-500 rounded-full hover:bg-blue-600 focus:outline-none focus:shadow-outline">Regresar</a>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
@endsection