<?php 
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == null || $password == null) {
        header("location: ../../../log-in.php");
    }

    require '../../db-partials/restricted-files/connect-db.php';

    $strSQL = "SELECT user_full_name, user_cpf, user_email, user_password, user_cash FROM tb_user WHERE user_email = '$email'";

    $consult = mysqli_query($connection, $strSQL);
    session_start();
    while($row = mysqli_fetch_array($consult)) {
        $emailDB = $row['user_email'];
        $passwordDB = $row['user_password'];
        $_SESSION['fullname'] = $row['user_full_name'];
        $_SESSION['username'] = $row['user_name'];
        $_SESSION['cpf'] = $row['user_cpf'];
        $_SESSION['cash'] = $row['user_cash'];
    }

    require '../../db-partials/restricted-files/disconnect-db.php';

    if ($email == $emailDB && $password == $passwordDB) {
        $_SESSION["login"] = 'sim';
        if ("./index.php" != $_SESSION['url']) {
            header("location:". $_SESSION['url']);
        } else {
            header("location: ../../../page-rent.php");
        }
    } else {
        $_SESSION['login'] = 'nao';
        header("location: ../../../log-in.php");
    }
?>