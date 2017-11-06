<?php $__env->startSection('titulo_pagina', 'Inserir Usuário'); ?>

<?php $__env->startSection('title_panel', 'Cadastrar um novo Usuário.'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li>
        <span>Usuários</span>
    </li>
    <li class="active">
        <span>Inserir</span>
    </li>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $("#form1").validate();
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>