<?php
    require "./restricted-files/connect-db.php";
    require './restricted-files/alter-user-data.php';
    require './restricted-files/disconnect-db.php';

    header("location: ../../page-user.php");
?>