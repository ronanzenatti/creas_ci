<?php $__env->startSection('titulo_pagina', 'Inserir Funcionário'); ?>



<?php $__env->startSection('breadcrumb'); ?>
    <a href="<?php echo e(base_url('index.php/usuarios')); ?>" class="btn btn-default" id="voltar" name="voltar">
        <i class="fa fa-reply"></i> Voltar</a> &nbsp;
    <button type="button" onclick="salvar()" class="btn btn-success">Salvar <i class="fa fa-save"></i></button>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="text-center m-b-md" id="wizardControl">
        <a class="btn btn-primary" href="#step1" data-toggle="tab">Dados Pessoais</a>
        <a class="btn btn-default" href="#step2" data-toggle="tab">Documentos</a>
        <a class="btn btn-default" href="#step3" data-toggle="tab">Endereços</a>
        <a class="btn btn-default" href="#step4" data-toggle="tab">Contatos</a>
        <a class="btn btn-default" href="#step5" data-toggle="tab">Usuários</a>
    </div>

    <div class="tab-content">
        
        <div id="step1" class="p-m tab-pane active">
            <form role="formPessoa" id="formPessoa" class="form-horizontal" method="post" action="#">
                <input type="hidden" id="tipo_pessoa" name="tipo_pessoa" value="F">
                <div class="row">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Código</label>
                        <div class="col-sm-2">
                            <input type="text" placeholder="Novo" class="form-control text-center" readonly
                                   value="<?php echo e((isset($objP['idpessoa']) ? $objP['idpessoa'] : null)); ?>"
                                   name="idpessoa" id="idpessoa">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nome">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nome" id="nome" autofocus maxlength="100"
                                   required value="<?php echo e((isset($objP['nome']) ? $objP['nome'] : null)); ?>" minlength="3">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nome_tratamento">Tratamento / Vulgo</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nome_tratamento" id="nome_tratamento"
                                   maxlength="100"
                                   value="<?php echo e((isset($objP['nome_tratamento']) ? $objP['nome_tratamento'] : null)); ?>"
                                   minlength="3">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="dt_nasc">Nascimento</label>
                        <div class="col-sm-2">
                            <div class="input-group date">
                                <input type="text" class="form-control mask_date text-center datepicker" maxlength="10"
                                       name="dt_nasc" id="dt_nasc"
                                       value="<?php echo e((isset($objP['dt_nasc']) ? $objP['dt_nasc'] : null)); ?>">
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
                                <option value="S">Solteiro(a)</option>
                                <option value="C">Casado(a)</option>
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
                                   value="<?php echo e((isset($objP['obs']) ? $objP['obs'] : null)); ?>">
                        </div>
                    </div>

                </div>

                <div class="text-right m-t-xs">
                    <a class="btn btn-default prev" href="#">Anterior</a>
                    <a id="btn-step1" class="btn btn-default next" href="#">Próximo</a>
                    <button type="button" onclick="salvar()" class="btn btn-success">
                        Salvar <i class="fa fa-save"></i>
                    </button>
                </div>
            </form>
        </div>
        
        <div id="step2" class="p-m tab-pane">

            <div class="row">
                <form role="formDocumentos" id="formDocumentos" class="form-horizontal" method="post" action="#">
                    <input type="hidden" id="iddocumento" name="iddocumento"
                           value="<?php echo e((isset($objD['iddocumento']) ? $objD['iddocumento'] : null)); ?>">

                    <fieldset>
                        <legend class="text-info">Certidão de Nascimento / Casamento</legend>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="cert_nasc">Nº</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="cert_nasc" id="cert_nasc"
                                       value="<?php echo e((isset($objD['cert_nasc']) ? $objD['cert_nasc'] : null)); ?>">
                            </div>
                            <label class="col-sm-2 control-label" for="cert_livro">Livro</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="cert_livro" id="cert_livro" maxlength="10"
                                       value="<?php echo e((isset($objD['cert_livro']) ? $objD['cert_livro'] : null)); ?>">
                            </div>
                            <label class="col-sm-2 control-label" for="cert_folhas">Folhas</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="cert_folhas" id="cert_nasc" maxlength="15"
                                       value="<?php echo e((isset($objD['cert_folhas']) ? $objD['cert_folhas'] : null)); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="cert_cartorio">Cartório</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cert_cartorio" id="cert_cartorio"
                                       maxlength="150"
                                       value="<?php echo e((isset($objD['cert_cartorio']) ? $objD['cert_cartorio'] : null)); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="bairro_cartorio">Bairro</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="bairro_cartorio" id="bairro_cartorio"
                                       maxlength="50"
                                       value="<?php echo e((isset($objD['bairro_cartorio']) ? $objD['bairro_cartorio'] : null)); ?>">
                            </div>
                            <label class="col-sm-2 control-label" for="municipio_cartorio">Cidade</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" maxlength="50"
                                       value="<?php echo e((isset($objD['municipio_cartorio']) ? $objD['municipio_cartorio'] : null)); ?>"
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
                                       value="<?php echo e((isset($objD['CPF']) ? $objD['CPF'] : null)); ?>">
                            </div>
                            <label class="col-sm-1 control-label" for="RG">RG</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="RG" id="RG" maxlength="20"
                                       value="<?php echo e((isset($objD['RG']) ? $objD['RG'] : null)); ?>">
                            </div>
                            <label class="col-sm-2 control-label" for="RG_emissao">Emissão</label>
                            <div class="col-sm-2">
                                <div class="input-group date">
                                    <input type="text" class="form-control mask_date text-center datepicker"
                                           maxlength="10" name="RG_emissao" id="RG_emissao"
                                           value="<?php echo e((isset($objD['RG_emissao']) ? $objD['RG_emissao'] : null)); ?>">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="CTPS">CTPS</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="CTPS" id="CTPS"
                                       value="<?php echo e((isset($objD['CTPS']) ? $objD['CTPS'] : null)); ?>">
                            </div>
                            <label class="col-sm-2 control-label" for="CTPS_serie">Série</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="CTPS_serie" id="CTPS_serie" maxlength="15"
                                       value="<?php echo e((isset($objD['CTPS_serie']) ? $objD['CTPS_serie'] : null)); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="titulo_eleitor">Titulo de Eleitor</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="titulo_eleitor" id="cert_nasc"
                                       maxlength="20"
                                       value="<?php echo e((isset($objD['titulo_eleitor']) ? $objD['titulo_eleitor'] : null)); ?>">
                            </div>
                            <label class="col-sm-1 control-label" for="te_secao">Seção</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="te_secao" id="te_secao" maxlength="10"
                                       value="<?php echo e((isset($objD['te_secao']) ? $objD['te_secao'] : null)); ?>">
                            </div>
                            <label class="col-sm-2 control-label" for="te_zona">Zona</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="te_zona" id="te_zona" maxlength="10"
                                       value="<?php echo e((isset($objD['te_zona']) ? $objD['te_zona'] : null)); ?>">
                            </div>
                        </div>

                    </fieldset>

                    <fieldset>
                        <legend class="text-info">Alistamento Militar</legend>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="CAM">CAM</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="CAM" id="CAM" maxlength="20"
                                       value="<?php echo e((isset($objD['CAM']) ? $objD['CAM'] : null)); ?>">
                            </div>
                            <label class="col-sm-2 control-label" for="CDI">CDI</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="CDI" id="CDI" maxlength="20"
                                       value="<?php echo e((isset($objD['CDI']) ? $objD['CDI'] : null)); ?>">
                            </div>
                            <label class="col-sm-2 control-label" for="CR">CR</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="CR" id="CR" maxlength="20"
                                       value="<?php echo e((isset($objD['CR']) ? $objD['CR'] : null)); ?>">
                            </div>
                        </div>
                    </fieldset>
                    <hr>
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-danger" for="providenciar">Providenciar</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="providenciar" id="providenciar"
                                   maxlength="255"
                                   value="<?php echo e((isset($objD['providenciar']) ? $objD['providenciar'] : null)); ?>">
                        </div>
                    </div>
                </form>
            </div>
            <div class="text-right m-t-xs">
                <a class="btn btn-default prev" href="#">Anterior</a>
                <a class="btn btn-default next" href="#">Próximo</a>
            </div>
        </div>
        
        <div id="step3" class="p-m tab-pane">
            <table id="tableEnd" class="table table-striped table-bordered table-hover" cellspacing="0">
                <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Logradouro</th>
                    <th>Nº</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

            <div class="text-right m-t-xs">
                <button class="btn btn-info" onclick="iuEndereco(0)" type="button">
                    <i class="fa fa-plus-circle"></i> Novo
                </button>
                <a class="btn btn-default prev" href="#">Anterior</a>
                <a class="btn btn-default next" href="#">Próximo</a>
            </div>
        </div>
        
        <div id="step4" class="p-m tab-pane">
            <table id="tableCont" class="table table-striped table-bordered table-hover" cellspacing="0">
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
                <button class="btn btn-info addCont" type="button" onclick="iuContato(0)">
                    <i class="fa fa-plus-circle"></i> Novo
                </button>
                <a class="btn btn-default prev" href="#">Anterior</a>
                <a class="btn btn-default next" href="#">Próximo</a>
            </div>
        </div>
        
        <div id="step5" class="p-m tab-pane">
            <div class="row">
                <form role="formUsuario" id="formUsuario" class="form-horizontal" method="post" action="#">
                    <input type="hidden" id="idusuario" name="idusuario"
                           value="<?php echo e((isset($objU['idusuario']) ? $objU['idusuario'] : null)); ?>">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="identidade">Entidade</label>
                        <div class="col-sm-10">
                            <select name="identidade" class="form-control" id="identidade" required>
                                <option value="">Selecione...</option>
                                <?php $__currentLoopData = $entidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($e['identidade']); ?>"><?php echo e($e['nome']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="idcargo">Cargo</label>
                        <div class="col-sm-6">
                            <select name="idcargo" class="form-control" id="idcargo" required>
                                <option value="">Selecione...</option>
                                <?php $__currentLoopData = $cargos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($c['idcargo']); ?>"><?php echo e($c['nome']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="email">E-mail</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" id="email" maxlength="200"
                                   value="<?php echo e((isset($objU['email']) ? $objU['email'] : null)); ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="senha">Senha</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" name="password" id="password" maxlength="40">
                        </div>
                        <label class="col-sm-2 control-label" for="confirma">Confirmar Senha</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" maxlength="40" name="confirma" id="confirma">
                        </div>
                    </div>
                </form>
            </div>

            <div class="text-right m-t-xs">
                <a class="btn btn-default prev" href="#">Anterior</a>
                <a class="btn btn-default next" href="#">Próximo</a>
                <button type="button" onclick="salvar()" class="btn btn-success">Salvar <i class="fa fa-save"></i>
                </button>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        var idpessoa = $("#idpessoa").val();
        var salvoP = false;
        var salvoD = true;
        var salvoU = true;
        var url = window.location.href;
        var tableCont;
        var tableEnd;
        var i = 0;

        <?php if(isset($objP)): ?>
        $("#sexo").val("<?php echo e($objP['sexo']); ?>").trigger('change');
        $("#estado_civil").val("<?php echo e($objP['estado_civil']); ?>").trigger('change');
        <?php endif; ?>

        <?php if(isset($objU)): ?>
        $("#identidade").val("<?php echo e($objU['identidade']); ?>").trigger('change');
        $("#idcargo").val("<?php echo e($objU['idcargo']); ?>").trigger('change');
        <?php endif; ?>

            url = "<?php echo e(base_url() . "index.php/"); ?>";

        //        ------------------------------------------------------------------------------------------------------
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
        });

        //        ------------------------------------------------------------------------------------------------------


        function verificaEtapas() {
            idpessoa = $("#idpessoa").val();
//            idpessoa = 1;
            if (idpessoa != "" && i == 0) {
                tableEnd = $('#tableEnd').DataTable({
                    responsive: true,
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: url + "enderecos/Ajax_Datatables",
                        type: "POST",
                        data: {
                            idpessoa: idpessoa
                        }
                    },
                    pagingType: "full_numbers",
                    columnDefs: [
                        {targets: [6, 5], orderable: false,},
                        {targets: 5, search: false},
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

                tableCont = $('#tableCont').DataTable({
                    responsive: true,
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: url + "contatos/Ajax_Datatables",
                        type: "POST",
                        data: {
                            idpessoa: idpessoa
                        }
                    },
                    pagingType: "full_numbers",
                    columnDefs: [
                        {targets: [3, 4], orderable: false},
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

                $("#btn-step1").removeClass("disabled");
                $("a[href='#step2']").removeClass("disabled");
                $("a[href='#step3']").removeClass("disabled");
                $("a[href='#step4']").removeClass("disabled");
                $("a[href='#step5']").removeClass("disabled");
                i++;
            } else if (idpessoa == "") {
                $("#btn-step1").addClass("disabled");
                $("a[href='#step2']").addClass("disabled");
                $("a[href='#step3']").addClass("disabled");
                $("a[href='#step4']").addClass("disabled");
                $("a[href='#step5']").addClass("disabled");
            } else {
                $("#btn-step1").removeClass("disabled");
                $("a[href='#step2']").removeClass("disabled");
                $("a[href='#step3']").removeClass("disabled");
                $("a[href='#step4']").removeClass("disabled");
                $("a[href='#step5']").removeClass("disabled");
            }
        }

        $("#formPessoa").validate();
        $("#formDocumentos").validate();
        $("#formUsuario").validate({
            rules: {
                password: {
                    equalTo: "#confirma"
                },
                confirma: {
                    equalTo: "#password"
                }
            }
        });
        verificaEtapas();

        function salvar() {
            if (idpessoa != "") {
                $('[href="#step2"]').tab('show');
                if ($('#formDocumentos').valid()) {
                    $.ajax({
                        url: url + 'documentos/save',
                        type: 'POST',
                        data: {
                            form: $('#formDocumentos').serialize(),
                            idpessoa: idpessoa
                        },
                        success: function (result) {
                            $('#iddocumento').val(result);
                            if ($.isNumeric(parseInt(result))) {
                                salvoD = true;
                            } else {
                                salvoD = false;
                            }
                        },
                        error: function (jqXHR, exception) {
                            salvoD = false;
                        }
                    });
                } else {
                    return false;
                }
                $('[href="#step5"]').tab('show');
                if ($('#formUsuario').valid()) {
                    $.ajax({
                        url: url + 'usuarios/save',
                        type: 'POST',
                        data: {
                            form: $('#formUsuario').serialize(),
                            idpessoa: idpessoa
                        },
                        success: function (result) {
                            $('#idusuario').val(result);
                            if ($.isNumeric(parseInt(result))) {
                                salvoU = true;
                            } else {
                                salvoU = false;
                            }
                        },
                        error: function (jqXHR, exception) {
                            salvoU = false;
                        }
                    });
                } else {
                    return false;
                }
            }
            $('[href="#step1"]').tab('show');
            if ($('#formPessoa').valid()) {
                $.ajax({
                    url: url + 'pessoas/save',
                    type: 'POST',
                    data: {
                        form: $('#formPessoa').serialize()
                    },
                    success: function (result) {
                        if ($.isNumeric(parseInt(result))) {
                            $('#idpessoa').val(result);
                            verificaEtapas();
                            idpessoa = $('#idpessoa').val();
                            salvoP = true;
                        } else {
                            salvoP = false;
                        }
                        verifica_salvar();
                    }
                });
            } else {
                return false;
            }
            verificaEtapas();
        }

        function verifica_salvar() {
            if (salvoP && salvoD && salvoU) {
                swal({
                    title: 'Sucesso!!!',
                    text: 'Salvo com Sucesso.',
                    type: 'success',
                    customClass: 'animated tada'
                });
            } else if (salvoP == false) {
                swal({
                    title: 'Erro!!!',
                    text: 'Não foi possível salvar a Pessoa.',
                    type: 'error',
                    customClass: 'animated tada'
                });
            } else if (salvoU == false) {
                swal({
                    title: 'Erro!!!',
                    text: 'Não foi possível salvar o Usuário.',
                    type: 'error',
                    customClass: 'animated tada'
                });
            } else if (salvoD == false) {
                swal({
                    title: 'Erro!!!',
                    text: 'Não foi possível salvar os Ducumentos.',
                    type: 'error',
                    customClass: 'animated tada'
                });
            }
        }

        function iuEndereco(idE) {
            $('#modalIU').modal({
                show: true,
                keyboard: false,
            });
            $.ajax({
                url: url + 'enderecos/iu',
                type: 'POST',
                data: {
                    idE: idE,
                    idpessoa: idpessoa
                },
                success: function (result) {
                    $('.modal-content').html(result);
                }
            });
        }

        function iuContato(idC) {
            $('#modalIU').modal({
                show: true,
                keyboard: false,
            });
            $.ajax({
                url: url + 'contatos/iu',
                type: 'POST',
                data: {
                    idC: idC,
                    idpessoa: idpessoa
                },
                success: function (result) {
                    $('.modal-content').html(result);
                }
            });
        }
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