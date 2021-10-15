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

        <form action="./php-partials/login-partials/restricted-files/do-login.php" method="post" class="special-form">
            <h3>Login</h3>
            <div class="special-input">
                <img src="./media/img/black-email.svg" alt="">
                <input type="email" name="email" id="email" placeholder="Digite seu Email" autocomplete="email" data-type="email" required>
            </div>
            <div class="special-input">
                <img src="./media/img/black-password.svg" alt="">                  
                <input type="password" name="password" id="password" placeholder="Digite sua Senha" autocomplete="current-password" data-type="password" required>
            </div>
                <button type="submit" class="special-button">
                    Entrar
                </button>
                <p>Não tem uma conta? 
                    <a href="./register.php">
                        <em>Registre-se</em>
                    </a>
                </p>
            </div>
        </form>

    </div>
    
    <?php
        require('./html-partials/import-scripts.html');
    ?>

</body>
</html>