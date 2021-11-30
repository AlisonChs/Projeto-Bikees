<?php
    require "./restricted-files/connect-db.php";
    require './restricted-files/user-insert.php';

    if ($sql) {
        $player = array("id"=>$id);
    } else {
        $player = array("erro"=>mysqli_error($connection));
    }

    echo json_encode($player);
    //echo 'erro';
    //echo mysqli_error($connection);
    //echo mysqli_connect_error();
    //echo $sql;
    require './restricted-files/disconnect-db.php';
?>