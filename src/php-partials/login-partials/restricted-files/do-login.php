<?php 
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == null || $password == null) {
        header("location: ../../../log-in.php");
    }

    require '../../db-partials/restricted-files/connect-db.php';

    $strSQL = "SELECT user_email, user_password FROM tb_user WHERE user_email = '$email'";

    $consult = mysqli_query($connection, $strSQL);

    while($row = mysqli_fetch_array($consult)) {
        $emailDB = $row['user_email'];
        $passwordDB = $row['user_password'];
    }

    require '../../db-partials/restricted-files/disconnect-db.php';
    session_start();

     if ($email == $emailDB && $password == $passwordDB) {
        $_SESSION["login"] = 'sim';
        header("location: ../../../restricted-page.php");
    } else {
        $_SESSION['login'] = 'nao';
        header("location: ../../../log-in.php");
    }
?>