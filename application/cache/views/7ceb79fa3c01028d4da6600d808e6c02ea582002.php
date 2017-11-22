<div class="color-line"></div>
<div class="modal-header">
    <h4 class="modal-title font-bold">Lista de Contatos</h4>
</div>
<div class="modal-body">
    <h3><strong class="text-info"><?php echo e($obj['nome']); ?></strong></h3><br/>
    <table id="tableCont" class="table table-striped table-bordered table-hover" cellspacing="0">
        <thead>
        <tr>
            <th>Descrição</th>
            <th>Tipo</th>
            <th>Contato</th>
            <th>Ativo</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
</div>

<script>
    var idpessoa = "<?php echo e($obj['idpessoa']); ?>";
    $('#tableCont').DataTable({
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
            {targets: [3], orderable: false},
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
</script>