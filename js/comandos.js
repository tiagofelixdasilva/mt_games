// funcao para verificar o acesso
var mensagem = document.getElementById('msg-sucess')




function validar() {

  
    var senha = document.getElementById('senha').value;
    var senha2 = document.getElementById('senha2').value;
    var nome = document.getElementById('nome').value;
 
    

   if(nome==""){

   
    mensagem.innerHTML='nome'
  

     
   } 


   if(senha ==""){
    mensagem.style.display='block'
       mensagem.innerHTML='senha vazia'
       
   }
    




}

