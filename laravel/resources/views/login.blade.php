<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Pós Web</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/slate/bootstrap.min.css" rel="stylesheet" integrity="sha256-JcgoO7qVianjbv43Z5KinReHzk9/rEZg5m6z/ZZy3DI= sha512-rYMbEYJa5+7VkGdfAypdYHqwIdCNEBKh8lhKUNIv58tgHQuHHzXC/Bzf66BFDkTjq970Lc6OIEpgllKINGDCKQ==" crossorigin="anonymous">

    <style type="text/css">
        .login{
            background-color: #ffffff; /* cor fundo da DIV*/
            height: 268px;    /* altura da div*/
            left: 50%;  /* 50% da esquerda da tela ou seja centro na horizontal*/
            margin: -240px 0 0 -320px;
            position: absolute;
            top: 50%;  /*  50% longe do topo, ou seja meio da tela na vertical */
            width: 497px; /* largura da DIV*/
        }
        .font_color{
            color: #101010;
        }

    </style>

</head>
<body>

<div class="row">
    <div class="col-lg-4 center login">
        <form class="form-horizontal" method="post" action="{{url('index')}}">
            <fieldset>
                <legend class="font_color"> Efetue seu login: </legend>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="email" id="inputEmail" placeholder="Email" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input class="form-control" id="inputPassword" name="password" placeholder="Password" type="password" >
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember-me
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>
