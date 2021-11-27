<?php
    require "./restricted-files/connect-db.php";
    session_start();

    $bikees = array('normal'=>1, 'sport'=>2, 'tour'=>3);

    if ( (!isset($_POST['price'])) || (!isset($_POST['bikee'])) || (!isset($_POST['fullname'])) || (!isset($_POST['card-number'])) || (!isset($_POST['date-expiration'])) || (!isset($_POST['security-code'])) ) {
        $player = array("erro"=>"É necessário enviar todas as informações antes de continuar");
    } else {
        $price = $_POST['price'];

        if ($bikees[$_POST['bikee']]) {
            $id_bikee = $bikees[$_POST['bikee']];

            $date = date('Y') . '-' . date('m') . '-' . date('d');

            $strSQL = "INSERT INTO tb_user_bikee_hist(";
            $strSQL .= "id_user, ";
            $strSQL .= "id_bikee_type, ";
            $strSQL .= "date_use_bikee, ";
            $strSQL .= "rent_price) ";
            
            $strSQL .= "VALUES(";
            $strSQL .= "'". $_SESSION['id'] ."', ";
            $strSQL .= "'". $id_bikee ."', ";
            $strSQL .= "'". $date ."', ";
            $strSQL .= "'". $price ."')";

            $sql = mysqli_query($connection, $strSQL);
        
            if ($sql) {
                $player = array("success"=>"Locação feita com sucesso.");
            } else {
                $player = array("erro"=>mysqli_error($connection));
                //echo 'erro:' . mysqli_error($connection);
            }

        } else {
            $player = array("erro"=>"A Bikee escolhida não está disponível!");
            //echo 'erro isset ' . $_POST['bikee'];
        }
    }

    echo json_encode($player);

    //echo 'erro';
    //echo mysqli_error($connection);
    //echo mysqli_connect_error();
    //echo $sql;
    require './restricted-files/disconnect-db.php';
?>