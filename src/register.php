<?php
    require('./php-partials/login-partials/start-login-session.php');
?>
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
        require('./php-partials/header-login-register.php');
    ?>

    <div class="container login-register">

        <form action="./php-partials/db-partials/restricted-files/user-insert.php" method="post" id="register">
            <h3>Registre-se</h3>
            <div class="special-input">
                <img src="./media/img/black-fullname.svg" alt="">
                <input type="text" name="fullname" id="fullname" placeholder="Digite seu seu nome completo" autocomplete="fullname" autocomplete="name" pattern="^(?![\W\d]+[^\sa-zA-Z\w]+)([a-z]|[A-Z]){2,}([\s]{1}([a-z]|[A-Z]){2,}){1,}$" title="Digite seu nome completo, incluindo sobrenome. Separe-os com somente 1 espaço e não deixe espaços no começo e no fim" data-type="fullname" required>
            </div>
            <div class="special-input">
                <img src="./media/img/black-usuario.svg" alt="">
                <input type="text" name="username" id="username" placeholder="Digite seu nome de usuário" autocomplete="username" data-type="username" required>
            </div>
            <div class="special-input">
                <img src="./media/img/black-birthdate.svg" alt="">
                <input type="date" name="birthdate" id="birthdate" class="empty" placeholder="Digite o ano de seu nascimento" autocomplete="birthdate" data-type="birthdate" min="1890-01-01" max="9999-12-31" required>
            </div>
            <div class="special-input">
                <img src="./media/img/black-address.svg" alt="">
                <input type="text" name="cep" id="cep" placeholder="Digite seu Cep" autocomplete="cep" data-type="cep" maxlength="9" minlength="9" required>
                <input type="hidden" name="logradouro" id="logradouro">
                <input type="hidden" name="complemento" id="complemento">
                <input type="hidden" name="bairro" id="bairro">
                <input type="hidden" name="localidade" id="localidade">
                <input type="hidden" name="uf" id="uf">
                <input type="hidden" name="ibge" id="ibge">
                <input type="hidden" name="gia" id="gia">
                <input type="hidden" name="ddd" id="ddd">
                <input type="hidden" name="siafi" id="siafi">
            </div>
            <div class="special-input">
                <img src="./media/img/black-cpf.svg" alt="">
                <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" autocomplete="cpf" data-type="cpf" required>
            </div>
            <div class="special-input">
                <img src="./media/img/black-email.svg" alt="">
                <input type="email" name="email" id="email" placeholder="Digite seu Email" autocomplete="email" data-type="email" required>
            </div>
            <div class="special-input">
                <img src="./media/img/black-password.svg" alt="">                  
                <input type="password" name="password" id="password" placeholder="Digite sua Senha" autocomplete="new-password" pattern="^(?!.*\s)(?=.*\d)(?=.*[a-z])(?=.*[\W])(?=.*[A-Z])(?=.*[a-zA-Z\d\W]).{8,}$" title="A senha deve conter, no mínimo, 8 caracteres, com pelo menos uma letra maiúscula, uma minúscula, um número e um símbolo. Não pode conter espaços" data-type="password" required>
            </div>
            <div class="special-input">
                <img src="./media/img/black-password.svg" alt="">                  
                <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirme sua Senha" autocomplete="new-password" pattern="^(?!.*\s)(?=.*\d)(?=.*[a-z])(?=.*[\W])(?=.*[A-Z])(?=.*[a-zA-Z\d\W]).{8,}$" title="A senha deve conter, no mínimo, 8 caracteres, com pelo menos uma letra maiúscula, uma minúscula, um número e um símbolo. Não pode conter espaços" data-type="confirmPassword" minlength="8" required>
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
            require('./html-partials/import-form-scripts.html');
        ?>
    </div>
</body>
</html>