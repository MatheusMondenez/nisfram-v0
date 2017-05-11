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
                url: "/alunos/destroy",
                type: "POST",
                data: {
                    ID_ALUNO_ALU: 8
                },
                dataType: "html",
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
 });
