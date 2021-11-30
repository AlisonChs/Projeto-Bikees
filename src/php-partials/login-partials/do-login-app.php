<?php
    require '../db-partials/restricted-files/connect-db.php';
    require './restricted-files/do-login.php';

    if (isset($address_consult) && isset($consult)) {
       if ($consult && $address_consult) {
            $player = array("id"=>$_SESSION['id'], "fullname"=>$_SESSION["fullname"], "birthdate"=>$_SESSION["birthdate"], "username"=>$_SESSION["username"], "cpf"=>$_SESSION["cpf"], "cash"=>$_SESSION["cash"], "logradouro"=>$_SESSION["log"], "bairro"=>$_SESSION["neighborhood"], "cep"=>$_SESSION["cep"], "localidade"=>$_SESSION["city"], "uf"=>$_SESSION["uf"], "ddd"=>$_SESSION["ddd"],);
       }
    } else {
        $player = array("erro"=>mysqli_error($connection));
    }

    echo json_encode($player);
    require '../db-partials/restricted-files/disconnect-db.php';
?>