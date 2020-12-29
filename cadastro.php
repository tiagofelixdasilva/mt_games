<?php
require_once 'classes/cadastro.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="input"> <!--div do formulario -->
            <form name="formulario" id="form" action="" method="POST">
                <h1>Faca seu Cadastro</h1>
                <P>Nome id:</P>
                <p><input id="nome" type="text" checked name="nome" maxlength="20" size="40"></p>
                <p>Senha</p>
                <p><input id="senha" type="password" name="senha" maxlength="6" size="40"></p>
                <p>Repita a senha</p>
                <p><input id="senha2" type="password" name="senha2" maxlength="6" size="40"></p>
                <p>Telefone</p>
                <p><input id="tel" type="number" name="tel" id=""></p>
                <p>E-mail</p>
                <p><input id="email" type="email" name="email" id=""></p>
                <p></p>
                <p><input id="enviar" name="enviar" type="submit" onclick="return validar()" > </p>
                <p><span><a href="index.php">acesse já </a></span></p>


                <?php
                $nome = isset($_POST['nome']) ? $_POST['nome'] : $msg_erro = false;
                $senha = isset($_POST['senha']) ? $_POST['senha'] : $msg_erro = false;
                $senha2 = isset($_POST['senha2']) ? $_POST['senha2'] : $msg_erro = false;
                $tel = isset($_POST['tel']) ? $_POST['tel'] : $msg_erro = false;
                $email = isset($_POST['email']) ? $_POST['email'] : $msg_erro = false;



                $user = new Cadastro($nome, $senha, $senha2, $tel, $email);

                $user->verificacao($nome, $senha, $senha2, $tel, $email);

                echo "<span class='msg-error'> $msg_erro </span>";
                unset($error);
                ?>

            </form>
        </div>




    </body>
</html>


<!--
-->