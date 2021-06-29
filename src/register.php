<!DOCTYPE html>
<html lang="pt-br">
    <?php
        require('./html-partials/head.html');
    ?>
<body id="register">
    <?php
        require('./html-partials/preloader.html');
    ?>

    <?php
        require('./html-partials/header-login-register.html');
    ?>

    <div class="container login-register">

        <form action="" method="post" id="register" class="">
            <h3>Registre-se</h3>
            <div class="special-input">
                <img src="./media/img/black-email.svg" alt="">
                <input type="email" name="email" id="email" placeholder="Digite seu Email" autocomplete="email" autofocus onfocus="highlightInputParent([id])" onblur="playDownInputParent([id])" required>
            </div>
            <div class="special-input">
                <img src="./media/img/black-usuario.svg" alt="">
                <input type="text" name="username" id="username" placeholder="Digite seu Usuário" autocomplete="username" onfocus="highlightInputParent([id])" onblur="playDownInputParent([id])" required>
            </div>
            <div class="special-input">
                <img src="./media/img/black-password.svg" alt="">                  
                <input type="password" name="password" id="password" placeholder="Digite sua Senha" autocomplete="new-password" onfocus="highlightInputParent([id])" onblur="playDownInputParent([id])" required>
            </div>
            <div class="special-input">
                <img src="./media/img/black-password.svg" alt="">                  
                <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirme sua Senha" autocomplete="new-password" onfocus="highlightInputParent([id])" onblur="playDownInputParent([id])" required>
            </div>
            <button type="submit" class="special-button">
                Registrar-se
            </button>
            <p>Já tem uma conta? 
                <a href="./log-in.php">
                    <em>Faça Login</em>
                </a>
            </p>
        </form>
            
        <?php
            require('./html-partials/import-scripts.html');
        ?>
    </div>  
</body>
</html>