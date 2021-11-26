<?php
    require('./php-partials/login-partials/start-login-session.php');
    if (isset($_SESSION['login'])) {
        if ($_SESSION['login'] != "sim") {
            header('location: ./log-in.php');
        }
    } else {
        header('location: ./log-in.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <?php
        require('./html-partials/head.html');
    ?>
<body id="bikee-historical">
    <?php
        require('./html-partials/preloader.html');
    ?>

    <?php
        require('./php-partials/header-login-register.php');
    ?>

    <div class="container">

        <div class="special-form">
            <h3>Histórico de Bikees</h3>
            <?php
                require './php-partials/db-partials/restricted-files/connect-db.php';

                $strSQL = "SELECT * FROM tb_user_bikee_hist WHERE id_user = '" . $_SESSION['id'] . "'";

                $consult = mysqli_query($connection, $strSQL);

                if ($consult) {
                
                    $strSQL_bikee = "SELECT * FROM tb_bikee_type";

                    $bikee_consult = mysqli_query($connection, $strSQL_bikee);

                    if ($bikee_consult) {
                        $bikees = array();
                        while ($row = mysqli_fetch_array($bikee_consult)) {
                            $bikees[$row['id_bikee_type']] = array($row['bikee_type_name'], $row['bikee_img']);
                        }

                        echo "<div class='table'>";
                            echo "<div class='row'>";
                                echo "<div class='item img'> Imagem </div>";    
                                echo "<div class='item name'> Nome </div>";
                                echo "<div class='item price'> Preço </div>";
                                echo "<div class='item date'> Data da locação </div>";
                            echo "</div>";

                        while($row = mysqli_fetch_object($consult)) {
                            echo "<div class='row'>";
                                echo "<div class='item img'> <img src='" . $bikees[$row->id_bikee_type][1] . "' alt=''></div>";    
                                echo "<div class='item name'>" . $bikees[$row->id_bikee_type][0] . "</div>";
                                echo "<div class='item price'> R$" . number_format($row->rent_price, 2, ',', '.') . "</div>";
                                echo "<div class='item date'>" . $row->date_use_bikee . "</div>";
                            echo "</div>";
                        }

                        echo "</div>";
                    } else {
                        echo "<div class='error'><h5>Houve um erro durante a consulta.</h5><p>Tente novamente mais tarde</p></div>";    
                    }
                } else {
                    echo "<div class='error'><h5>Houve um erro durante a consulta.</h5><p>Tente novamente mais tarde</p></div>";
                }

                require './php-partials/db-partials/restricted-files/disconnect-db.php';
            ?>
                <a href="
                    <?php
                        if (isset($_SESSION['url'])) {
                            echo $_SESSION['url'];
                        } else {
                            echo "./index.php";
                        }
                    ?>">
                    <button class="special-button">
                        Voltar para página anterior
                    </button>
                </a>
            </div>
        <div>

    </div>
    
    <?php
        require('./html-partials/import-scripts.html');
    ?>

</body>
</html>