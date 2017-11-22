<?php $__env->startSection('titulo_pagina', 'Inserir Cargo'); ?>



<?php $__env->startSection('breadcrumb'); ?>
    <li>
        <span>Cargos</span>
    </li>
    <li class="active">
        <span>Inserir</span>
    </li>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form role="form1" id="form1" class="form-horizontal" method="post" action="<?php echo e(base_url('index.php/cargos/save')); ?>">
        <div class="form-group">
            <label class="col-sm-2 control-label">Código</label>
            <div class="col-sm-2">
                <input type="text" placeholder="Novo" class="form-control text-center" readonly
                       value="<?php echo e((isset($obj['idcargo']) ? $obj['idcargo'] : null)); ?>" name="idcargo" id="idcargo">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="nome">Nome</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nome" id="nome" autofocus maxlength="100" required
                       value="<?php echo e((isset($obj['nome']) ? $obj['nome'] : null)); ?>" minlength="3">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="descricao">Descrição</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="descricao" id="descricao" maxlength="255"
                       value="<?php echo e((isset($obj['descricao']) ? $obj['descricao'] : null)); ?>">
            </div>
        </div>

        <div class="col-sm-offset-2">
            <a href="<?php echo e(base_url('index.php/cargos/index')); ?>" class="btn btn-default" id="voltar" name="voltar">
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $("#form1").validate();
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>