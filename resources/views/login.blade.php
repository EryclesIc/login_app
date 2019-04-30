<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="css/materialize.css">
		<link href="{{ asset('css/custon.css') }}" rel="stylesheet">
		<title>Sistema de Postos</title>
	</head>
	<body>

		<div class="card-panel black z-depth-2 fixed-top" id="mainNav">
	
		</div>
	
		<div class="container">
			<div class ="row">
				<div class="col s12 m6">
					<div class="card">
						<div class="card-content z-depth-2">
							<span class="card-title"><b>Acesso ao Sistema</b></span>
						</div>
						<div class="card-action z-depth-2">
							<form method="POST" action="/login">
								<input type="hidden" name="_token" value="{{ csrf_token() }}"><br>

								<div class="login_inputs">
									<p><input type="text" class="form-control" name="cpf" placeholder="CPF"></p>

									<p><input type="password" class="form-control" name="password" placeholder="Senha"></p>
									<label>Esqueceu sua senha?  </label><a href='/register'>Recuperar Senha</a>

									<input type="submit" class="btn btn-primary" id="btn-login" value="Acessar">
								</div><br>
							</form>
						  </div>
					</div>
				</div>
			</div>
		</div>

		{{-- <script src = "https://code.jquery.com/jquery-1.12.0.min.js"></script> --}}
		<!-- Compiled and minified JavaScript -->
		{{-- <script src="js/materialize.min.js"></script> --}}
	</body>
</html>
