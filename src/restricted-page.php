<?php
    require('./php-partials/login-partials/start-login-session.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <?php
        require('./html-partials/head.html');
    ?>
<body id="log-in">
    <?php
        require('./html-partials/preloader.html');
    ?>

    <?php
        require('./php-partials/header-login-register.php');
    ?>

    <div class="container login-register">

        <form action=
            <?php
                if (isset($_SESSION['url'])) {
                    echo $_SESSION['url'];
                } else {
                    echo "./index.php";
                }
            ?> class="special-form">
            <input type="hidden" name="previous-page" value="<?php echo $_SESSION['url']?>">
            <h3>Infelizmente a página acessada ainda não está pronta</h3>
                <button type="submit" class="special-button">
                    Voltar para página anterior
                </button>
            </div>
        </form>

    </div>
    
    <?php
        require('./html-partials/import-scripts.html');
    ?>

</body>
</html>