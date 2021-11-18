<?php
  session_start();
  if (isset($_SESSION['login'])) {

      if ($_SESSION['login'] != "sim") {
        header('location: ./log-in.php');
      }
      
      if ( (!isset($_POST['minutes'])) || (!isset($_POST['selected-bikee'])) ) {
        header('location: ./page-rent.php');
      }

  } else {
    header('location: ./log-in.php');
  }
  $month = date('Y') + 1 . '-' . date('m') ;
  $date =  $month . "-01";
  $time = $_POST['minutes'];
  $bike = $_POST['selected-bikee'];

  if ($bike == "normal") {
    $price = $time * 0.5;
    $price = number_format($price, 2, ',', '.');
  } else {
    $price = $time * 1;
    $price = number_format($price, 2, ',', '.');
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
                <input type="text" id="card-number" name="card-number" placeholder="Ex: 0000-0000-0000-0000" maxlength="19" minlength="19" data-type="cardNumber" required>
              </div>
            </div>

            <div class="label">
              <label for="expyear">Data de Validade</label>
              <div class="input special-input">
                <input type="date" id="date-expiration" name="date-expiration" placeholder="Ex: 10/10/2025" data-type="dateExpiration" class="empty" min='<?php echo $date; ?>' required>
              </div>
            </div>

            <div class="label">
              <label for="cvv">Código de segurança</label>  
              <div class="input special-input">
                <input type="text" id="security-code" name="security-code" placeholder="Ex: 000" maxlength="3" minlength="3" data-type="number" required>
              </div>
            </div>

          </div>
        </div>
        <div class="value">
          <b><em>Valor:</em></b>
          <p>R$ 
            <?php
              echo $price
            ?>
          </p>
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