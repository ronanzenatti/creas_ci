<?php $__env->startSection('titulo_pagina', 'Listar Cargos'); ?>

<?php $__env->startSection('title_panel', 'Apresenta todos os cargos cadastrados.'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    
    
    
    
    
    
    <a href="<?php echo e(base_url('index.php/cargos/inserir')); ?>" class="btn btn-success">Novo</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table id="table1" class="table table-striped table-bordered table-hover" cellspacing="0">
        <thead>
        <tr>
            <th>Código</th>
            <th>Descrição</th>
            <th>Cadastro</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $lista; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($l['idcargo']); ?></td>
                <td><?php echo e($l['descricao']); ?></td>
                <td><?php echo e(date('d/m/Y H:i:s', strtotime($l['created_at']))); ?></td>
                <td>
                    <a href="<?php echo e(base_url('index.php/cargos/alterar/'.$l['idcargo'])); ?>" class="btn btn-warning btn-sm">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script>
        $(function () {
            $('#table1').dataTable({
                responsive: true,
                pagingType: "full_numbers",
                language: {
                    "decimal": ",",
                    "thousands": "."
                },
                "language": { //Altera o idioma do DataTable para o português do Brasil

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
                        "sNext": "Próximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
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
                    {extend: 'csv', title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'print', className: 'btn-sm', text: 'Imprimir'}
                ]
            });
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>