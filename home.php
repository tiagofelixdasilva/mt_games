<?php
   session_start();
   require_once 'classes/Acesso.php';
         
   if(empty($_SESSION['login'])):
       header('location:index.php');
   endif;
      
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/menu.css">
   <title>Document</title>
   
</head>

<body>

<!--  inicio do menu -->
<nav class="menu">
<div class="login">
   <div class="foto-login"></div>
</div>

<ul class="menu_lista">
   <li><a href="">home</a></li>
   <li><a href="">foos</a></li>
   <li><a href="">contrato</a></li>
   <li><a href="">recarga</a></li>
</ul>

   <form action="" class="form">
       <input type="text" name="pesquisa">
       <input type="submit" value=" &#x2315;" name="submit">
   </form>

</nav>

<section id="container">
   <img src="imagens/logo.gif" alt="">
</section>




  
</body>
</html>