<?php $__env->startSection('titulo_pagina', 'Inserir Entidade'); ?>



<?php $__env->startSection('breadcrumb'); ?>
    <li>
        <span>Entidades</span>
    </li>
    <li class="active">
        <span>Inserir</span>
    </li>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form role="form1" id="form1" class="form-horizontal" method="post"
          action="<?php echo e(base_url('index.php/entidades/save')); ?>">
        <div class="form-group">
            <label class="col-sm-2 control-label">Código</label>
            <div class="col-sm-2">
                <input type="text" placeholder="Novo" class="form-control text-center" readonly id="identidade"
                       value="<?php echo e((isset($obj['identidade']) ? $obj['identidade'] : null)); ?>" name="identidade">
            </div>

            <label class="col-sm-offset-2 col-sm-2 control-label" for="cnpj">CNPJ</label>
            <div class="col-sm-4">
                <input type="text" class="form-control text-center mask_CNPJ" autofocus minlength="18"
                       value="<?php echo e((isset($obj['cnpj']) ? $obj['cnpj'] : null)); ?>" name="cnpj" id="cnpj">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="nome">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" id="nome" required maxlength="200"
                       value="<?php echo e((isset($obj['nome']) ? $obj['nome'] : null)); ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="logradouro">Logradouro</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="logradouro" id="logradouro" maxlength="200"
                       value="<?php echo e((isset($obj['logradouro']) ? $obj['logradouro'] : null)); ?>">
            </div>
            <label class="col-sm-1 control-label" for="numero">Nº</label>
            <div class="col-sm-2">
                <input type="text" class="form-control text-center" maxlength="10"
                       value="<?php echo e((isset($obj['numero']) ? $obj['numero'] : null)); ?>" name="numero" id="numero">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="bairro">Bairro</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="bairro" id="bairro" maxlength="100"
                       value="<?php echo e((isset($obj['bairro']) ? $obj['bairro'] : null)); ?>">
            </div>
            <label class="col-sm-2 control-label" for="cidade">Cidade</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" maxlength="100"
                       value="<?php echo e((isset($obj['cidade']) ? $obj['cidade'] : null)); ?>" name="cidade" id="cidade">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="estado">Estado</label>
            <div class="col-sm-4">
                <select name="estado" class="form-control" id="estado">
                    <option value="SP">SP - São Paulo</option>
                    <option value="AC">AC - Acre</option>
                    <option value="AL">AL - Alagoas</option>
                    <option value="AP">AP - Amapá</option>
                    <option value="AM">AM - Amazonas</option>
                    <option value="BA">BA - Bahia</option>
                    <option value="CE">CE - Ceará</option>
                    <option value="DF">DF - Distrito Federal</option>
                    <option value="ES">ES - Espírito Santo</option>
                    <option value="GO">GO - Goiás</option>
                    <option value="MA">MA - Maranhão</option>
                    <option value="MT">MT - Mato Grosso</option>
                    <option value="MS">MS - Mato Grosso do Sul</option>
                    <option value="MG">MG - Minas Gerais</option>
                    <option value="PA">PA - Pará</option>
                    <option value="PB">PB - Paraíba</option>
                    <option value="PR">PR - Paraná</option>
                    <option value="PE">PE - Pernambuco</option>
                    <option value="PI">PI - Piauí</option>
                    <option value="RJ">RJ - Rio de Janeiro</option>
                    <option value="RN">RN - Rio Grande do Norte</option>
                    <option value="RS">RS - Rio Grande do Sul</option>
                    <option value="RO">RO - Rondônia</option>
                    <option value="RR">RR - Roraima</option>
                    <option value="SC">SC - Santa Catarina</option>
                    <option value="SE">SE - Sergipe</option>
                    <option value="TO">TO - Tocantins</option>
                </select>
            </div>
            <label class="col-sm-offset-2 col-sm-2 control-label" for="cep">CEP</label>
            <div class="col-sm-2">
                <input type="text" class="form-control text-center mask_CEP" maxlength="10" minlength="10"
                       value="<?php echo e((isset($obj['cep']) ? $obj['cep'] : null)); ?>" name="cep" id="cep">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="telefones">Telefones</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="telefones" id="telefones" maxlength="50"
                       value="<?php echo e((isset($obj['telefones']) ? $obj['telefones'] : null)); ?>">
            </div>
            <label class="col-sm-2 control-label" for="email">Email</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" maxlength="150"
                       value="<?php echo e((isset($obj['email']) ? $obj['email'] : null)); ?>" name="email" id="email">
            </div>
        </div>

        <hr class="col-sm-offset-2">

        <div class="form-group">
            <label class="col-sm-2 control-label" for="responsavel">Nome Responsável</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="responsavel" id="responsavel" required maxlength="200"
                       value="<?php echo e((isset($obj['responsavel']) ? $obj['responsavel'] : null)); ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="resp_tel">Telefone Resp.</label>
            <div class="col-sm-4">
                <input type="text" class="form-control mask_fone" name="resp_tel" id="resp_tel" maxlength="16"
                       value="<?php echo e((isset($obj['resp_tel']) ? $obj['resp_tel'] : null)); ?>">
            </div>
            <label class="col-sm-2 control-label" for="email">Email Resp.</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" maxlength="150" name="resp_email" id="resp_email"
                       value="<?php echo e((isset($obj['resp_email']) ? $obj['resp_email'] : null)); ?>">
            </div>
        </div>

        <div class="col-sm-offset-2">
            <a href="<?php echo e(base_url('index.php/entidades/index')); ?>" class="btn btn-default" id="voltar" name="voltar">
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
        <?php if(isset($obj['estado'])): ?>
        $("#estado").val("<?php echo e($obj['estado']); ?>").trigger('change');
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>