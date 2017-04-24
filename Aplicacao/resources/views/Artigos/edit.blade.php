@extends('Layout.Layout')
@section('conteudo')
	<h1>Cadastro de artigos </h1>
	<form action="/artigo/{{$artigo->id}}" method="post" accept-charset="utf-8">
	 {{ csrf_field() }}
	 <input type="hidden" name="_method" value="PUT" />
		<table>
			<thead>
				<tr>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="" rowspan="" headers=""><label for="Titulo">Titulo</label></td>
					<td colspan="" rowspan="" headers=""><input type="text" name="Titulo" id="Titulo" value="{{$artigo->Titulo}}"></td>
				</tr>
				<tr>
					<td colspan="" rowspan="" headers=""><label for="Area">Area</label></td>
					<td colspan="" rowspan="" headers=""><input type="text" name="Area" id="Area" value="{{$artigo->Area}}"></td>
				</tr>
				<tr>
					<td colspan="" rowspan="" headers=""><label for="autor">Autor</label></td>
					<td colspan="" rowspan="" headers=""><input type="text" name="autor" id="autor" value="{{$artigo->autor}}"></td>
				</tr>
				<tr>
					<td colspan="" rowspan="" headers=""><label for="ltg">Lat</label></td>
					<td colspan="" rowspan="" headers=""><input type="text" name="ltg" id="ltg" value="{{$artigo->ltg}}"></td>
				</tr>
				<tr>
					<td colspan="" rowspan="" headers=""><label for="lng">Lng</label></td>
					<td colspan="" rowspan="" headers=""><input type="text" name="lng" id="lng" class="lng" value="{{$artigo->lng}}"></td>
				</tr>
				<tr>
					<td colspan="" rowspan="" headers=""><label for="Resultados" id="labelResult">Resultados</label></td>
					<td colspan="" rowspan="" headers=""><textarea name="resultado" id="Resultados" rows="10" cols="22">{{$artigo->resultado}}</textarea></td>
				</tr>
				<tr>
					<td colspan="" rowspan="" headers=""><label for="eficiencia">Eficiencia</label></td>
					<td colspan="" rowspan="" headers=""><input type="text" name="eficiencia" id="eficiencia" class="eficiencia" value="{{$artigo->eficiencia}}"></td>
				</tr>
				<tr>
					<td colspan="" rowspan="" headers=""><label for="palavrachave">Palavra-Chave</label></td>
					<td colspan="" rowspan="" headers=""><input type="text" name="palavrachave" id="palavrachave" class="palavrachave" value="{{$artigo->palavrachave}}"></td>
				</tr>
				<tr>
					<td colspan="" rowspan="" headers=""><label for="tipo">Tipo</label></td>
					<td colspan="" rowspan="" headers=""><input type="text" name="tipo" id="tipo" class="" value="{{$artigo->tipo}}"></td>
				</tr>
				<tr>
					<td colspan="" rowspan="" headers=""><label for="url">URL</label></td>
					<td colspan="" rowspan="" headers=""><input type="url" name="url" id="url" class="" value="{{$artigo->url}}"></td>
				</tr>
				
				<tr>
					<td colspan="6" rowspan="" headers=""></td>
					<td colspan="" rowspan="" headers=""><input type="submit" value="Salvar" class="botao"></input></td>
				</tr>
				
			</tbody>
		</table>
	</form>
@endsection