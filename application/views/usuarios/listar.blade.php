@extends('template.template')

@section('titulo_pagina', 'Listar Usuários')

@section('title_panel', 'Apresenta todos os usuários cadastrados.')

@section('breadcrumb')
    <li>
        <span>Usuários</span>
    </li>
    <li class="active">
        <span>Listar</span>
    </li>
@endsection

@section('content')
    <table id="table1" class="table table-striped table-bordered table-hover" cellspacing="0" style="width: 100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@endsection
