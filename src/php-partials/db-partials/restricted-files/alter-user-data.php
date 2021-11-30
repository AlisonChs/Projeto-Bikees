<?php 
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $birthdate = $_POST['birthdate'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $oldPassword = $_POST['old_password'];
    $newPassword = $_POST['new_password'];
    
    $cep = $_POST['cep'];
    $log = $_POST['logradouro'];
    $comp = $_POST['complemento'];
    $neighborhood = $_POST['bairro'];
    $location = $_POST['localidade'];
    $uf = $_POST['uf'];
    $ibge = $_POST['ibge'];
    $gia = $_POST['gia'];
    $ddd = $_POST['ddd'];
    $siafi = $_POST['siafi'];

    $cep = str_replace('-', '', $cep);
    $cpf = str_replace('.', '', $cpf);
    $cpf = str_replace('-', '', $cpf);

    if (isset($oldPassword) && $oldPassword == $_SESSION['password']) {
        if (isset($cep) && $cep != $_SESSION['cep']) {
            $strSQL_address = "UPDATE tb_user_address SET cep_address = '". $cep . "', ";
            $strSQL_address .= "log_address = '". $log . "', ";
            $strSQL_address .= "complement_address = '". $comp . "', ";
            $strSQL_address .= "neighborhood_address= '". $neighborhood . "', ";
            $strSQL_address .= "location_address= '". $location . "', ";
            $strSQL_address .= "uf_address= '". $uf . "', ";
            $strSQL_address .= "ibge_address= '". $ibge . "', ";
            $strSQL_address .= "gia_address= '". $gia . "', ";
            $strSQL_address .= "ddd_address= '". $ddd . "', ";
            $strSQL_address .= "siafi_address= '". $siafi . "' ";
            $strSQL_address .= "WHERE id_user = '" . $_SESSION['id'] . "'";

            $address_consult = mysqli_query($connection, $strSQL_address);

            if ($address_consult) {     
                $_SESSION['neighborhood'] = $neighborhood;
                $_SESSION['city'] = $location;
                $_SESSION['uf'] = $uf;
                $_SESSION['cep'] = $cep;
            }   
        }  

        if (isset($fullname) && $fullname != $_SESSION['fullname']) {
            $strSQL = "UPDATE tb_user SET user_full_name = '". $fullname ."' WHERE id_user = '" . $_SESSION['id'] ."'";

            $consult = mysqli_query($connection, $strSQL);

            if ($consult) {
                $_SESSION['fullname'] = $fullname;
            }
        }

        if (isset($username) && $username != $_SESSION['username']) {
            $strSQL = "UPDATE tb_user SET user_name = '". $username ."' WHERE id_user = '" . $_SESSION['id'] ."'";

            $consult = mysqli_query($connection, $strSQL);

            if ($consult) {
                $_SESSION['username'] = $username;
            }
        }
        
        if (isset($email) && $email != $_SESSION['email']) {
            $strSQL = "UPDATE tb_user SET user_email = '". $email ."' WHERE id_user = '" . $_SESSION['id'] ."'";

            $consult = mysqli_query($connection, $strSQL);

            if ($consult) {
                $_SESSION['email'] = $email;
            }
        }

        if (isset($cpf) && $cpf != $_SESSION['cpf']) {
            $strSQL = "UPDATE tb_user SET user_cpf = '". $cpf ."' WHERE id_user = '" . $_SESSION['id'] ."'";

            $consult = mysqli_query($connection, $strSQL);

            if ($consult) {
                $_SESSION['cpf'] = $cpf;
            }
        }
        
        if (isset($birthdate) && $birthdate != $_SESSION['birthdate']) {
            $strSQL = "UPDATE tb_user SET user_birthdate = '". $birthdate ."' WHERE id_user = '" . $_SESSION['id'] ."'";

            $consult = mysqli_query($connection, $strSQL);

            if ($consult) {
                $_SESSION['birthdate'] = $birthdate;
            }
        }
        
        
        if (isset($newPassword) && $newPassword != $_SESSION['password']) {
            $strSQL = "UPDATE tb_user SET user_password = '". $newPassword ."' WHERE id_user = '" . $_SESSION['id'] ."'";
            $consult = mysqli_query($connection, $strSQL);
            
            if ($consult) {
                $_SESSION['password'] = $newPassword;
            }
        }
    }

    //echo 'erro';
    //echo mysqli_error($connection);
    //echo mysqli_connect_error();
?>