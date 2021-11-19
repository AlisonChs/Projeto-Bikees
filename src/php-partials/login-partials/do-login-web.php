<?php
    require '../db-partials/restricted-files/connect-db.php';
    require './restricted-files/do-login.php';
    require '../db-partials/restricted-files/disconnect-db.php';

    if (isset($email) && isset($emailDB) && isset($password) && isset($emailDB)) {
        if ($email == $emailDB && $password == $passwordDB) {
            if ("./index.php" != $_SESSION['url']) {
                header("location:". $_SESSION['url']);
            } else {
                header("location: ../../page-rent.php");
            }
        } else {
            header("location: ../../log-in.php");
        }
    } else {
        header("location: ../../log-in.php");
    }
?>