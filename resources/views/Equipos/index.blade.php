@extends('layouts.app')

@section('title', 'Home')
@section('meta-description', 'Home meta description')
{{session('status')}}

  
@section('content')
<link
	href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
	rel="stylesheet">
<div class="flex items-center justify-center min-h-screen bg-gray-800">
	<div class="col-span-12">
		<div class="overflow-auto lg:overflow-visible ">
			<table class="table text-gray-400 border-separate space-y-6 text-sm">
				<thead class="bg-gray-700 text-gray-300">
					<tr>
						<th class="p-3 text-left">Equipo</th>
						<th class="p-3 text-left">Entrenador</th>
						<th class="p-3 text-left">Estadio</th>
						<th class="p-3 ">Acciones</th>
                        
					</tr>
				</thead>
				<div class="crear">
					<a href="{{ route('equipos.create') }}">
						<button type="button" class="bg-gray-700 text-gray-300 px-2 py-1 hover:text-white rounded ">
							Crear equipo
						</button>
					</a>
					<a href="{{ route('partidos.create') }}">
						<button type="button" class="bg-gray-700 text-gray-300 px-2 py-1 hover:text-white rounded">
							Crear partido
						</button>
					</a>
					<a href="{{ route('partidos.index') }}">
						<button type="button" class="bg-gray-700 text-gray-300 px-2 py-1 hover:text-white rounded">
							Ver partidos
						</button>
					</a>
				</div>
                @foreach ($equipos as $equipo)
				<tbody>
                    <tr class="bg-gray-700">
						<td class="p-3"> <a href="{{ route('equipos.show', $equipo) }}" class="hover:underline">{{ $equipo->nombre }}</a></td>
						<td class="p-3">{{ $equipo->entrenador }}</td>
						<td class="p-3 font-bold">{{ $equipo->estadio }}</td>
						<td class="p-3  felx items-center">
                        <div class="flex">
                                <a href="{{ route('equipos.show', $equipo) }}" class="text-gray-400 hover:text-blue-400 mr-2">
                                    <i class="material-icons-outlined text-base">visibility</i>
                                </a>
                                <a href="{{ route('equipos.edit', $equipo) }}" class="text-gray-400 hover:text-yellow-400 mx-2">
                                    <i class="material-icons-outlined text-base">edit</i>
                                </a>
                                <form action="{{ route('equipos.delete', $equipo) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-gray-400 hover:text-red-400 mx-2">
                                        <i class="material-icons-outlined text-base">delete</i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
				</tbody>
                @endforeach
			</table>
		</div>
	</div>
</div>
<style>
	.table {
		border-spacing: 0 15px;
	}

	i {
		font-size: 1rem !important;
	}

	.table tr {
		border-radius: 20px;
	}

	tr td:nth-child(n+4),
	tr th:nth-child(n+4) {
		border-radius: 0 .625rem .625rem 0;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: .625rem 0 0 .625rem;
	}
</style>
@endsection











<!-- component -->

