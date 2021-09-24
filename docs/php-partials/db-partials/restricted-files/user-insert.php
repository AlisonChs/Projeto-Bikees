<?php 
    require "./connect-db.php";
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $strSQL = "INSERT INTO tbusuario(";
    $strSQL .= "nomeUsuario, ";
    $strSQL .= "emailUsuario, ";
    $strSQL .= "senhaUsuario) ";

    $strSQL .= "VALUES(";
    $strSQL .= "'". $username ."', ";
    $strSQL .= "'". $email ."', ";
    $strSQL .= "'". $password ."')";
    
    $sql = mysqli_query($connection, $strSQL);
    
    if ($sql) {
        session_start();
        $_SESSION['login'] = "sim";
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;

        if (isset($_SESSION['url'])) {
            header("location:". $_SESSION['url']);
        } else {
            header("location: ../../../index.php");
        }
    } else {
        header("location: ../../../log-in.php");
    }

    require './disconnect-db.php';
?>
