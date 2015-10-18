@extends('layouts/layout')

@section('conteudo')


    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <form class="form-horizontal" method="post" action="{{url('create')}}">
                <fieldset>
                    <legend>Cadastro de Usuários</legend>
                    <div class="form-group">
                        <label for="inputName" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input class="form-control" name="name" id="inputName" placeholder="Name" type="text" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input class="form-control" name="email" id="inputEmail" placeholder="email@dominio.com" type="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input class="form-control" name="password" id="inputEmail"  type="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAdrees" class="col-lg-2 control-label">Address</label>
                        <div class="col-lg-10">
                            <input class="form-control" name="address" id="inputAdrees" placeholder="" type="text" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Phone Number</label>
                        <div class="col-lg-10">
                            <input class="form-control" name="fone" id="inputFone" placeholder="(xx) xxxxx - xxxx" type="tel">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-2 control-label">Cep</label>
                        <div class="col-lg-10">
                            <input class="form-control" name="cep" id="inputCep" placeholder="00000-000" type="text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
@stop
