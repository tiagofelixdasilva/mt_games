<pre><?php
require_once 'classes/Acesso.php';

$dados = mysqli_query($link,"SELECT * FROM cadastro");




?></pre>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="css/estilo3.css">
   <link rel="stylesheet" href="css/tabela.css">
</head>
<body>
<!-- inicio do menu -->
      <nav id="menu">
       <label for="btn"><img id="menulg" src="imagens/menu-tres-barras-destacadas.gif" alt=""></label>
       <input type="checkbox" name="home" id="btn"> 
       
       <ul>
         <li><a href="index3.php">Home</a></li>
         <li><a href="creditos.php">Créditos</a></li>
         <li><a href="index4.php">Comprar</a></li>
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
 
<div class="tabela">
    <table>
        <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>TELEFONE</td>
            <td>E_MAIL</td>
        </tr>
       <?php 
        while($campo = mysqli_fetch_array($dados))  {
           ?>
       <tr>
           <td class="campo"><?php echo $campo['id'];?></td>
           <td class="campo"><?php echo $campo['nome'];?></td>
           <td class="campo"><?php echo $campo['telefone'];?></td>
           <td class="campo"><?php echo $campo['email'];}?></td>
       </tr>
  </table>
</div>










<footer>

</footer>




  
</body>
</html>