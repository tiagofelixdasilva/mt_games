<?php

use function PHPSTORM_META\elementType;

require_once 'classes/Acesso.php';


    $tiago ='tiago';

    
   $dados = mysqli_query($link,"SELECT * FROM cadastro");
   $res = mysqli_fetch_array($dados);
      
    if($res['nome'] == $tiago):
echo'ja existe';
      

    else:
echo 'nao existe';
          

    endif;
   




    

?>