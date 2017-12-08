<?php $__env->startSection('titulo_pagina', 'Gestão da Situação Habitacional'); ?>



<?php $__env->startSection('breadcrumb'); ?>
    <a href="<?php echo e(base_url('index.php/situacao_habitacional')); ?>" class="btn btn-default" id="voltar" name="voltar">
        <i class="fa fa-reply"></i> Voltar</a> &nbsp;
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <h3 class="font-extra-bold text-info">
            <?php echo e($objP['nome']); ?>

            <small> - <strong>RG: </strong><?php echo e($objD['RG']); ?></small>
        </h3>
        <h4>Responsável: <span class="font-normal"><?php echo e($objA['responsavel']); ?></span></h4>
        <hr/>
        <?php $__currentLoopData = $objE; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading<?php echo e($key); ?>">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo e($key); ?>" aria-expanded="true"
                           aria-controls="collapse<?php echo e($key); ?>">
                            <?php echo e($e['logradouro'] . ", " . $e['numero'] . " - " . $e['descricao']); ?>

                        </a>
                    </h4>
                </div>
                <div id="collapse<?php echo e($key); ?>" class="panel-collapse collapse" role="tabpanel"
                     aria-labelledby="heading<?php echo e($key); ?>">
                    <div class="panel-body">
                        <div class="row">
                            <form id="end<?php echo e($key); ?>" class="form-horizontal" action="#" method="post"
                                  accept-charset="utf-8" enctype="multipart/form-data">

                                <input type="hidden" name="idsh" id="idsh"
                                       value="<?php echo e((isset($obj['idsh']) ? $obj['idsh'] : null)); ?>">

                                <input type="hidden" name="idendereco" id="idendereco"
                                       value="<?php echo e((isset($obj['idendereco']) ? $obj['idendereco'] : null)); ?>">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="tipo">Tipo</label>
                                    <div class="col-sm-2">
                                        <select name="tipo" class="form-control" id="tipo">
                                            <option value="">Selecione...</option>
                                            <option value="1">Casa</option>
                                            <option value="2">Apartamento</option>
                                            <option value="3">Barraco</option>
                                            <option value="4">Cortiço</option>
                                            <option value="5">Pensão</option>
                                        </select>
                                    </div>

                                    <label class="col-sm-2 control-label" for="situacao">Situação</label>
                                    <div class="col-sm-2">
                                        <select name="situacao" class="form-control" id="situacao">
                                            <option value="">Selecione...</option>
                                            <option value="1">Próprio</option>
                                            <option value="2">Financiado</option>
                                            <option value="3">Alugado</option>
                                            <option value="4">Cedido</option>
                                            <option value="5">Invadido</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-1 control-label" for="valor">Valor</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" maxlength="20"
                                               name="valor" id="valor"
                                               value="<?php echo e((isset($obj['valor']) ? $obj['valor'] : null)); ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10 col-sm-offset-2">
                                        <div class="col-sm-2">
                                            <div class="checkbox checkbox-success">
                                                <input id="agua" name="agua" value="1" type="checkbox">
                                                <label for="agua">
                                                    <strong>Água</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="checkbox checkbox-success">
                                                <input id="esgoto" name="esgoto" value="1" type="checkbox">
                                                <label for="esgoto">
                                                    <strong>Esgoto</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="checkbox checkbox-success">
                                                <input id="energia" name="energia" value="1" type="checkbox">
                                                <label for="energia">
                                                    <strong>Energia</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="checkbox checkbox-success">
                                                <input id="pavimento" name="pavimento" value="1" type="checkbox">
                                                <label for="pavimento">
                                                    <strong>Pavimento</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="checkbox checkbox-success">
                                                <input id="coleta_lixo" name="coleta_lixo" value="1" type="checkbox">
                                                <label for="coleta_lixo">
                                                    <strong>Coleta de Lixo</strong>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="qtde_comodos">Qtde. Cômodos</label>
                                    <div class="col-sm-1">
                                        <input type="text" class="form-control text-center" maxlength="3"
                                               name="qtde_comodos" id="qtde_comodos"
                                               value="<?php echo e((isset($obj['qtde_comodos']) ? $obj['qtde_comodos'] : null)); ?>">
                                    </div>
                                    <label class="col-sm-2 control-label" for="qtde_pessoas">Qtde. Pessoas</label>
                                    <div class="col-sm-1">
                                        <input type="text" class="form-control text-center" maxlength="3"
                                               name="qtde_pessoas" id="qtde_pessoas"
                                               value="<?php echo e((isset($obj['qtde_pessoas']) ? $obj['qtde_pessoas'] : null)); ?>">
                                    </div>
                                    <label class="col-sm-2 col-sm-offset-1 control-label" for="espaco">Espaço</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control text-center" name="espaco" id="espaco"
                                               value="<?php echo e((isset($obj['espaco']) ? $obj['espaco'] : null)); ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="obs">Observações</label>
                                    <div class="col-sm-9">
                                        <textarea class="summernote" id="obs" name="obs"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $('.summernote').summernote({
            height: 100,
            lang: 'pt-BR',
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("modal"); ?>
    
    <div class="modal fade hmodal-info" id="modalIU" tabindex="-1" role="dialog" aria-hidden="true"
         data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>