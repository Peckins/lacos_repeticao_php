//Funções de validação de dados

$(document).on('submit', '#depositar', function(){
   var valor = $('#valor').val();
   
   if (valor < 0){
       alert("Valor inválido!");
       return false;
   }
   else if (valor == 0){
       alert("Valor inválido!");
       return false;
   }
   
});

$(document).on('submit', '#retirar', function(){
    var saldo = $('#saldo').val();
    var saque = $('#saque').val();
    
        if (saque > saldo){
            alert("O valor digitado é maior do que o saldo disponível!");
            return false;
        }
        if (saque < 0){
            alert("Valor inválido!");
            return false;
        }
        if (saque == 0){
            alert("Valor inválido!");
            return false;
        }
});