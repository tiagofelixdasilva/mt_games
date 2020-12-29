<?php

require_once './cadastro.php';
define("local", 'localhost');
define("user", 'root');
define("senha", '');
define("banco", 'cadastro');
$msg_erro = "";

class Cadastro {

    private $nome;
    private $senha;
    private $senha2;
    private $telefone;
    private $email;

    function __construct($nome, $senha, $senha2, $telefone, $email) {
        $this->nome = $nome;
        $this->senha = $senha;
        $this->senha2 = $senha2;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function verificacao($nome, $senha, $senha2, $tel, $email) {
        global $msg_erro;
        if (empty($nome)):
            return $msg_erro = "DIGITE UM NOME";
        elseif (empty($senha)):

            return $msg_erro = 'DIGITE UMA SENHA';

        elseif (strlen($senha) < 5):
            return $msg_erro = 'SENHA DEVE TER 6 DIGITOS';

        elseif ($senha != $senha2):
            return $msg_erro = 'SENHAS DIFERENTES';

        elseif (empty($tel)):
            return $msg_erro = 'PREENCHA O TELEFONE';

        elseif (empty($email)):
            return $msg_erro = 'PREENCHA O E-MAIL';

        else:

            $senha_forte = password_hash($senha, PASSWORD_DEFAULT);

            $this->acessoBanco($nome, $senha_forte, $tel, $email);


        endif;
    }

    public function acessoBanco($nome,$senha, $tel, $email) {

        global $msg_erro;


        $link = mysqli_connect(local, user, senha, banco);
    
        $sql = "INSERT INTO cadastro values ('default','$nome','$senha','$tel','$email','4')";
    
        $resultado = mysqli_query($link, $sql);

        if($resultado):

            $msg_erro = 'CADSTRO FEITO COM SUCESSO';
        else:
            
            $msg_erro= "ID DE USUÁRIO JA EM USO ";
        endif;

        

            

        
            

            mysqli_close($link);
      
    }

    private function getNome() {
        return $this->nome;
    }

    private function getSenha() {
        return $this->senha;
    }

    private function getSenha2() {
        return $this->senha2;
    }

    private function getTelefone() {
        return $this->telefone;
    }

    private function getEmail() {
        return $this->email;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    private function setSenha($senha) {
        $this->senha = $senha;
    }

    private function setSenha2($senha2) {
        $this->senha2 = $senha2;
    }

    private function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

}
