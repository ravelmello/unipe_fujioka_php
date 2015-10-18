@extends('layouts/layout')

@section('conteudo')

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <legend>Deletar Usuários</legend>
            <table id="tableView" class="" cellspacing="0" width="112%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>CEP</th>
                </tr>
                </thead>

                <tbody>
                <?php
                foreach($users as $user){
                ?>
                <tr>
                    <td style="color: #080808"  style="color: #080808"> <a href="{{url('destroy')}}/<?php echo $user->id; ?>" style="color: #080808" > <?php echo $user->id; ?></a> </td>
                    <td style="color: #080808"  style="color: #080808"> <a href="{{url('destroy')}}/<?php echo $user->id; ?>" style="color: #080808">  <?php echo $user->name; ?> </a></td>
                    <td style="color: #080808"  style="color: #080808"> <a href="{{url('destroy')}}/<?php echo $user->id; ?>" style="color: #080808" > <?php echo $user->email; ?> </a></td>
                    <td style="color: #080808"  style="color: #080808"> <a href="{{url('destroy')}}/<?php echo $user->id; ?>" style="color: #080808" > <?php echo $user->address; ?> </a></td>
                    <td style="color: #080808"  style="color: #080808"> <a href="{{url('destroy')}}/<?php echo $user->id; ?>" style="color: #080808" > <?php echo $user->phone_number; ?></a> </td>
                    <td style="color: #080808"  style="color: #080808"> <a href="{{url('destroy')}}/<?php echo $user->id; ?>" style="color: #080808" > <?php echo $user->cep; ?> </a> </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>


@stop
