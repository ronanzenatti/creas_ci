@extends('template.template')

@section('titulo_pagina', 'Inserir Cargo')

@section('title_panel', 'Cadastrar um novo Cargo.')

@section('breadcrumb')
    <li>
        <span>Cargos</span>
    </li>
    <li class="active">
        <span>Inserir</span>
    </li>
    {{--<a href="{{base_url('usuarios/inserir')}}" class="btn btn-success" >Novo</a>--}}
@endsection

@section('content')
    <form role="form1" id="form1" class="form-horizontal" method="post" action="{{base_url('index.php/cargos/save')}}">
        <div class="form-group">
            <label class="col-sm-2 control-label">Código</label>
            <div class="col-sm-2">
                <input type="text" placeholder="Novo" class="form-control text-center" readonly
                       value="{{(isset($obj['idcargo']) ? $obj['idcargo'] : null)}}" name="idcargo" id="idcargo">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Descrição</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="descricao" id="descricao"
                       value="{{(isset($obj['descricao']) ? $obj['descricao'] : null)}}" >
            </div>
        </div>

        <div class="col-sm-offset-2">
            <a href="{{base_url('index.php/cargos/index')}}" class="btn btn-default" id="voltar" name="voltar">
                <i class="fa fa-reply"></i> <br><strong>Voltar</strong>
            </a>
            <button class="btn btn-info" id="limpar" name="limpar" type="reset">
                <i class="fa fa-window-close-o"></i> <br><strong>Limpar</strong>
            </button>
            <button class="btn btn-success" id="salvar" name="salvar" type="submit">
                <i class="fa fa-floppy-o"></i> <br><strong>Salvar</strong>
            </button>
        </div>
    </form>
@endsection

@section('js')
    <script>
        $("#form1").validate();
    </script>
@endsection