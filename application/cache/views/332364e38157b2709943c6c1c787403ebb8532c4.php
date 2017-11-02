<?php $__env->startSection('titulo_pagina', 'Listar Usuários'); ?>

<?php $__env->startSection('title_panel', 'Apresenta todos os usuários cadastrados.'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li>
        <span>Usuários</span>
    </li>
    <li class="active">
        <span>Listar</span>
    </li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>