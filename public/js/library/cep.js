$(document).ready(function(){
    
//    var campoCEP = $('.cep');
    var campoCEP = $('input[type=text][name=NM_CEP_ALU]');
    campoCEP.blur(function(){
        var cep = campoCEP.val();
        
        $.ajax({
            url: 'http://correiosapi.apphb.com/cep/'+cep,
            dataType: 'jsonp',
            crossDomain: true,
            contentType: "application/json",
            statusCode: {
                200: function(data){ 
                    console.log(data);
                    
                    var campoEndereco = $('input[type=text][name=ST_ENDERECO_ALU]').val(data['tipoDeLogradouro']+' '+data['logradouro']);
                    var campoBairro = $('input[type=text][name=ST_BAIRRO_ALU]').val(data['bairro']);
                    var campoCidade = $('input[type=text][name=ST_CIDADE_ALU]').val(data['cidade']);
                    var campoEstado = $('input[type=text][name=ST_UF_ALU]').val(data['estado']);
                }
                ,400: function(msg) { console.log(msg);  } // Bad Request
                ,404: function(msg) { console.log("CEP não encontrado!!"); } // Not Found
            }
        });
        
    });
});