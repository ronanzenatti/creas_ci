@extends('template.template')

@section('titulo_pagina', 'Inserir Usuário')

@section('title_panel', 'Cadastrar um novo Usuário.')

@section('breadcrumb')
    <li>
        <span>Usuários</span>
    </li>
    <li class="active">
        <span>Inserir</span>
    </li>
    {{--<a href="{{base_url('usuarios/inserir')}}" class="btn btn-success" >Novo</a>--}}
@endsection

@section('content')
    <form role="form1" id="form1">
        <div class="form-group"><label>Email</label>
            <input type="email" placeholder="Enter email" class="form-control" required>
        </div>
        <div class="form-group"><label>Password</label>
            <input type="password" placeholder="Password" class="form-control" name="password">
        </div>
        <div class="form-group"><label>Url</label>
            <input type="text" placeholder="Enter email" class="form-control" name="url">
        </div>
        <div class="form-group"><label>Number</label>
            <input type="text" placeholder="Enter email" class="form-control" name="number" required>
        </div>
        <div class="form-group"><label>MaxLength</label>
            <input type="text" placeholder="Enter email" class="form-control" name="max">
        </div>
        <div>
            <button class="btn btn-primary" type="submit"><strong>Submit</strong></button>
        </div>
    </form>
@endsection

@section('js')
    <script>
        $("#form1").validate();
    </script>
@endsection