<?php 
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $birthdate = $_POST['birthdate'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cash = 0.00;

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

    $strSQL = "INSERT INTO tb_user(";
    $strSQL .= "user_full_name, ";
    $strSQL .= "user_name, ";
    $strSQL .= "user_birthdate, ";
    $strSQL .= "user_cpf, ";
    $strSQL .= "user_email, ";
    $strSQL .= "user_cash, ";
    $strSQL .= "user_password) ";

    $strSQL .= "VALUES(";
    $strSQL .= "'". $fullname ."', ";
    $strSQL .= "'". $username ."', ";
    $strSQL .= "'". $birthdate ."', ";
    $strSQL .= "'". $cpf ."', ";
    $strSQL .= "'". $email ."', ";
    $strSQL .= "'". $cash ."', ";
    $strSQL .= "'". $password ."')";
    
    $sql = mysqli_query($connection, $strSQL);

    if ($sql) {
        session_start();

        $strSQL_id = "SELECT id_user FROM tb_user WHERE user_email = '$email'";

        $getId = mysqli_query($connection, $strSQL_id);

        if ($getId) {
            while($row = mysqli_fetch_array($getId)) {
                $id = $row['id_user'];
            }

            $strSQL_address = "INSERT INTO tb_user_address(";
            $strSQL_address .= "id_user, ";
            $strSQL_address .= "cep_address, ";
            $strSQL_address .= "log_address, ";
            $strSQL_address .= "complement_address, ";
            $strSQL_address .= "neighborhood_address, ";
            $strSQL_address .= "location_address, ";
            $strSQL_address .= "uf_address, ";
            $strSQL_address .= "ibge_address, ";
            $strSQL_address .= "gia_address, ";
            $strSQL_address .= "ddd_address, ";
            $strSQL_address .= "siafi_address) ";
        
            $strSQL_address .= "VALUES(";
            $strSQL_address .= "'". $id ."', ";
            $strSQL_address .= "'". $cep ."', ";
            $strSQL_address .= "'". $log ."', ";
            $strSQL_address .= "'". $comp ."', ";
            $strSQL_address .= "'". $neighborhood ."', ";
            $strSQL_address .= "'". $location ."', ";
            $strSQL_address .= "'". $uf ."', ";
            $strSQL_address .= "'". $ibge ."', ";
            $strSQL_address .= "'". $gia ."', ";
            $strSQL_address .= "'". $ddd ."', ";
            $strSQL_address .= "'". $siafi ."')";
        
            $sql_address = mysqli_query($connection, $strSQL_address);

            if ($sql_address) {     
                $_SESSION['neighborhood'] = $neighborhood;
                $_SESSION['city'] = $location;
                $_SESSION['uf'] = $uf;
                $_SESSION['log'] = $log;
                $_SESSION['uf'] = $uf;
                $_SESSION['ddd'] = $ddd;
            }
        }     

        $_SESSION['login'] = "sim";
        $_SESSION['fullname'] = $fullname;
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $id;
        $_SESSION['password'] = $password;
        $_SESSION['cep'] = $cep;
        $_SESSION['birthdate'] = $birthdate;
        $_SESSION['email'] = $email;
        $_SESSION['cpf'] = $cpf;
        $_SESSION['cash'] = $cash;
    } else {
        //echo 'erro';
        //echo mysqli_error($connection);
        //echo mysqli_connect_error();
    }
?>