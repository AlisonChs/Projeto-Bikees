<?php
  require('./php-partials/start-session.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <?php
    require('./html-partials/head.html');
  ?>

  <body id="page-rent">

    <?php
      require('./html-partials/preloader.html');
    ?>

    <div class="container"></div>
      <?php
        require('./php-partials/header.php');
      ?>

      <section id="rent-a-bikee">

        <form action="./php-partials/login-partials/acess-restricted-page.php" method="post" id="form-rent-bikee">

          <h1>Alugue uma Bikee</h1>

          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Equipada com um guidão e quadro step thru ultra resistente juntamente do melhor dos acolchoamentos em seu banco, a nossa nova bicicleta da Bikees é capaz de dar o melhor dos dois mundos (conforto e segurança).</p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seu design é feito para se adaptar perfeitamente em qualquer tipo de físico, podendo suportar até 115 quilos e contém aros tamanho 24 para atender as mais variadas estaturas. Fora isso, ela tem um banco de altura adaptável, correntes com proteção para evitar acidentes e uma cestinha adaptável que não acumula líquidos ou sujeira – ótimas para trazer as compras. </p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As nossas Bikees foram feitas para você, especialmente, para você que preza pelo conforto e pela sua segurança no dia a dia; de modo que tanto você quanto sua família possam usar sem se preocupar.</p>
          
          <fieldset>
            <section id="map-a-bikee">

            <div class="map">

              <iframe id="maps" src="https://www.google.com/maps/embed/v1/search?q=bike%20itau&amp;key=AIzaSyAGb12yL0LK59e7SqGfX3bGOxyNxVxmGxo" width="450" height="450" loading="lazy"></iframe>            
             
            </div>
            
              <div class="right-text">
                <h4>Reserve sua bikee aqui e busque-a no local mostrado pelo mapa.</h4>

                <div class="input-area">
                  <h5>Coloque o tempo desejado para ficar com a Bikee</h5>

                  <div class="input-div">
                    <input type="time" name="time" id="time">

                    <p>R$ 4,00 por minuto</p>
                  </div>

                </div>

                  <?php

                  // Se o usuário não estiver logado, aparecerá a mensagem de alerta. Caso esteja, não aparecerá nada.
                    
                    if (isset($_SESSION['login'])) {
                        if ($_SESSION['login'] != "sim") {
                          echo '<p><small>Obs: Você precisa ter uma conta para reservar uma bikee</small></p>';
                        } 
                    } else {
                      echo '<p><small>Obs: Você precisa ter uma conta para reservar uma bikee</small></p>';
                    }
                    
                ?>

              </div>

              </section>
          </fieldset>

          <div class="div-bt">
            <button type="submit" id="bt-submit">Alugar</button>
          </div>

        </form>

      </section>

      <?php
        require('./html-partials/footer.html');
      ?>
    </div>

    <?php
        require('./html-partials/import-scripts.html');
    ?>

  </body>
</html>
