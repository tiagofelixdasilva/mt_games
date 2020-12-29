<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="css/estilo3.css">
</head>
<body>

      <nav id="menu">
         <label for="btn"><img id="menulg" src="imagens/menu-tres-barras-destacadas.gif" alt=""></label>
         <input type="checkbox" name="home" id="btn"> 
       
       <ul>
            <li><a href="index3.php">Home</a></li>
            <li><a href="">Créditos</a></li>
            <li><a href="">Comprar</a></li>
            <li id="par"><a href="">Compra de jogos parcelados</a></li>
       </ul> <a href="index.php"> sair 	&#8678;</a>
      
       <?php

         if(!isset($_SESSION['saldo'])){
            echo"seu saldo e R$ <span class='red'> 0,00</span>";
            }
            else{
               echo"<span class='verde'>Seu saldo e R$</span>"."  " .  " " . number_format($_SESSION['saldo'], 2, ',', '.');}
            ?>
    


   <form action="credito2.php" id="form" method="GET">
            <fieldset> <legend><p>Escolha um valor</p></legend>
              <label for="cd1"><p>Credito de $ 20,00  <input type="radio" name="num" value="1"  class="radio" id="cd1" checked></p></label>
              <label for="cd2"><p>Credito de $ 30,00  <input type="radio" name="num" value="2"  class="radio" id="cd2"></p></label>
              <label for="cd3"><p>Credito de $ 40,00  <input type="radio" name="num" value="3"  class="radio" id="cd3"></p></label>
              <label for="cd4"><p>Credito de $ 50,00  <input type="radio" name="num" value="4"  class="radio" id="cd4"></p></label>
              <label for="cd5"><p>Credito de $ 60,00  <input type="radio" name="num" value="5"  class="radio" id="cd5"></p></label>
              <label for="cd6"><p>Credito de $ 70,00  <input type="radio" name="num" value="6"  class="radio" id="cd6"></p></label>
              <label for="cd7"><p>Credito de $ 80,00  <input type="radio" name="num" value="7"  class="radio" id="cd7"></p></label>
              <label for="cd8"><p>Credito de $ 90,00  <input type="radio" name="num" value="8"  class="radio" id="cd8"></p></label>
              <p><input id="enviar" type="submit" value="inserir"></p></fieldset>
   </form>

<footer></footer>
    
</body>
</html>