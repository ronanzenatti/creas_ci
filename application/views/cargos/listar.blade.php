@extends('template.template')

@section('titulo_pagina', 'Listar Cargos')

@section('title_panel', 'Apresenta todos os cargos cadastrados.')

@section('breadcrumb')
    {{--<li>--}}
    {{--<span>Usuários</span>--}}
    {{--</li>--}}
    {{--<li class="active">--}}
    {{--<span>Listar</span>--}}
    {{--</li>--}}
    <a href="{{base_url('cargos/inserir')}}" class="btn btn-success">Novo</a>
@endsection

@section('content')
    <table id="tableCargos" class="table table-striped table-bordered table-hover" cellspacing="0">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Cadastro</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@endsection

@section('js')
    <script>
        $(function () {
            $('table').dataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{base_url('cargos/Ajax_Datatables')}}",
                    type: "POST"
                },
                pagingType: "full_numbers",
                columnDefs: [
                    {targets: [4], orderable: false,},
                    {type: 'date-eu', targets: 3},
                ],
                language: {
                    decimal: ",",
                    thousands: "."
                },
                language: {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "_MENU_ resultados por página",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "Pesquisar",
                    "oPaginate": {
                        "sFirst": "<i class='fa fa-angle-double-left'></i>",
                        "sLast": "<i class='fa fa-angle-double-right'></i>",
                        "sNext": "<i class='fa fa-angle-right'></i>",
                        "sPrevious": "<i class='fa fa-angle-left'></i>"
                    },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                    }
                },
                dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
                buttons: [
                    {extend: 'copy', className: 'btn-sm', text: 'Copiar'},
                    {extend: 'csv', title: 'FileCSV', className: 'btn-sm'},
                    {extend: 'pdf', title: 'FilePDF', className: 'btn-sm'},
                    {extend: 'print', className: 'btn-sm', text: 'Imprimir'}
                ]
            });
        });
    </script>
@endsection
