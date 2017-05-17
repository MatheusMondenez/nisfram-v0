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

    var btnExcluir = $('#btnExcluirAluno');
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
    
    var btnSalvar = $('#btnSalvarAluno');
    btnSalvar.click(function(event){
//        $.ajaxSetup({
//            header: $('meta[name="_token"]').attr('content')
//        });
        event.preventDefault();
        var token = $(this).data("token");
        $.ajax({
            url: "alunos",
            type: "POST",
            data: {
                _token: token,
                ST_NOME_ALU: "TESTE AJAX",
                NM_NIS_ALU: 4
            },
            dataType: "json",
            success:function(){
                    swal("Cadastado!", "O aluno foi cadastrado com sucesso.", "success");
                }, error: function(){
                    swal("Erro!", "Não foi possível cadastrar o aluno.", "error");
                }
        });
    });

//    $('#gridAlunos').DataTable({
//        "language": {
//            "lengthMenu": "Exibindo _MENU_ registros por página",
//            "zeroRecords": "Nenhum registro encontrado",
//            "info": "Exibindo página _PAGE_ de _PAGES_",
//            "infoEmpty": "Sem registros disponíveis",
//            "infoFiltered": "(Filtrado de _MAX_ registros totais)"
//        }
//    });
 });
