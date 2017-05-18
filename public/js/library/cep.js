$(document).ready(function(){

    var campoCEP = $('#campoCep');
//    var campoCEP = $('input[type=text][name=NM_CEP_ALU]');
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
                    
                    $('#campoEndereco').val(data['tipoDeLogradouro']+' '+data['logradouro']);
                    $('#campoBairro').val(data['bairro']);
                    $('#campoCidade').val(data['cidade']);
                    $('#campoEstado').val(data['estado']);
                }
                ,400: function(msg) { console.log(msg);  } // Bad Request
                ,404: function(msg) { console.log("CEP não encontrado!!"); } // Not Found
            }
        });
        
    });
});