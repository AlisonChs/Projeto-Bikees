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

    <div class="container">
      <?php
        require('./php-partials/header.php');
      ?>
      
      <!-- Nesta seção, há 3 sections, que serão passadas, cada uma contendo seu respectivo conteúdo. -->

      <section id="rent-a-bikee">

        <form action="./php-partials/login-partials/acess-restricted-page.php" method="post" id="form-rent-bikee">
          
        <!-- Seção 1: Descrição -->

          <section id="description">

            <h1>Alugue uma Bikee</h1>

            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Equipada com um guidão e quadro step thru ultra resistente juntamente do melhor dos acolchoamentos em seu banco, a nossa nova bicicleta da Bikees é capaz de dar o melhor dos dois mundos (conforto e segurança).</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seu design é feito para se adaptar perfeitamente em qualquer tipo de físico, podendo suportar até 115 quilos e contém aros tamanho 24 para atender as mais variadas estaturas. Fora isso, ela tem um banco de altura adaptável, correntes com proteção para evitar acidentes e uma cestinha adaptável que não acumula líquidos ou sujeira – ótimas para trazer as compras. </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As nossas Bikees foram feitas para você, especialmente, para você que preza pelo conforto e pela sua segurança no dia a dia; de modo que tanto você quanto sua família possam usar sem se preocupar.</p>
          
          </section>

          <!-- Seção 2: Escolha do plano -->

          <section id="choose-a-bikee">
            <h1>Escolha uma Bikee</h1> <!-- Carrossel -->
          </section>

          <!-- Seção 3: Mapear bikee -->

          <section id="map-a-bikee">

            <h1>Ache sua Bikee</h1>
            
            <fieldset>

              <div class="map">
                <iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1537.402324035354!2d-46.409228445080835!3d-23.583538953765302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc656a290e77807b!2sBike%20Ita%C3%BA!5e0!3m2!1spt-BR!2sbr!4v1614459761881!5m2!1spt-BR!2sbr" width="450" height="450" loading="lazy"></iframe>
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
                <p><small>Obs: Você precisa ter uma conta para reservar uma bikee</small>
                </p>
              </div>

            </fieldset>

            <div class="div-bt">
              <button type="submit" id="bt-submit">Alugar</button>
            </div>

          </section>

          <div class="div-bt">
              <button type="button" id="bt-next">Próximo</button>
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
