<!DOCTYPE html>
<html lang="pt-br">
  <?php
    require('./html-partials/head.html');
  ?>

  <body id="page-landing">

    <?php
      require('./html-partials/login-register.html');
    ?>

    <div id="container">

      <?php
        require('./html-partials/header.html');
      ?>

      <section id="welcome-area">
        <div class="left-text">
          <div class="text-flex">
            <h1>Alugue uma <em>Bikee</em></h1>
            <?php 
              $weeklyPhrase = [
                "Aproveite esse belo domingo e vá ver sua La Belle de Jour de Bikee!",
                "Comece bem a semana! Utilize uma Bikee nessa segunda-feira.",
                "Terça-feira! Chegue mais rápido na sexta, vá de Bikee!",
                "Evite as cinzas da poluição, ande de Bikee nessa quarta-feira.",
                "Já é quinta-feira! Prepare-se para sexta andando de Bikee.",
                "Sextou!! Comemore dando umas voltas de Bikee com os amigos.",
                "Desfrute desse belíssimo sábado andando de Bikee com a família!"
              ];

              echo "<p>" . $weeklyPhrase[date('w')] . "</p>";
            ?>
          </div>
        </div>
        <div class="right-image">
          <img src="./media/img/banner-bg.png" alt="">
        </div>
      </section>

      <section id="advantage-bike">
        <div class="advantage-item">
          <h2>01</h2>
          <div class="advantage-txt-center">
            <img src="./media/img/HealthCare.svg" alt="" id="healthImg">
            <h4>Cuide da sua saúde</h4>
            <p>Pedalar faz com que seu corpo elimine toxinas e libere endorfina, o "hôrmonio do bem-estar".</p>
          </div>
        </div>

        <div class="advantage-item">
          <h2>02</h2>
          <div class="advantage-txt-center">
            <img src="./media/img/SaveAmbient1.svg" alt="" id="healthImg">
            <h4>Ajude o Meio-Ambiente</h4>
            <p>Atualmente, o nível de poluição de São Paulo está acima dos níveis recomendados pela OMS.</p>
          </div>
        </div>

        <div class="advantage-item">
          <h2>03</h2>
          <div class="advantage-txt-center">
            <img src="./media/img/carAndBike.svg" alt="" id="healthImg">
            <h4>Evite o trânsito</h4>
            <p>O tempo economizado, em média, ao andar de Bikee é de cerca de 30 minutos.".</p>
          </div>
        </div>
      </section>

      <section id="rent-bikee">
        <div class="left-image">
          <img src="./media/img/left-image.png" alt="">
        </div>
        <div class="right-text">
          <h4>Alugue sua Bikee V4</h4>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seu design é feito para se adaptar perfeitamente em qualquer tipo de físico, podendo suportar até 115 quilos e contém aros tamanho 24 para atender as mais variadas estaturas. Fora isso, ela tem um banco de altura adaptável, correntes com proteção para evitar acidentes e uma cestinha adaptável que não acumula líquidos ou sujeira – ótimas para trazer as compras. </p>
          <a href="./page-rent.html">
            <button class="main-button">Alugar uma Bikee</button>
          </a>
        </div>
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
