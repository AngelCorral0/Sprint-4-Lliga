@extends('layouts.app')

@section('title', 'Show')
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
						class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
						style="background-image: url('https://images.unsplash.com/photo-1579952363873-27f3bade9f55?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80')"
					></div>
					<!-- Col -->
					<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-4xl text-center">Tu equipo</h3>
						<form action="{{route('equipos.index')}}" class="px-8 pt-10 pb-8 mb-4 bg-white rounded">
							@csrf 
							<div class="mb-4">
								<div class="mb-6 md:mr-2 md:mb-2">
									<label class="block mb-2 text-base font-sans text-black" for="nombre">Nombre del equipo: {{$equipo->nombre}}</label>
								</div>
							</div>
							<div class="mb-4">
								<div class="mb-6 md:mr-2 md:mb-2">
									<label class="block mb-2 text-base font-sans text-black" for="entrenador">Nombre del entrenador: {{$equipo->entrenador}}</label>
								</div>
							</div>	
							<div class="mb-6">
								<div class="mb-4 md:mr-2 md:mb-2">
									<label class="block mb-2 text-base font-sans text-black" for="estadio">Nombre del estadio: {{$equipo->estadio}}</label>
								</div>
							</div>
							<div class="mb-8 text-center">
								<button	type="submit" class="w-auto px-4 py-2 font-sans text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline">Regressar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
@endsection