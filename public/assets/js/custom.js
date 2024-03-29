$(document).ready(function(){
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    
//    var botoes = $('.esconder-acao');
//    botoes.hide();
//    var linha = $('tr');
//    linha.mouseenter(function(){
//        botoes.show();
//    });
//    linha.mouseleave(function(){
//        botoes.hide();
//    });

    var btnExcluir = $('.delete-aluno');
    btnExcluir.click(function(event){
        event.preventDefault();
        var token = $(this).data("token");
        var id = $(this).data("id");
        var tr = $(this).closest("tr");
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
//                    _token: token // Não precisa passar o token se setar ele no meta e fazer setup aqui
//                    ID_ALUNO_ALU: id
                },
                dataType: "json",
                success:function(){
                    swal("Excluído!", "O aluno foi removido com sucesso.", "success");
                    tr.fadeOut(1000);
                }, error: function(){
                    swal("Erro!", "Não foi possível remover o aluno.", "error");
                }
            });
        });
    });
    
    $('#formSalvarAluno').submit(function(event){
        event.preventDefault();
        $.ajax({
            url: "alunos",
            type: "POST",
//            data: {
//                ST_NOME_ALU: "Teste AJAX",
//                NM_NIS_ALU: "100"
//            },
            data: $(this).serialize(),
            dataType: "json",
            success:function(data){
                swal("Sucesso!", "Teste.", "success");
//                console.log(data);
//                location.reload();
            }, error: function(){
                swal("Erro!", "Teste.", "error");
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
