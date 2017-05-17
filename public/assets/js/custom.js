$(document).ready(function(){
    
//    var botoes = $('.esconder-acao');
//    botoes.hide();
//    var linha = $('tr');
//    linha.mouseenter(function(){
//        botoes.show();
//    });
//    linha.mouseleave(function(){
//        botoes.hide();
//    });

    var btnExcluir = $('.btn-danger');
    btnExcluir.click(function(event){
        event.preventDefault();
        var token = $(this).data("token");
        var id = $(this).data("id");
        swal({
            title: "Deseja continuar?",
            text: "O cadastro do aluno será excluído permanentemente!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sim, excluir!",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false
        }, function(){
            $.ajax({
                url: "/alunos/"+id,
                type: "DELETE",
                data: {
//                    _method: 'delete',
                    _token: token
//                    ID_ALUNO_ALU: id
                },
                dataType: "json",
                success:function(){
                    swal("Excluído!", "O aluno foi removido com sucesso.", "success");
                }, error: function(){
                    swal("Erro!", "Não foi possível remover o aluno.", "error");
                }
            });
        });
    });
    
//    swal({
//        title: "Deseja continuar?",
//        text: "O cadastro do aluno será excluído permanentemente!",
//        type: "warning",
//        showCancelButton: true,
//        confirmButtonColor: "#DD6B55",
//        confirmButtonText: "Sim, excluir!",
//        closeOnConfirm: false
//    }, function(){
//        swal("Excluído!", "O cadastro do aluno foi deletado com sucesso.", "success");
//    });

    $('#gridAlunos').DataTable({
        "language": {
            "lengthMenu": "Exibindo _MENU_ registros por página",
            "zeroRecords": "Nenhum registro encontrado",
            "info": "Exibindo página _PAGE_ de _PAGES_",
            "infoEmpty": "Sem registros disponíveis",
            "infoFiltered": "(Filtrado de _MAX_ registros totais)"
        }
    });
 });
