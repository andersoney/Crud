@extends('Layout.Layout')
@section('conteudo')
	<h1>Bem vindo aos Artigos</h1>
	<h3>{{$mensage}}</h3>	
	@foreach ($artigos as $artigo)
		<table>
			<tbody>
				<tr>
					<td>Titulo:</td>
					<td>{{$artigo->Titulo}}</td>
				</tr>
				<tr>
					<td>Autor:</td>
					<td>{{$artigo->autor}}</td>
				</tr>
				<tr>
					<td>Area:</td>
					<td>{{$artigo->Area}}</td>
				</tr>
				<tr>
					<td>Resultado:</td>
					<td>{{$artigo->resultado}}</td>
				</tr>
				<tr>
					<td>Eficiencia:</td>
					<td>{{$artigo->eficiencia}}</td>
				</tr>
				<tr>
					<td>Tipo</td>
					<td>{{$artigo->tipo}}</td>
				</tr>
				<tr>
					<td>Latitude</td>
					<td>{{$artigo->ltg}}</td>
				</tr>
				<tr>
					<td>Longitude</td>
					<td>{{$artigo->lng}}</td>
				</tr>
				<tr>
					<td>URL</td>
					<td>{{$artigo->url}}</td>
				</tr>
				<tr>
					<td>Palavra Chaves</td>
					<td>{{$artigo->palavrachave}}</td>
				</tr>
				<tr>
					<td>Atualizado em</td>
					<td>{{$artigo->updated_at}}</td>
				</tr>
				<tr>
					<td>
						<button class="delete" onclick="excluir({{$artigo->id}})">Excluir</button>
					</td>
					<td>
						<form action="/artigo/{{$artigo->id}}/edit">
						<button>Editar</button>
						</form>
					</td>
				</tr>
			</tbody>
		</table>
	@endforeach
@endsection