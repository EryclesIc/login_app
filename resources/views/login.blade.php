<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link href="{{ asset('css/login.css') }}" rel="stylesheet">
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="css/materialize.css">
		<title>Sistema de Postos</title>
	</head>
	<body>
		<div>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: black !important;" id="mainNav">
				<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="../images/logo_navbar.png" height="60" width="450" style="margin-left: 10%;"/></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>			
			</nav>
			<div class="container">
				<div class ="row">
					<div class="col">
						<div class="card" style="height: 21rem; width: 21rem;">
							<h1 class="card-header">Login</h1>
							<div class="card-body">
								<form method="POST" action="/login">
									<input type="hidden" name="_token" value="{{ csrf_token() }}"><br>

									<div class="login_inputs">
										<p><input type="text" class="form-control" name="cpf" placeholder="CPF"></p>

										<p><input type="password" class="form-control" name="password" placeholder="Senha"></p>
										<label>Não tem cadastro,</label><a href='/register'>Registre-se</a>
									</div><br>

									<input type="submit" class="btn btn-primary" id="btn-login" value="Log In">

								</form>
							</div>
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
