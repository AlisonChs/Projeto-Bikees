<?php 
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == null || $password == null) {
        header("location: ../../../log-in.php");
    }

    require '../../db-partials/restricted-files/connect-db.php';

    $strSQL = "SELECT id_user, user_name, user_full_name, user_birthdate, user_cpf, user_email, user_password, user_cash FROM tb_user WHERE user_email = '$email'";

    $consult = mysqli_query($connection, $strSQL);
    session_start();
    while($row = mysqli_fetch_array($consult)) {
        $emailDB = $row['user_email'];
        $passwordDB = $row['user_password'];
        $idDB = $row['id_user'];
        $_SESSION['fullname'] = $row['user_full_name'];
        $_SESSION['birthdate'] = $row['user_birthdate'];
        $_SESSION['username'] = $row['user_name'];
        $_SESSION['cpf'] = $row['user_cpf'];
        $_SESSION['cash'] = $row['user_cash'];
    }

    $_SESSION['id'] = $idDB;

    if ($consult) {
        $strSQL_address = "SELECT log_address, neighborhood_address, cep_address, location_address, uf_address, ddd_address FROM tb_user_address WHERE id_user = '$idDB'";

        $address_consult = mysqli_query($connection, $strSQL_address);
        while($row = mysqli_fetch_array($address_consult)) {
            $_SESSION['log'] = $row['log_address'];
            $_SESSION['neighborhood'] = $row['neighborhood_address'];
            $_SESSION['cep'] = $row['cep_address'];
            $_SESSION['city'] = $row['location_address'];
            $_SESSION['uf'] = $row['uf_address'];
            $_SESSION['ddd'] = $row['ddd_address'];
        }  
    }

    require '../../db-partials/restricted-files/disconnect-db.php';

    if ($email == $emailDB && $password == $passwordDB) {
        $_SESSION["login"] = 'sim';
        $_SESSION['email'] = $emailDB;
        $_SESSION['password'] = $passwordDB;
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