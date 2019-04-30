<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
	<title>Document</title>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: black !important; height:9%;" id="mainNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="" height="60" width="450" style="margin-left: 10%;"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>			
        </nav>
        <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 45rem; height: 88rem; margin-top: 7%;">
                            <div class="card-body">
                                <form action="{{route('register_inf')}}" method="POST">
                                    @csrf 
                                    <div>
                                        <h1>Registro de Usuario</h1>

                                        <label><b>Nome: *</b></label><br>
                                        <input type="text" class="form-control" name="nome" required><br>

                                        <label><b>CPF: *</b></label><br>
                                        <input type="text" class="form-control" name="cpf" required><br>

                                        <label><b>RG: *</b></label><br>
                                        <input type="text" class="form-control" name="rg" required><br>

                                        <label><b>Matricula: *</b></label><br>
                                        <input type="text" class="form-control" name="matricula" required><br>

                                        <label><b>Email: *</b></label><br>
                                        <input type="text" class="form-control" name="email" required><br>

                                        <label><b>Senha: *</b></label><br>
                                        <input type="password" class="form-control" name="senha" required><br>

                                        <label><b>Telefone: *</b></label><br>
                                        <input type="text" class="form-control" name="telefone" required><br>

                                        <label><b>Orgão: *</b></label><br>
                                        <input type="text" class="form-control" name="orgao" required><br>

                                        <label><b>Perfil: *</b></label><br>
                                        <input type="text" class="form-control" name="perfil" required><br>

                                        <h1>Dados Da CNH</h1>

                                        <label><b>Número: *</b></label><br>
                                        <input type="text" class="form-control" name="numero_cnh" required><br>

                                        <label><b>Categoria: *</b></label><br>
                                        <input type="text" class="form-control" name="categoria_cnh" required><br>

                                        <label><b>Data de Validade: *</b></label><br>
                                        <input type="text" class="form-control" name="data_cnh" required><br>

                                        <label><b>Foto: *</b></label><br>
                                        <input type="file" name="foto_cnh"><br><br>
                                </div>                                   
                                    <button type="submit" class="btn btn-primary">Enviar Dados</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
