$(document).ready( function() {
    /* Executa a requisição quando o campo CEP perder o foco */
    
    /*cep e numero de forma correta com plugin mask*/
    $('#cep').mask('00000-000');
    $('#numero').mask('0000');
    
    $('#cep').blur(function(){
            /* Configura a requisição AJAX */
            $.ajax({
                 url : 'consultar_cep.php',  
                 type : 'POST', 
                 data: 'cep=' + $('#cep').val(), 
                 dataType: 'json', 
                 success: function(data){
                     if(data.sucesso == 1){
                         $('#rua').val(data.rua);
                         $('#bairro').val(data.bairro);
                         $('#cidade').val(data.cidade);
                         $('#estado').val(data.estado);
                         $('#numero').focus();
                     }
                 }
            });   
    return false;    
    });
 });