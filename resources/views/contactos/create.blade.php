@extends('master')
@section('title', 'Contact')

@section('content')
	<div class = "container col-md-8 col-md-offset-2">
		<div class="well well bs-component">
			<form class="form-horizontal" method="post">
				@foreach ($errors->all() as $error)
				<p class="alert alert-danger"> {{ $error }}</p>
                @endforeach	

				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<fieldset>
					<legend>Crear un nuevo contacto</legend>
					<div class="form-group">
						<label for="name" class="col-lg-2 control-label">Nombre</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="name" placeholder="nombre" name="title">
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-lg-2 control-label">telefono</label>
						<div class="col-lg-10">
							<input type="text" rows="3" id="content" name="content"></textarea>
							
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button class="btn btn-default">Cancelar</button>
							<button type="submit" class="btn btn-primary">Enviar</span>
						</div>
					</div>
				</fieldset>
			</form>				
		</div>
	</div>
@endsection	