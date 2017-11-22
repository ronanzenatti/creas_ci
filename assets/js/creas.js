$.fn.select2.defaults.set("theme", "bootstrap");
$.fn.select2.defaults.set("language", "pt-BR");
$.fn.select2.defaults.set("width", "100%");
$('select').select2();


function deletarRegistro(tabela, id) {
    var base_url = "/CREAS_CI/index.php/";
    swal({
        title: "Deletar Registro",
        text: "Deseja deletar o registro #" + id + "?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Sim, Deletar!",
        cancelButtonText: "Não, Cancelar.",
        confirmButtonClass: "btn-danger",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            $.ajax({
                url: base_url + tabela + "/deletar",
                type: "POST",
                data: {
                    id: id
                },
                success: function (data) {
                    $('table').DataTable().ajax.reload();
                    swal("Deletado!", "Seu Registro foi Deletado com Sucesso!", "success");
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        } else {
            swal("Cancelado", "Nenhum registro foi deletado.", "error");
        }
    });
}