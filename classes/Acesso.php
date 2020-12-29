<pre><?php



    define("local", 'localhost');
    define("user", 'root');
    define("senha", '');
    define("banco", 'cadastro');
    $link = mysqli_connect(local, user, senha, banco);
    


    
   
     if(!empty($_POST['id'])):


        
            $nome = $_POST['id'];
            
            $senha = $_POST['senha'];
        acesso($nome,$senha);

     endif;
        
    function acesso($nome,$senha){
         global $msg , $link;
         
         
         
         $dados =  mysqli_query($link, "SELECT * FROM cadastro WHERE NOME = '$nome'");

       
         $resultado = mysqli_fetch_array($dados);

            if($resultado==null):
                 $msg[] ='USUARIO NAO INDEFICADO';

            elseif (empty($senha)):   

                
                $msg[] = 'INFORME A SENHA';
                 
                 

            elseif($resultado['senha']==null):
                $msg[] = '<h4>SENHA BLOQUEADA<h4>';
            
            
           
             elseif ($resultado['nome'] == $nome &&  !password_verify($senha,$resultado['senha'])):
            
                mysqli_query($link,"UPDATE cadastro SET cont = cont '4' WHERE nome = '$nome'");   

                $cont = $resultado['cont'];
                 $msg[] =  'SENHA INVÁLIDA <br>' . 'TENTATIVAS RESTANTES ' . $cont;
                 
                 if($cont==0):
                    
                    $msg[] = '<h4>SENHA BLOQUEADA<h4>';
                    mysqli_query($link,"UPDATE cadastro SET cont = '0' WHERE nome = '$nome'");  
                    mysqli_query($link,"UPDATE cadastro SET senha = null WHERE nome = '$nome'"); 
                 endif;   
                
                  

            else:
                session_start();
                $_SESSION['login'] = $nome; 
                    
                header('location:home.php');
        
         endif;

    }



     
    

    
    
    
    
    

 

    
  



    
 
    



  
    ?>
</pre>