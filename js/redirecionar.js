$(document).on('click', '#enviar', function(){
   
   var option = $('#opcao').val();
   
       if (option == ""){
           alert("Selecione uma opção!");
           $('select').css('border-color', 'red');
       }
       else{
           Verificar(option);
       }
});

function Verificar(option){
    
    if (option == "1"){
        window.location.href = "exercicios/ex1.html";
    }
    else if (option == "2"){
        window.location.href = "exercicios/ex2.html";
    }
    else if (option == "3"){
        window.location.href = "exercicios/ex3.html";
    }
    else if (option == "4"){
        window.location.href = "exercicios/ex4.html";
    }
    else if (option == "5"){
        window.location.href = "exercicios/ex5.html";
    }
    else{
        window.location.href = "exercicios/ex6.html";
    }
}