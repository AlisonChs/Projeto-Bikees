<?php
    session_start();
    require "./restricted-files/connect-db.php";

    if (isset($_POST['id'])) {
        $_SESSION['id'] = $_POST['id'];
        $id = $_POST['id'];

        $strSQL = "SELECT user_name, user_full_name, user_birthdate, user_cpf, user_email, user_password, user_cash FROM tb_user WHERE id_user = '$id'";

        $consult = mysqli_query($connection, $strSQL);
        while($row = mysqli_fetch_array($consult)) {
            $_SESSION['email'] = $row['user_email'];
            $_SESSION['password'] = $row['user_password'];
            $_SESSION['fullname'] = $row['user_full_name'];
            $_SESSION['birthdate'] = $row['user_birthdate'];
            $_SESSION['username'] = $row['user_name'];
            $_SESSION['cpf'] = $row['user_cpf'];
            $_SESSION['cash'] = $row['user_cash'];
        }

        if ($consult) {
            $strSQL_address = "SELECT log_address, neighborhood_address, cep_address, location_address, uf_address, ddd_address FROM tb_user_address WHERE id_user = '$id'";

            $address_consult = mysqli_query($connection, $strSQL_address);
            while($row = mysqli_fetch_array($address_consult)) {
                $_SESSION['log'] = $row['log_address'];
                $_SESSION['neighborhood'] = $row['neighborhood_address'];
                $_SESSION['cep'] = $row['cep_address'];
                $_SESSION['city'] = $row['location_address'];
                $_SESSION['uf'] = $row['uf_address'];
                $_SESSION['ddd'] = $row['ddd_address'];
            }  
        
            require './restricted-files/alter-user-data.php';
        
            if (isset($oldPassword) && $oldPassword == $_SESSION['password']) {
                $player = array("success"=>true);
            } else {
                $player = array("erro"=>"Senha incorreta");
            }
        } else {
            $player = array("erro"=>"Não foi possível encontrar esse usuário");
        }
    } else {
        $player = array("erro"=>"O id não foi enviado");
    }
    echo json_encode($player);
    require './restricted-files/disconnect-db.php';
?>