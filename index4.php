<?php
session_start();

if(empty($_SESSION['login'])):
    header('location:index.php');
endif;
           require_once 'classes/Acesso.php';
         
         
         ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>

        div#jogo1 {margin-top: 500px;}

    </style>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="css/estilo3.css">
</head>
<body>
<!-- inicio do menu -->
      <nav id="menu">
       <label for="btn"><img id="menulg" src="imagens/menu-tres-barras-destacadas.gif" alt=""></label>
       <input type="checkbox" name="home" id="btn"> 
       
       <ul>
         <li><a href="">Home</a></li>
         <li><a href="creditos.php">Créditos</a></li>
         <li><a href="creditos.php">Comprar</a></li>
         <li id="par"><a href="">cunsultar usuarios</a></li>
       </ul> <a href="index.php"> sair 	&#8678;</a>
       <?php

if(!isset($_SESSION['saldo'])){
   echo"seu saldo e R$ <span class='red'> 0,00</span>";
   }
   else{
   echo"<span class='verde'>Seu saldo e R$</span>" . " " . number_format($_SESSION['saldo'], 2, ',', '.');//formatacao em modelo de reais 
}
   ?>
      </nav>
      <!-- termino do menu -->
      <div id="jogo1"> <h2>R$ 79,90</h2>
      <img src="imagens/fifa.jpg" alt="">
      <a class="button" href="index4.php">comprar</a>
   </div>
   <div id="jogo2"><h2>R$ 59,90</h2>
      <img src="imagens/far.gif" alt="">
      <a class="button" href="index4.php">comprar</a>
   </div>
   <div id="jogo3"><h2>R$ 109,90</h2>
      <img src="imagens/gta-sa.gif" alt="">
      <a class="button" href="index4.php">comprar</a>
   </div>
   <div id="jogo4"><h2>R$ 109,90</h2>
      <img src="imagens/gta.gif" alt="">
      <a class="button" href="index4.php">comprar</a>
      
   </div>

</body>
</html>