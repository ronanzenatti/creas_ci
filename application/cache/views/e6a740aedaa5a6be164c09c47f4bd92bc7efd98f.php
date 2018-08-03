<?php $__env->startSection('titulo_pagina', 'Listar Entidades'); ?>

<?php $__env->startSection('title_panel', 'Apresenta todos as entidades cadastradas.'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    
    
    
    
    
    
    <a href="<?php echo e(base_url('entidades/inserir')); ?>" class="btn btn-success">Novo</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table id="tableEntidades" class="table table-striped table-bordered table-hover" cellspacing="0">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>CNPJ</th>
            <th>Telefones</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $(function () {
            $('table').dataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "<?php echo e(base_url('entidades/Ajax_Datatables')); ?>",
                    type: "POST"
                },
                pagingType: "full_numbers",
                columnDefs: [
                    {targets: [5], orderable: false,}
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>