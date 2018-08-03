@extends('template.template')

@section('titulo_pagina', 'Gestão da Situação Habitacional')

{{--@section('title_panel', 'Cadastrar um novo Cargo.')--}}

@section('breadcrumb')
	<a href="{{base_url('situacao_habitacional')}}" class="btn btn-default btn-xs" id="voltar" name="voltar">
		<i class="fa fa-reply"></i> Voltar</a> &nbsp;
@endsection

@section('content')
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<h3 class="font-extra-bold text-info">
			{{$objP['nome']}}
			<small> - <strong>RG: </strong>{{($objD['RG']) ? $objD['RG'] : ""}}</small>
		</h3>
		<h4>Responsável: <span class="font-normal">{{($objA['responsavel']) ? $objA['responsavel'] : ""}}</span></h4>
		<hr/>
		@foreach($objE as $key => $e)
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="heading{{$key}}">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key}}" aria-expanded="true"
						   aria-controls="collapse{{$key}}">
							{{$e['logradouro'] . ", " . $e['numero'] . " - " . $e['descricao']}}
						</a>
						<button class="btn btn-xs btn-success pull-right" type="button"
								onclick="salvarSH('end{{$key}}')">Salvar
						</button>
					</h4>
				</div>
				<div id="collapse{{$key}}" class="panel-collapse collapse" role="tabpanel"
					 aria-labelledby="heading{{$key}}">
					<div class="panel-body">
						<div class="row">
							<form id="end{{$key}}" class="form-horizontal" action="#" method="post"
								  accept-charset="utf-8" enctype="multipart/form-data">

								<input type="hidden" name="idsh" id="idsh"
									   value="{{(isset($e['s']['idsh']) ? $e['s']['idsh'] : null)}}">

								<input type="hidden" name="idendereco" id="idendereco"
									   value="{{(isset($e['idendereco']) ? $e['idendereco'] : null)}}">

								<div class="form-group">
									<label class="col-sm-2 control-label" for="tipo">Tipo</label>
									<div class="col-sm-2">
										<select name="tipo" class="form-control" id="tipo">
											<option value="">Selecione...</option>
											<option value="1" {{($e['s']['tipo'] == 1) ? "selected" : ""}}>Casa</option>
											<option value="2" {{($e['s']['tipo'] == 2) ? "selected" : ""}}>Apartamento
											</option>
											<option value="3" {{($e['s']['tipo'] == 3) ? "selected" : ""}}>Barraco
											</option>
											<option value="4" {{($e['s']['tipo'] == 4) ? "selected" : ""}}>Cortiço
											</option>
											<option value="5" {{($e['s']['tipo'] == 5) ? "selected" : ""}}>Pensão
											</option>
										</select>
									</div>

									<label class="col-sm-2 control-label" for="situacao">Situação</label>
									<div class="col-sm-2">
										<select name="situacao" class="form-control" id="situacao">
											<option value="">Selecione...</option>
											<option value="1" {{($e['s']['situacao'] == 1) ? "selected" : ""}}>Próprio
											</option>
											<option value="2" {{($e['s']['situacao'] == 2) ? "selected" : ""}}>
												Financiado
											</option>
											<option value="3" {{($e['s']['situacao'] == 3) ? "selected" : ""}}>Alugado
											</option>
											<option value="4" {{($e['s']['situacao'] == 4) ? "selected" : ""}}>Cedido
											</option>
											<option value="5" {{($e['s']['situacao'] == 5) ? "selected" : ""}}>
												Invadido
											</option>
										</select>
									</div>
									<label class="col-sm-1 control-label" for="valor">Valor</label>
									<div class="col-sm-2">
										<input type="text" class="form-control Money2 text-right" maxlength="20"
											   name="valor" id="valor"
											   value="{{(isset($e['s']['valor']) ? $e['s']['valor'] : null)}}">
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-10 col-sm-offset-2">
										<div class="col-sm-2">
											<div class="checkbox checkbox-success">
												<input id="agua" name="agua" value="1" type="checkbox"
														{{($e['s']['agua']) ? "checked" : ""}}>
												<label for="agua">
													<strong>Água</strong>
												</label>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="checkbox checkbox-success">
												<input id="esgoto" name="esgoto" value="1" type="checkbox"
														{{($e['s']['esgoto']) ? "checked" : ""}}>
												<label for="esgoto">
													<strong>Esgoto</strong>
												</label>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="checkbox checkbox-success">
												<input id="energia" name="energia" value="1" type="checkbox"
														{{($e['s']['energia']) ? "checked" : ""}}>
												<label for="energia">
													<strong>Energia</strong>
												</label>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="checkbox checkbox-success">
												<input id="pavimento" name="pavimento" value="1" type="checkbox"
														{{($e['s']['pavimento']) ? "checked" : ""}}>
												<label for="pavimento">
													<strong>Pavimento</strong>
												</label>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="checkbox checkbox-success">
												<input id="coleta_lixo" name="coleta_lixo" value="1" type="checkbox"
														{{($e['s']['coleta_lixo']) ? "checked" : ""}}>
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
										<input type="number" class="form-control text-center" maxlength="3"
											   name="qtde_comodos" id="qtde_comodos"
											   value="{{(isset($e['s']['qtde_comodos']) ? $e['s']['qtde_comodos'] : null)}}">
									</div>
									<label class="col-sm-2 control-label" for="qtde_pessoas">Qtde. Pessoas</label>
									<div class="col-sm-1">
										<input type="number" class="form-control text-center" maxlength="3"
											   name="qtde_pessoas" id="qtde_pessoas"
											   value="{{(isset($e['s']['qtde_pessoas']) ? $e['s']['qtde_pessoas'] : null)}}">
									</div>
									<label class="col-sm-2 col-sm-offset-1 control-label" for="espaco">Espaço</label>
									<div class="col-sm-2">
										<input type="text" class="form-control text-center Money2" name="espaco"
											   id="espaco"
											   value="{{(isset($e['s']['espaco']) ? $e['s']['espaco'] : null)}}"
											   maxlength="7">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="obs">Observações</label>
									<div class="col-sm-9">
										<textarea class="summernote" id="obs"
												  name="obs">{{(isset($e['s']['obs']) ? $e['s']['obs'] : null)}}</textarea>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@endsection

@section('js')
	<script>
		var url = "{{base_url() . ""}}";
		$('.summernote').summernote({
			height: 100,
			lang: 'pt-BR',
		});

		function salvarSH(form) {
			$.ajax({
				url: url + 'situacao_habitacional/save',
				type: 'POST',
				data: {
					form: $('#' + form).serialize()
				},
				beforeSend: function () {
					$.blockUI({message: '<h3><img src="{{base_url('assets/img/')}}busy.gif" /> Aguarde...</h3>'});
				},
				success: function (result) {
					$.unblockUI();
					$('#' + form  + ' #idsh').val(result);
					swal({
						title: 'Sucesso!!!',
						text: 'Salvo com Sucesso.',
						type: 'success',
						customClass: 'animated tada'
					});
				},
				error: function () {
					$.unblockUI();
					swal({
						title: 'Ops!!!',
						text: 'Erro ao Salvar.',
						type: 'error',
						customClass: 'animated tada'
					});
				}
			});
		}
	</script>
@endsection

@section("modal")
	{{---------------- MODAL  -------------------------------------------------------------------}}
	<div class="modal fade hmodal-info" id="modalIU" tabindex="-1" role="dialog" aria-hidden="true"
		 data-backdrop="static">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

			</div>
		</div>
	</div>
@endsection
