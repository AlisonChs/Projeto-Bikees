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
  <body id="page-purchase">
    
    <?php
      require('./html-partials/preloader.html');
    ?>
    
    <?php
      require('./php-partials/header.php');
    ?>
    <section>
      <form action="./restricted-page.php" method="POST" class="special-form">
          <h3>Pagamento</h3>
          <div class="inputs">

            <div class="label">
              <label for="fullname">Títular do cartão</label>
              <div class="input special-input">
                <input type="text" id="fullname" name="fullname" placeholder="Ex: Fulano da Silva" required 
                <?php
                  if (isset($_SESSION['fullname'])) {
                    echo 'value="'. $_SESSION['fullname'] .'"';
                    echo ' disabled';
                  }
                ?>
                >
              </div>
            </div>

            <div class="label">
              <label for="ccnum">Número do cartão</label>
              <div class="input special-input">
                <input type="text" id="ccnum" name="cardnumber" placeholder="Ex: 0000-0000-0000-0000" maxlength="19" required>
              </div>
            </div>

            <div class="label">
              <label for="expyear">Data de Validade</label>
              <div class="input special-input">
                <input type="date" id="expyear" name="expyear" placeholder="Ex: 10/10/2025" required>
              </div>
            </div>

            <div class="label">
              <label for="cvv">Código de segurança</label>  
              <div class="input special-input">
                <input type="text" id="cvv" name="cvv" placeholder="Ex: 000" maxlength="3" minlength="3" required>
              </div>
            </div>

          </div>
        </div>
        <button type="submit" class="special-button">
          Efetuar pagamento
        </button>
      </form>
    </section>
    <?php
        require('./html-partials/footer.html');
    ?>
  </body>
  <?php
    require('./html-partials/import-scripts.html');
  ?>
</html>