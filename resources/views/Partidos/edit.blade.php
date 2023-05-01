@extends('layouts.app')
@section('title', 'Update game')



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
						style="background-image: url('https://images.unsplash.com/photo-1632328266313-8a1d49998fe2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHNjb3JlJTIwc29jY2VyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=400&q=60')"
					></div>
					<!-- Col -->
					<div class="w-full lg:w-7/12 bg-white p-7 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-4xl text-center">Actualiza el marcador!</h3>
                        <form action="{{ route('partidos.update', $partido) }}" method="post">
							@csrf 
							<div class="mb-8 md:flex md:justify-center">
								<div class="mb-2 md:mr-2 md:mb-2">
									<label class="block mb-2 text-base font-sans text-black" for="goles_local">Goles {{ $partido->equipo_local->nombre}}</label>
									<input required autocomplete="off"id="goles_local" name="goles_local" type="integer" placeholder="goles de {{ $partido->equipo_local->nombre}}" class="w-full px-3 py-2 text-base leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"/>
									@error('goles_local')
                                	<br>
                                	<small class="text-red">{{ $message }}</small>
                                	@enderror
								</div>
							</div>
							<div class="mb-8 md:flex md:justify-center">
								<div class="mb-4 md:mr-2 md:mb-2">
									<label class="block mb-2 text-base font-sans text-black" for="goles_visitante">Goles {{ $partido->equipo_visitante->nombre}}</label>
									<input required autocomplete="off"	id="goles_visitante" name="goles_visitante"	type="integer" placeholder="goles de {{ $partido->equipo_visitante->nombre }}" class="w-full px-3 py-2 text-base leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"/>
									@error('goles_visitante')
                                	<br>
                                	<small class="text-red">{{ $message }}</small>
                                	@enderror
								</div>
							</div>	
							<div class="mb-8 text-center">
								<button	type="submit" class="w-auto px-4 py-2 font-sans text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline">Actualiza el marcador!</button>
							</div>
                            <div class="mb-8 text-center">
                            <a href="{{ route('partidos.show', $partido) }}" class="w-auto px-4 py-2 font-sans text-white bg-red-500 rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline">Cancelar</a>
                            </div>
                            
						</form>
                        
					</div>
				</div>
			</div>
		</div>
	</body>
@endsection
