<?php 
    require "./connect-db.php";
    
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $birthdate = $_POST['birthdate'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cep = str_replace('-', '', $cep);

    $strSQL = "INSERT INTO tb_user(";
    $strSQL .= "user_full_name, ";
    $strSQL .= "user_name, ";
    $strSQL .= "user_birthdate, ";
    $strSQL .= "user_cep, ";
    $strSQL .= "user_email, ";
    $strSQL .= "user_password) ";

    $strSQL .= "VALUES(";
    $strSQL .= "'". $fullname ."', ";
    $strSQL .= "'". $username ."', ";
    $strSQL .= "'". $birthdate ."', ";
    $strSQL .= "'". $cep ."', ";
    $strSQL .= "'". $email ."', ";
    $strSQL .= "'". $password ."')";
    
    $sql = mysqli_query($connection, $strSQL);
    
    if ($sql) {
        session_start();
        $_SESSION['login'] = "sim";
        $_SESSION['fullname'] = $fullname;
        $_SESSION['username'] = $username;
        $_SESSION['cep'] = $cep;
        $_SESSION['email'] = $email;

        if ("./index.php" != $_SESSION['url']) {
            header("location:". $_SESSION['url']);
        } else {
            header("location: ../../../page-rent.php");
        }
    } else {
        header("location: ../../../register.php");
        //echo 'erro';
        //echo mysqli_error($connection);
        //echo mysqli_connect_error();
    }

    require './disconnect-db.php';
?>