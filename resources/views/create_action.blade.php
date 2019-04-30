<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
        crossorigin="anonymous">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <title>PPA - Sistema Restrito</title>
</head>

<body>
    <div class="bg-primary">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: rgba(6, 21, 81, 1) !important; height:9%;"
            id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="../images/logo_navbar.png" height="60" width="450" style="margin-left: -65%;"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <div id="dados" class="row" style="margin-left:70%; margin-top:5%;">
                        <div class="col">
                            <br><br><br><br>
                            <label id='user' style="color:white;">                                       
                                        <b>Usuário: </b>
                                        {{$usuarioLogado->nome}}
                                        <b>CPF:</b>{{$usuarioLogado->cpf}}    
                                    </div>
                                    <div>

                                        <a class="nav-link active" style=color:black;  id="btn-home" href="{{ route('sair') }}" method="POST"><img src="../images/sing_out.png"  height="40" width="40" style="margin-left: -150%; margin-top: -250%;"/>  </a><br>
                                        <a class="nav-link active" style=color:black;  id="btn-home" href="{{ route('voltar_pagina_criar_acao') }}" method="POST"><img src="../images/voltar_pagina.png"  height="40" width="40" style="margin-left: -300%; margin-top: -580%;"/> </a>                                                                  
                                    </div>
                                    </label>

                            <div>



                                {{-- <a id="link-sair" href="{{route('sair')}}" role="button" class="fas fa-sign-out-alt"></a>                                --}}
                            </div>
                        </div>
                    </div>
                </div>
        </nav>
        <div class="container-fluid">

            <div class="row">
                <div class="col">
                    <div class="card" style="width: 50rem; margin-top:10%;">
                        <div class="card-body">
                            <form id="acao" action="{{route('register_action')}}" method="POST">
                                @csrf 
                                <div>
                                    <h1>ABERTURA DE AÇÃO NO PPA 2020-2023</h1>
                                    <label>De acordo com o Manual de Elaboração do PPA - Instrução Normativa Nº XX  SEPLAG</label><br><br>

                                    <label><b>UNIDADE ORÇAMENTÁRIA *</b></label><br>
                                    <div class="form-group">
                                        <select class="form-control" name="unidade">
                                            <option value="0">Selecione</option>
                                            @foreach ($uo as $unidade)
                                                <option value="{{$unidade->id}}">{{$unidade->descricao}}</option> 
                                            @endforeach                                            
                                        </select><br><br>

                                        <label><b>FUNÇÃO *</b></label><br>
                                        <select class="form-control" name="funcao">
                                            <option value="0">Selecione</option>
                                            @foreach ($func as $funcao)
                                                <option value="{{$funcao->id}}">{{$funcao->descricao}}</option> 
                                            @endforeach
                                        </select><br><br>

                                        <label><b>SUB-FUNÇÃO *</b></label><br>
                                        <select class="form-control" name="sub_funcao">
                                            <option value="0">Selecione</option>
                                            @foreach ($sub_func as $sub_funcao)
                                                <option value="{{$sub_funcao->id}}">{{$sub_funcao->descricao}}</option> 
                                            @endforeach
                                        </select><br>
                                    </div>

                                    <label><b>Título da Ação *</b></label>
                                    <a class="fas fa-info-circle" data-container="body" data-toggle="popover" data-placement="right" data-content="Título da ação é a denominação pela qual a ação será identificada no PPA. Deve expressar em linguagem clara, o objeto da ação. (As ações são operações das quais resultam produtos (bens ou serviços) que contribuem para atender ao objetivo de um programa e se dividem em: projeto, atividade (finalística ou de manutenção) e operação especial.)"></a>
                                    <input type="text" class="form-control" name="titulo" required><br><br>

                                    <label><b>Finalidade da Ação *</b></label><a class="fas fa-info-circle" data-container="body"
                                        data-toggle="popover" data-placement="right" data-content="Expressa o objetivo a ser alcançado pela ação. (Exemplo: Promover a modernização do sistema sócio educativo através da formação e capacitação dos servidores, com o objetivo de melhorar os serviços de atendimento a adolescentes em conflito com a lei.)"></a>
                                    <input type="text" class="form-control" name="finalidade"><br><br>

                                    <label><b>Classificação da Ação *</b></label><a class="fas fa-info-circle" data-container="body"
                                        data-toggle="popover" data-placement="right" data-content="As ações, conforme suas características são classificadas como , projetos, atividades ou operações especiais. (O custeio do órgão e as operações especiais farão parte apenas da LOA.)"></a>
                                    <br><input type="radio" name="classificacao_acao" value="1"> Projeto<br>
                                    <input type="radio" name="classificacao_acao" value="2"> Atividade Finalística<br><br>

                                    <label><b>Data de Inicio *</b></label><a class="fas fa-info-circle" data-container="body"
                                        data-toggle="popover" data-placement="right" data-content="Refere-se às datas previstas de início da ação."></a>
                                    <input type="date" class="form-control" name="data_inicio"><br><br>

                                    <label><b>Data de Término *</b></label><a class="fas fa-info-circle" data-container="body"
                                        data-toggle="popover" data-placement="right" data-content="Refere-se às datas previstas de Término da ação."></a>
                                    <input type="date" class="form-control" name="data_fim"><br><br>

                                    <label><b>Forma de Implementação *</b></label><a class="fas fa-info-circle" data-container="body"
                                        data-toggle="popover" data-placement="right" data-content="Indica a forma de execução da ação, de acordo com o responsável pela implementação, a competência e a natureza da ação. As ações podem ter as seguintes formas de implementação:1) Direta - Ação executada diretamente ou sob contratação pela unidade responsável, sem que ocorra transferência de recursos para outros entes da federação, e 2) Descentralizada - Atividades ou projetos executados por outro ente da federação ou por ente privado, com recursos repassados pelo Estado."></a>
                                    <br><input type="radio" name="forma_implementacao" value="1"> Direta<br>
                                    <input type="radio" name="forma_implementacao" value="2"> Descentralizada<br><br>

                                    <label><b>Produto *</b></label><a class="fas fa-info-circle" data-container="body" data-toggle="popover"
                                        data-placement="right" data-content="Bem ou serviço que resulta da ação, destinado ao público alvo, ou o investimento para a produção deste bem ou serviço. Para cada ação deve haver um único produto. (Em situações especiais, o produto expressa a quantidade de beneficiários atendidos pela ação.) Exemplo: Município Atendido. / Rodovia Construída."></a>
                                    <input type="text" class="form-control" name="produto" required><br><br>

                                    <label><b>Unidade de Medida *</b></label><a class="fas fa-info-circle" data-container="body"
                                        data-toggle="popover" data-placement="right" data-content="É o padrão selecionado para mensurar a produção do bem ou do serviço proporcionado pela ação. Exemplo: Unidade / Quilômetro."></a>
                                    <select class="form-control" name="unidade_medida">
                                        <option value="0">Selecione</option>
                                        @foreach ($unidade_medida as $und)
                                            <option value="{{$und->id}}">{{$und->nome}} - '{{$und->descricao}}'</option>
                                        @endforeach                                            
                                    </select><br><br>

                                    <label><b>Identificador de Quantidade *</b></label><a class="fas fa-info-circle" data-container="body"
                                        data-toggle="popover" data-placement="right" data-content="Identifica a forma de operação da soma da meta física."></a>
                                    <br><input type="radio" name="identificador_quantidade" value="1"> Somatório (Soma as
                                    quantidades físicas do produto).<br>
                                    <input type="radio" name="identificador_quantidade" value="2"> Acumulativo (Apresenta
                                    o maior valor registrado ao longo do ano para evitar a dupla contagem).<br><br>

                                    <label><b>Base Legal</b></label><a class="fas fa-info-circle" data-container="body" data-toggle="popover"
                                        data-placement="right" data-content="Especifica os instrumentos normativos que dão respaldo à ação, quando houver."></a>
                                    <input type="text" class="form-control" name="base_legal"><br>
                                    <button type="submit" id="btn-confirm">Confirmar Ação</button><br><br><br>

                                    <div class="card" style="width: 47rem;">
                                        <div class="card-body">
                                            <table id="meta_fisica" style="width:95%">
                                                <thead>
                                                    <tr>
                                                        <th>Região</th>
                                                        <th>2020</th>
                                                        <th>2021</th>
                                                        <th>2022</th>
                                                        <th>2023</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><br><br>
                                </div>

                                <div class="card" style="width: 47rem;">
                                    <div class="card-body">
                                        <table id="meta_financeira" style="width:95%">
                                            <thead>
                                                <tr>
                                                    <th>Região</th>
                                                    <th>Fonte</th>
                                                    <th>Categoria</th>
                                                    <th>2020</th>
                                                    <th>2021</th>
                                                    <th>2022</th>
                                                    <th>2023</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><br><br>
                        </div>
                        </form>
                        <button class="fas fa-plus-circle" id="btnAdicionar">fisicas</button>
                        <button class="fas fa-plus-circle" id="btnAdicionar1">financeiras</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/js/funcoes.js"></script>
<script type="text/javascript" src="/js/funcoes.1.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
<script>
    $(function () {
            $('[data-toggle="popover"]').popover()
        });
</script>

</html>