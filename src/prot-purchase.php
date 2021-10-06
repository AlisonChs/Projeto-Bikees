<?php
  require('./php-partials/start-session.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

  <style>
      .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}


@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
    </style>
  
  <?php
    require('./html-partials/head.html');
  ?>
  

  <body id="page-landing">
    
    <?php
      require('./html-partials/preloader.html');
    ?>
    

    <div id="container">

      <?php
        require('./php-partials/header.php');
      ?>

    <div class="row">
    <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

   <div class="row">
   

          <div class="col-50">
            <h3>Pagamento</h3>
            <label for="fname">Cartões Aceitos</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Títular do cartão</label>
            <input type="text" id="cname" name="cardname" placeholder="Nome completo">
            <label for="ccnum">Número do cartão</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="0000-0000-0000-0000">
            <label for="expmonth">Mês de validade</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Outubro">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Ano de validade</label>
                <input type="text" id="expyear" name="expyear" placeholder="2022">
              </div>
              <div class="col-50">
                <label for="cvv">Código de segurança</label>
                <input type="text" id="cvv" name="cvv" placeholder="000">
              </div>
            </div>
          </div>
        </div>
        <input type="submit" value="Realizar compra" class="btn">
      </form>
    </div>
  </div>
  <?php
     require('./html-partials/footer.html');
  ?>
</div>
      <?php
        require('./html-partials/import-scripts.html');
      ?>

  </body>
</html>