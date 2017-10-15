@extends('master')
@section('title','Ver todos los tickets')
@section('content')


	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Tickets</h2>
			</div>	
			@if ($agenda->isEmpty())
				<p>No hay contactos</p>
			@else
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>nombre</th>
							<th>telefono</th>
							<th>email</th>
							<th>consanguinidad</th>
						</tr>
					</thead>
					<tbody>
						@foreach($agenda as $miagenda)
							<tr>
								<td>{!! $miagenda->id !!} </td>
								<td>{!! $miagenda->nombre !!} </td>
								<td>{!! $miagenda->telefono !!} </td>
								<td>{!! $miagenda->email !!} </td>
								<td>{!! $miagenda->consanguinidad !!} </td>
								
							</tr>
						@endforeach
					</tbody>
				</table>
			@endif
		</div>
	</div>
@endsection										