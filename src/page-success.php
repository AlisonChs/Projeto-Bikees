<?php
    require('./php-partials/login-partials/start-login-session.php');

    if (isset($_SESSION['login'])) {
        if ($_SESSION['login'] != "sim") {
            header('location: ../../log-in.php');
        }
        
    } else {
        header('location: ../../log-in.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <?php
        require('./html-partials/head.html');
    ?>
<body id="page-success">
    <?php
        require('./html-partials/preloader.html');
    ?>

    <?php
        require('./php-partials/header-login-register.php');
    ?>

    <div class="container">

        <div class="special-form">
            <input type="hidden" name="previous-page" value="<?php echo $_SESSION['url']?>">
            <h3>Sua Bikee foi alugada com sucesso</h3>
            <p>Dentro de uma hora, você pode buscar sua bikee em um dos pontos disponibilizados no mapa.</p>
            <iframe id="maps" src="https://www.google.com/maps/d/embed?mid=1wcgCW28NoijN1gIdfdL0k9tfxbo&hl=pt-BR&z=13" loading="lazy" height="350"></iframe>
            
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

    </div>
    
    <?php
        require('./html-partials/import-scripts.html');
    ?>

</body>
</html>