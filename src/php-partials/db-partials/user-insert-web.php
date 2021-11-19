<?php
    require "./restricted-files/connect-db.php";
    require './restricted-files/user-insert.php';

    if ($sql) {
        if ("./index.php" != $_SESSION['url']) {
            header("location:". $_SESSION['url']);
        } else {
            header("location: ../../page-rent.php");
        }
    } else {
        header("location: ../../register.php");
    }

    //echo 'erro';
    //echo mysqli_error($connection);
    //echo mysqli_connect_error();
    //echo $sql;
    require './restricted-files/disconnect-db.php';
?>