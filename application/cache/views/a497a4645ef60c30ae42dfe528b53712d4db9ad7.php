<?php $__env->startSection('titulo_pagina', 'Inserir Adolecente'); ?>



<?php $__env->startSection('breadcrumb'); ?>
    <a href="<?php echo e(base_url('index.php/adolecentes')); ?>" class="btn btn-default" id="voltar" name="voltar">
        <i class="fa fa-reply"></i> Voltar</a> &nbsp;
    <button onclick="salvar()" class="btn btn-success">Salvar <i class="fa fa-save"></i></button>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <form role="form1" id="form1" class="form-horizontal" method="post"
          action="<?php echo e(base_url('index.php/adolecentes/save')); ?>">
        <div class="text-center m-b-md" id="wizardControl">

            <a class="btn btn-primary" href="#step1" data-toggle="tab">Dados Pessoais</a>
            <a class="btn btn-default" href="#step2" data-toggle="tab">Documentos</a>
            <a class="btn btn-default" href="#step3" data-toggle="tab">Endereços</a>
            <a class="btn btn-default" href="#step4" data-toggle="tab">Contatos</a>
            <a class="btn btn-default" href="#step5" data-toggle="tab">Trabalhos</a>

        </div>

        <div class="tab-content">

            <div id="step1" class="p-m tab-pane active">
                <div class="row">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Código</label>
                        <div class="col-sm-2">
                            <input type="text" placeholder="Novo" class="form-control text-center" readonly
                                   value="<?php echo e((isset($obj['idpessoa']) ? $obj['idpessoa'] : null)); ?>"
                                   name="idpessoa" id="idpessoa">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nome">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nome" id="nome" autofocus maxlength="100"
                                   required value="<?php echo e((isset($obj['nome']) ? $obj['nome'] : null)); ?>" minlength="3">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nome_tratamento">Nome Tratamento</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nome_tratamento" id="nome_tratamento"
                                   autofocus maxlength="100"
                                   required
                                   value="<?php echo e((isset($obj['nome_tratamento']) ? $obj['nome_tratamento'] : null)); ?>"
                                   minlength="3">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="dt_nasc">Nascimento</label>
                        <div class="col-sm-2">
                            <div class="input-group date">
                                <input type="text" class="form-control mask_date text-center datepicker" maxlength="10"
                                       name="dt_nasc" id="dt_nasc"
                                       value="<?php echo e((isset($obj['dt_nasc']) ? $obj['dt_nasc'] : null)); ?>">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>

                        <label class="col-sm-1 control-label" for="sexo">Sexo</label>
                        <div class="col-sm-2">
                            <select name="sexo" class="form-control" id="sexo" required>
                                <option value="">Selecione...</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                                <option value="O">Outro</option>
                            </select>
                        </div>

                        <label class="col-sm-2 control-label" for="estado_civil">Estado Civil</label>
                        <div class="col-sm-3">
                            <select name="estado_civil" class="form-control" id="estado_civil">
                                <option value="">Selecione...</option>
                                <option value="M">Solteiro(a)</option>
                                <option value="F">Casado(a)</option>
                                <option value="V">Viúvo(a)</option>
                                <option value="J">Separação Judicial</option>
                                <option value="D">Divorciado(a)</option>
                                <option value="U">União Estável</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="obs">Observações</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="obs" id="obs" maxlength="255"
                                   value="<?php echo e((isset($obj['obs']) ? $obj['obs'] : null)); ?>">
                        </div>
                    </div>

                </div>

                <div class="text-right m-t-xs">
                    <a class="btn btn-default prev" href="#">Anterior</a>
                    <a class="btn btn-default next" href="#">Próximo</a>
                </div>

            </div>

            <div id="step2" class="p-m tab-pane">

                <div class="row">
                    <input type="hidden" id="iddocumento" name="iddocumento"
                           value="<?php echo e((isset($obj['iddocumento']) ? $obj['iddocumento'] : null)); ?>">

                    <fieldset>
                        <legend class="text-info">Certidão de Nascimento / Casamento</legend>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="cert_nasc">Nº</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="cert_nasc" id="cert_nasc"
                                       value="<?php echo e((isset($obj['cert_nasc']) ? $obj['cert_nasc'] : null)); ?>">
                            </div>
                            <label class="col-sm-2 control-label" for="cert_livro">Livro</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="cert_livro" id="cert_livro" maxlength="10"
                                       value="<?php echo e((isset($obj['cert_livro']) ? $obj['cert_livro'] : null)); ?>">
                            </div>
                            <label class="col-sm-2 control-label" for="cert_folhas">Folhas</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="cert_folhas" id="cert_nasc" maxlength="15"
                                       value="<?php echo e((isset($obj['cert_folhas']) ? $obj['cert_folhas'] : null)); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="cert_cartorio">Cartório</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cert_cartorio" id="cert_cartorio"
                                       maxlength="150"
                                       value="<?php echo e((isset($obj['cert_cartorio']) ? $obj['cert_cartorio'] : null)); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="bairro_cartorio">Bairro</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="bairro_cartorio" id="bairro_cartorio"
                                       maxlength="50"
                                       value="<?php echo e((isset($obj['bairro_cartorio']) ? $obj['bairro_cartorio'] : null)); ?>">
                            </div>
                            <label class="col-sm-2 control-label" for="municipio_cartorio">Cidade</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" maxlength="50"
                                       value="<?php echo e((isset($obj['municipio_cartorio']) ? $obj['municipio_cartorio'] : null)); ?>"
                                       name="municipio_cartorio" id="municipio_cartorio">
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="text-info">CPF / RG / CTPS / Titulo de Eleitor</legend>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="CPF">CPF</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control mask_CPF" name="CPF" id="CPF" maxlength="20"
                                       value="<?php echo e((isset($obj['CPF']) ? $obj['CPF'] : null)); ?>">
                            </div>
                            <label class="col-sm-1 control-label" for="RG">RG</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="RG" id="RG" maxlength="20"
                                       value="<?php echo e((isset($obj['RG']) ? $obj['RG'] : null)); ?>">
                            </div>
                            <label class="col-sm-2 control-label" for="RG_emissao">Emissão</label>
                            <div class="col-sm-2">
                                <div class="input-group date">
                                    <input type="text" class="form-control mask_date text-center datepicker"
                                           maxlength="10" name="RG_emissao" id="RG_emissao"
                                           value="<?php echo e((isset($obj['RG_emissao']) ? $obj['RG_emissao'] : null)); ?>">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="CTPS">CTPS</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="CTPS" id="CTPS"
                                       value="<?php echo e((isset($obj['CTPS']) ? $obj['CTPS'] : null)); ?>">
                            </div>
                            <label class="col-sm-2 control-label" for="CTPS_serie">Série</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="CTPS_serie" id="CTPS_serie" maxlength="15"
                                       value="<?php echo e((isset($obj['CTPS_serie']) ? $obj['CTPS_serie'] : null)); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="titulo_eleitor">Titulo de Eleitor</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="titulo_eleitor" id="cert_nasc"
                                       maxlength="20"
                                       value="<?php echo e((isset($obj['titulo_eleitor']) ? $obj['titulo_eleitor'] : null)); ?>">
                            </div>
                            <label class="col-sm-1 control-label" for="te_secao">Seção</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="te_secao" id="te_secao" maxlength="10"
                                       value="<?php echo e((isset($obj['te_secao']) ? $obj['te_secao'] : null)); ?>">
                            </div>
                            <label class="col-sm-2 control-label" for="te_zona">Zona</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="te_zona" id="te_zona" maxlength="10"
                                       value="<?php echo e((isset($obj['te_zona']) ? $obj['te_zona'] : null)); ?>">
                            </div>
                        </div>

                    </fieldset>

                    <fieldset>
                        <legend class="text-info">Alistamento Militar</legend>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="CAM">CAM</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="CAM" id="CAM" maxlength="20"
                                       value="<?php echo e((isset($obj['CAM']) ? $obj['CAM'] : null)); ?>">
                            </div>
                            <label class="col-sm-2 control-label" for="CDI">CDI</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="CDI" id="CDI" maxlength="20"
                                       value="<?php echo e((isset($obj['CDI']) ? $obj['CDI'] : null)); ?>">
                            </div>
                            <label class="col-sm-2 control-label" for="CR">CR</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="CR" id="CR" maxlength="20"
                                       value="<?php echo e((isset($obj['CR']) ? $obj['CR'] : null)); ?>">
                            </div>
                        </div>
                    </fieldset>
                    <hr>
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-danger" for="providenciar">Providenciar</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="providenciar" id="providenciar"
                                   maxlength="255"
                                   value="<?php echo e((isset($obj['providenciar']) ? $obj['providenciar'] : null)); ?>">
                        </div>
                    </div>


                </div>
                <div class="text-right m-t-xs">
                    <a class="btn btn-default prev" href="#">Anterior</a>
                    <a class="btn btn-default next" href="#">Próximo</a>
                </div>

            </div>
            <div id="step3" class="tab-pane">
                <table id="tableEnd" class="table table-striped table-bordered table-hover" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Logradouro</th>
                        <th>Nº</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Mudança</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <div class="text-right m-t-xs">
                    <button class="btn btn-info " type="button" onclick=""><i class="fa fa-plus-circle"></i> Novo
                    </button>
                    <a class="btn btn-default prev" href="#">Anterior</a>
                    <a class="btn btn-default next" href="#">Próximo</a>
                </div>
            </div>

            <div id="step4" class="p-m tab-pane">
                <table id="tableEnd" class="table table-striped table-bordered table-hover" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Tipo</th>
                        <th>Contato</th>
                        <th>Ativo</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <div class="text-right m-t-xs">
                    <button class="btn btn-info " type="button" onclick=""><i class="fa fa-plus-circle"></i> Novo
                    </button>
                    <a class="btn btn-default prev" href="#">Anterior</a>
                    <a class="btn btn-default next" href="#">Próximo</a>
                </div>
            </div>

            <div id="step5" class="p-m tab-pane">
                <table id="tableEnd" class="table table-striped table-bordered table-hover" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Descrição</th>
                        <th>Empresa</th>
                        <th>Inicio</th>
                        <th>Ativo</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <div class="text-right m-t-xs">
                    <button class="btn btn-info " type="button" onclick=""><i class="fa fa-plus-circle"></i> Novo
                    </button>
                    <a class="btn btn-default prev" href="#">Anterior</a>
                    <a class="btn btn-default next" href="#">Próximo</a>
                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $("#form1").validate();
        $(function () {

            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $('a[data-toggle="tab"]').removeClass('btn-primary');
                $('a[data-toggle="tab"]').addClass('btn-default');
                $(this).removeClass('btn-default');
                $(this).addClass('btn-primary');
            })

            $('.next').click(function () {
                var nextId = $(this).parents('.tab-pane').next().attr("id");
                $('[href="#' + nextId + '"]').tab('show');
            })

            $('.prev').click(function () {
                var prevId = $(this).parents('.tab-pane').prev().attr("id");
                $('[href="#' + prevId + '"]').tab('show');
            })

            $('.submitWizard').click(function () {

                var approve = $(".approveCheck").is(':checked');
                if (approve) {
                    // Got to step 1
                    $('[href=#step1]').tab('show');

                    // Serialize data to post method
                    var datastring = $("#simpleForm").serialize();

                    // Show notification
                    swal({
                        title: "Thank you!",
                        text: "You approved our example form!",
                        type: "success"
                    });
//            Example code for post form
//            $.ajax({
//                type: "POST",
//                url: "your_link.php",
//                data: datastring,
//                success: function(data) {
//                    // Notification
//                }
//            });
                } else {
                    // Show notification
                    swal({
                        title: "Error!",
                        text: "You have to approve form checkbox.",
                        type: "error"
                    });
                }
            })
        });

        $(function () {
            $('table').dataTable({
                responsive: true,
                
                        
                        
                        
                        
                        
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>