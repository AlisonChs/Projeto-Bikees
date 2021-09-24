<?php 
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == null || $password == null) {
        header("location: ../../../log-in.php");
    }

    require '../../db-partials/restricted-files/connect-db.php';

    $strSQL = "SELECT emailUsuario, senhaUsuario FROM tbusuario WHERE emailUsuario = '$email'";

    $consult = mysqli_query($connection, $strSQL);

    while($row = mysqli_fetch_array($consult)) {
        $emailDB = $row['emailUsuario'];
        $passwordDB = $row['senhaUsuario'];
    }

    require '../../db-partials/restricted-files/disconnect-db.php';

     if ($email == $emailDB && $password == $passwordDB) {
        session_start();
        $_SESSION["login"] = 'sim';
        header("location: ../../../restricted-page.php");
    } else {
        session_start();
        $_SESSION['login'] = 'nao';
        header("location: ../../../log-in.php");
    }
?>