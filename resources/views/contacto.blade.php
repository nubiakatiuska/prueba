<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página de contacto</title>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<h2>Enviar mensaje</h2>
				<form action="{{route('contacto.store')}}" method="POST">
					<div clas="form-group">
						<input type="text" name="nombre" class="form-control"  placeholder="Escribe tu nombre" value="{{old('nombre')}}">
						{{$errors->first('nombre')}}
					</div>
					<div class="form-group">
						<input type="texto" name="email" class="form-control" placeholder="Escribe tu email" value="{{old('email')}}">
						{{$errors->first('email')}}
					</div>
					<div class="form-group">
						<textarea name="mensaje" class="form-control" placeholder="Escribe tu mensaje">{{old('mensaje')}}</textarea>
						{{$errors->first('mensaje')}}
					</div>
					<div>
						<input type="submit" value="Enviar Formulario" class="btn btn-primary">
					</div>
					{{ csrf_field() }}
					<!--<input type="hidden" name= "_token" value="{{ csrf_token() }}"> -->

				</form>
				
			</div>

		</div>
		
	</div>
	
</body>
</html>