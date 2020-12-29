<?php

           require_once 'classes/Acesso.php';
         
         
         ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo-index.css">
  
    
</head>
<body>
    <div class="input">
        <form id="form" name="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
         <h1>Acesse</h1>
         <P>Nome id:</P>
         <p><input type="text" name="id" maxlength="20" size="40"></p>
         <p>Senha</p>
         <p><input type="password" name="senha" maxlength="8" size="40"></p>
         <p><input id="enviar" value="enviar" name="btn" type="submit" width=""></p>
         <p><a href="cadastro.php">nao e membro? faca se cadastro.</a> </p>
         
         
         <p><?php  if(!empty($msg)){?><span class="msg-error"><?php
        foreach($msg as  $error){
        echo $error . '<br>';
        unset($error);}}
        ?></span></p>




        
        </form>
        <script src="sweetalert2/dist/sweetalert2.min.js"></script>
        <script type="text/javascript" src="js/comandos.js"></script>
    </div>
</body>
</html>