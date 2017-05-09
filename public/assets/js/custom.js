$(document).ready(function(){
    var botoes = $('.esconder-acao');
    botoes.hide();
    var linha = $('tr');
    linha.mouseenter(function(){
        botoes.show();
    });
    linha.mouseleave(function(){
        botoes.hide();
    });
 });