<div class="color-line">1</div>
<div class="modal-header">
    <h4 class="modal-title font-bold">Gestão de Endereços</h4>
</div>
<div class="modal-body">

    <form role="formEnd" id="formEnd" class="form-horizontal" action="#" method="post">

        <input type="hidden" placeholder="Novo" readonly name="idendereco" id="idendereco"
               value="<?php echo e((isset($obj['idendereco']) ? $obj['idendereco'] : null)); ?>">

        <div class="form-group">
            <label class="col-sm-2 control-label" for="descricao">Descrição</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="descricao" id="descricao"
                       autofocus maxlength="100" required minlength="3"
                       placeholder='Uma identificação do Endereço Ex: "Casa da Mãe"'
                       value="<?php echo e((isset($obj['descricao']) ? $obj['descricao'] : null)); ?>">
            </div>
            <div class="col-sm-2">
                <div class="checkbox checkbox-success">
                    <input id="ativo_end" name="ativo_end" type="checkbox" checked>
                    <label for="ativo_end">
                        <strong>Ativo</strong>
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="logradouro">Logradouro</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="logradouro" id="logradouro"
                       maxlength="200" required
                       value="<?php echo e((isset($obj['logradouro']) ? $obj['logradouro'] : null)); ?>">
            </div>
            <label class="col-sm-1 control-label" for="numero">Nº</label>
            <div class="col-sm-2">
                <input type="text" class="form-control text-center" maxlength="10"
                       name="numero" id="numero"
                       value="<?php echo e((isset($obj['numero']) ? $obj['numero'] : null)); ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="bairro">Bairro</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="bairro" id="bairro"
                       maxlength="100" value="<?php echo e((isset($obj['bairro']) ? $obj['bairro'] : null)); ?>">
            </div>
            <label class="col-sm-2 control-label" for="cidade">Cidade</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" maxlength="100" name="cidade"
                       id="cidade" value="<?php echo e((isset($obj['cidade']) ? $obj['cidade'] : null)); ?>">
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
            <label class="col-sm-2 control-label" for="cep">CEP</label>
            <div class="col-sm-4">
                <input type="text" class="form-control text-center mask_CEP" maxlength="10"
                       minlength="10" name="cep" id="cep"
                       value="<?php echo e((isset($obj['cep']) ? $obj['cep'] : null)); ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="complemento">Complemento</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="complemento" id="complemento"
                       maxlength="45" value="<?php echo e((isset($obj['complemento']) ? $obj['complemento'] : null)); ?>">
            </div>
            <label class="col-sm-2 control-label" for="referencia">Referência</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" maxlength="45" name="referencia"
                       id="referencia" value="<?php echo e((isset($obj['referencia']) ? $obj['referencia'] : null)); ?>">
            </div>
        </div>
        <div id="mudanca_div">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="dt_mudanca">Data da Mudança</label>
                <div class="col-sm-4">
                    <div class="input-group date">
                        <input type="text" class="form-control mask_date text-center datepicker"
                               maxlength="10" name="dt_mudanca" id="dt_mudanca"
                               value="<?php echo e((isset($obj['dt_mudanca']) ? $obj['dt_mudanca'] : null)); ?>">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="motivo">Motivo</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="motivo" name="motivo"
                              style="resize: vertical"><?php echo e((isset($obj['motivo']) ? $obj['motivo'] : null)); ?></textarea>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="button" class="btn btn-success salvaEnd">Salvar</button>
</div>
<script>

    <?php if(isset($obj['estado'])): ?>
    $("#estado").val("<?php echo e($obj['estado']); ?>").trigger('change');
    <?php endif; ?>

    if ($("#dt_mudanca").val().length != 0) {
        $("#ativo_end").prop("checked", false);
    }

    if ($("#ativo_end").is(':checked')) {
        $("#mudanca_div").hide();
    }

    $("#ativo_end").on("change", function () {
        // verifica se foi selecionado
        if ($(this).is(':checked')) {
            $("#mudanca_div").hide();
        } else {
            // não: não mostro o campo select
            $("#mudanca_div").show();
        }
    });

    $(".salvaEnd").on("click", function () {
        if ($('#formEnd').valid()) {
            $.ajax({
                url: url + 'enderecos/save',
                type: 'POST',
                data: {
                    form: $('#formEnd').serialize(),
                    idpessoa: idpessoa
                },
                success: function (result) {
                    $("#tableEnd").DataTable().ajax.reload();
                    $("#modalIU").modal('hide');
                }
            });
            tableEnd.clear().draw();
        } else {
            return false;
        }
    });

    $('#modalIU').on('shown.bs.modal', function () {
        $('#descricao').focus();
        $('.datepicker').datepicker({
            language: 'pt-BR'
        });
        $('.input-group.date').datepicker({
            language: 'pt-BR'
        });
    });
</script>