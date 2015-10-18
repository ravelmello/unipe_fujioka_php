<!DOCTYPE>
<html>
<title>Desenvolvimento Web</title>
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/slate/bootstrap.min.css" rel="stylesheet" integrity="sha256-JcgoO7qVianjbv43Z5KinReHzk9/rEZg5m6z/ZZy3DI= sha512-rYMbEYJa5+7VkGdfAypdYHqwIdCNEBKh8lhKUNIv58tgHQuHHzXC/Bzf66BFDkTjq970Lc6OIEpgllKINGDCKQ==" crossorigin="anonymous">

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>

<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

<body>

<div class="container">
    <div class="row">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('index')}}">Desenvolvimento Web - Unipê</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Equipe <span class="sr-only">(current)</span></a></li>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"> GitHub </a> </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-4">
            <div class="list-group tab-content">
                <a class="list-group-item" href="{{url('cadastro')}}">Cadastrar usuários</a>
                <a class="list-group-item" href="{{url('show')}}">Listar usuários</a>
                <a class="list-group-item" href="{{url('deleteList')}}">Deletar usuários</a>
                <a class="list-group-item" href="{{url('listedit')}}">Editar usuários</a>
            </div>
        </div>

        @yield('conteudo')
    </div>
</div>

</body>

<script>
    $(document).ready(function(){
        $('#tableView').DataTable();
    });
</script>
<script >
    $(document).ready(function () {
        $('#inputFone').mask('(99) 99999-9999');
        $('#inputCep').mask('99999-999');
    });
</script>

</html>
