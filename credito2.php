<?php
session_start();

$num = $_GET['num'];


switch ($num){ //processo para colocar um valor na conta
    
case 1:
    $_SESSION['saldo'] = $_SESSION['saldo'] + 20.00;
    echo"creditos inseridos com sucesso";
    header('location:creditos.php');break;
    case 2:
        $_SESSION['saldo'] = $_SESSION['saldo'] + 30.74;
        header('location:creditos.php'); break;
        case 3:
            $_SESSION['saldo'] = $_SESSION['saldo'] + 40;
            header('location:creditos.php');break;
            case 4:
                $_SESSION['saldo'] = $_SESSION['saldo'] + 50;
                header('location:creditos.php');break;
                case 5:
                    $_SESSION['saldo'] = $_SESSION['saldo'] + 60;
                    header('location:creditos.php');break;
                    case 6:
                        $_SESSION['saldo'] = $_SESSION['saldo'] + 70;
                        header('location:creditos.php');break;
                        case 7:
                            $_SESSION['saldo'] = $_SESSION['saldo'] + 80;
                            header('location:creditos.php');break;
                            case 8:
                                $_SESSION['saldo'] = $_SESSION['saldo'] + 90;
                                header('location:creditos.php');break;

}


?>