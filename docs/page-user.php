<?php
  session_start();
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
  <body id="page-user">
    <?php
      require('./html-partials/preloader.html');
    ?>

    <?php
      require('./php-partials/header.php');
    ?>

    <div class="container">
      <div class="infos-profile special-form">
        <div class="title">
          <h3>Seus dados</h3>
          <a href="./php-partials/login-partials/close-session.php">Sair</a>
        </div>
        <div class="infos-user">
          <p>Usuário:                  
            <?php
                if (isset($_SESSION['username'])) {
                  echo ' '. $_SESSION['username'];
                }
              ?></p> 
          <p>Nome: 
            <?php
              if (isset($_SESSION['fullname'])) {
                echo ' '. $_SESSION['fullname'];
              }
            ?>
          </p>
          <p>Data de nascimento: 
            <?php
              if (isset($_SESSION['birthdate'])) {
                echo ' '. $_SESSION['birthdate'];
              }
            ?>
          </p>
          <p>CEP: 
            <?php
              if (isset($_SESSION['cep'])) {
                echo ' '. $_SESSION['cep'];
              }
            ?>
          </p>
          <p>CPF: 
            <?php
              if (isset($_SESSION['cpf'])) {
                echo ' '. $_SESSION['cpf'];
              }
            ?>
          </p>
          <p>Email: 
            <?php
              if (isset($_SESSION['email'])) {
                echo ' '. $_SESSION['email'];
              }
            ?>  
          </p>
        </div>
        <a href="./restricted-page.php">
          <button class="special-button">
            Histórico de Bikees
          </button>
        </a>
      </div>

      <form action="./php-partials/db-partials/restricted-files/alter-user-data.php" method="post" class="special-form">
        <h3>Atualize seus dados</h3>
        <!--div class="special-input">
          <label for="data">Dado para atualizar</label>
          <select name="data" id="data" required>
            <option value="user_full_name">Nome</option>
            <option value="user_name">Nome de Usuário</option>
            <option value="user_birthdate">Data de Nascimento</option>
            <option value="cep">Cep</option>
            <option value="user_cpf">Cpf</option>
            <option value="user_email">Email</option>
            <option value="user_password">Senha</option>
          </select>
        </div-->
        <div class="special-input">
            <img src="./media/img/black-fullname.svg" alt="">
            <input type="text" name="fullname" id="fullname" placeholder="Digite seu nome completo" autocomplete="fullname" autocomplete="name" pattern="^(?![\W\d]+[^\sa-zA-Z\w]+)([a-z]|[A-Z]){2,}([\s]{1}([a-z]|[A-Z]){2,}){1,}$" title="Digite seu nome completo, incluindo sobrenome. Separe-os com somente 1 espaço e não deixe espaços no começo e no fim" data-type="fullname" required
            <?php
              if (isset($_SESSION['fullname'])) {
                echo 'value="'. $_SESSION['fullname'] . '"';
              }
            ?>
            >
        </div>
        <div class="special-input">
            <img src="./media/img/black-usuario.svg" alt="">
            <input type="text" name="username" id="username" placeholder="Digite seu nome de usuário" autocomplete="username" data-type="username" 
            <?php
              if (isset($_SESSION['username'])) {
                echo 'value="'. $_SESSION['username'] . '"';
              }
            ?>
            required>
        </div>
        <div class="special-input">
            <img src="./media/img/black-birthdate.svg" alt="">
            <input type="date" name="birthdate" id="birthdate" class="empty" placeholder="Digite o ano de seu nascimento" autocomplete="birthdate" data-type="birthdate" min="1890-01-01" max="9999-12-31" 
            <?php
              if (isset($_SESSION['birthdate'])) {
                echo 'value="'. $_SESSION['birthdate'] . '"';
              }
            ?>
            required>
        </div>
        <div class="special-input">
            <img src="./media/img/black-address.svg" alt="">
            <input type="text" name="cep" id="cep" placeholder="Digite um novo cep" autocomplete="cep" data-type="cep" maxlength="9" minlength="9" 
            <?php
              if (isset($_SESSION['cep'])) {
                echo 'value="'. $_SESSION['cep'] . '"';
              }
            ?>
            required>
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
            <input type="text" name="cpf" id="cpf" placeholder="Digite um novo CPF" autocomplete="cpf" data-type="cpf" maxlength="14" required
            <?php
              if (isset($_SESSION['cpf'])) {
                echo 'value="'. $_SESSION['cpf'] . '"';
              }
            ?>
            >
        </div>
        <div class="special-input">
            <img src="./media/img/black-email.svg" alt="">
            <input type="email" name="email" id="email" placeholder="Digite um novo email" autocomplete="email" data-type="email" required
            <?php
              if (isset($_SESSION['email'])) {
                echo 'value="'. $_SESSION['email'] . '"';
              }
            ?>
            >
        </div>
        <div class="special-input">
            <img src="./media/img/black-password.svg" alt="">                  
            <input type="password" name="old_password" id="old_password" placeholder="Digite sua antiga senha" autocomplete="new-password" pattern="^(?!.*\s)(?=.*\d)(?=.*[a-z])(?=.*[\W])(?=.*[A-Z])(?=.*[a-zA-Z\d\W]).{8,}$" title="A senha deve conter, no mínimo, 8 caracteres, com pelo menos uma letra maiúscula, uma minúscula, um número e um símbolo. Não pode conter espaços" data-type="password" required>
        </div>
        <div class="special-input">
            <img src="./media/img/black-password.svg" alt="">                  
            <input type="password" name="new_password" id="new_password" placeholder="Digite a senha nova ou antiga" autocomplete="new-password" pattern="^(?!.*\s)(?=.*\d)(?=.*[a-z])(?=.*[\W])(?=.*[A-Z])(?=.*[a-zA-Z\d\W]).{8,}$" title="A senha deve conter, no mínimo, 8 caracteres, com pelo menos uma letra maiúscula, uma minúscula, um número e um símbolo. Não pode conter espaços" data-type="password" required>
        </div>
        <button type="submit" class="special-button">
            Atualizar
        </button>
      </form>
    </div>
    <?php
        require('./html-partials/footer.html');
    ?>
    <?php
      require('./html-partials/import-scripts.html');
    ?>
  </body>
</html>