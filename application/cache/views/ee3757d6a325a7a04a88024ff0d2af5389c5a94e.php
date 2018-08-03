<div class="color-line"></div>
<div class="modal-header">
	<h4 class="modal-title font-bold">Gestão de Contatos</h4>
</div>
<div class="modal-body">

	<form role="formCont" id="formCont" class="form-horizontal" action="#" method="post">

		<input type="hidden" placeholder="Novo" readonly name="idcontato" id="idcontato"
			   value="<?php echo e((isset($obj['idcontato']) ? $obj['idcontato'] : null)); ?>">

		<div class="form-group">
			<label class="col-sm-2 control-label" for="descricao">Descrição</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="descricao" id="descricao"
					   autofocus maxlength="50" required minlength="3"
					   placeholder='Uma identificação do Contato Ex: "Telefone da Mãe"'
					   value="<?php echo e((isset($obj['descricao']) ? $obj['descricao'] : null)); ?>">
			</div>
			<div class="col-sm-2">
				<div class="checkbox checkbox-success">
					<input id="ativo" name="ativo" type="checkbox" checked>
					<label for="ativo">
						<strong>Ativo</strong>
					</label>
				</div>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label" for="tipo_cont">Tipo</label>
			<div class="col-sm-3">
				<select name="tipo_cont" class="form-control" id="tipo_cont">
					<option value="C">Celular</option>
					<option value="F">Fixo</option>
					<option value="E">E-mail</option>
					<option value="O">Outros</option>
				</select>
			</div>
			<label class="col-sm-2 control-label" for="contato">Contato</label>
			<div class="col-sm-5">
				<input type="text" class="form-control text-center" maxlength="200"
					   name="contato" id="contato" required
					   value="<?php echo e((isset($obj['contato']) ? $obj['contato'] : null)); ?>">
			</div>
		</div>
	</form>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
	<button type="button" class="btn btn-success salvaCont">Salvar</button>
</div>

<script>

	<?php if(isset($obj['tipo_cont'])): ?>
	$("#tipo_cont").val("<?php echo e($obj['tipo_cont']); ?>").trigger('change');
	<?php endif; ?>

	$('#contato').focusout(function () {
		if ($("#tipo_cont").val() == 'F' || $("#tipo_cont").val() == 'C') {
			$(this).attr('type', "text");
			var phone, element;
			element = $(this);
			element.unmask();
			phone = element.val().replace(/\D/g, '');
			if (phone.length > 10) {
				element.mask("(99) 9 9999-9999");
			} else {
				element.mask("(99) 9999-9999#");
			}
		} else if ($("#tipo_cont").val() == 'E') {
			$(this).unmask();
			$(this).attr('maxlength', 200);
			$(this).attr('type', "email");
		} else {
			$(this).unmask();
			$(this).attr('type', "text");
			$(this).attr('maxlength', 200);
		}
	}).trigger('focusout');

	$(".salvaCont").on("click", function () {
		if ($('#formCont').valid()) {
			$.ajax({
				url: url + 'contatos/save',
				type: 'POST',
				data: {
					form: $('#formCont').serialize(),
					idpessoa: idpessoa
				},
				success: function (result) {
					$("#tableCont").DataTable().ajax.reload();
					$("#modalIU").modal('hide');
				}
			});
			tableCont.clear().draw();
		} else {
			return false;
		}
	});

	$("#tipo_cont").on("change", function () {
		$("#contato").focus();
		$("#descricao").focus();
		$("#contato").focus();
	});
</script>
