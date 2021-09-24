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

          <section id="choose-a-plan" class="flex flex-center flex-column">

            <h1>Escolha um plano</h1>

            <h3> Vamos economizar? </h3>

            <p> 
              Escolhendo um plano mensal na Bikees, você ganha um desconto e tem suas bikees reservadas
              para usar quando quiser, sem burocracia e sem filas.  
            </p>

            <hr />

            <br>

            <div id="card-group" class="flex flex-wrap">

              <label class="card-plan flex flex-center flex-column not-selected" id="normal-plan">

                <span> <h1> Normal </h1> </span>

                <span> <p> Com este plano, você tem direito aos benefícios básicos, alguns deles são: </p>   

                <br>

                <details>
                  <summary> 2 BIKEES diferentes </summary>
                  <br>
                  <p><small>Você tem o direito de escolher uma das duas bicicletas inclusas no plano.</small></p>
                </details>

                <br>

                <details>
                  <summary> Bikees perto de você, na sua cidade </summary>
                  <br>
                  <p><small>Os pontos Bikees estão disponibilizados na maioria da grande São Paulo.</small></p>
                </details>

                <br>

                <details>
                  <summary> 4 horas por dia para pedalar </summary>
                  <br>
                  <p><small>Você pode utilizar das bikees por até quatro horas durante um único dia.</small></p>
                </details>

                <br>

                <details>
                  <summary> Suporte básico no Bikees System </summary>
                  <br>
                  <p><small>Para qualquer problema, você tem o suporte básico do sistema para utilizar.</small></p>
                </details>

                <br>

                <div id="slider_one" class="slider flex flex-row">
                  <img src="./media/img/yellow-bikee-slider.png" alt="Bikee Amarela">
                  <img src="./media/img/green-bikee-slider.png" alt="Bikee Verde">
                </div>

                <p> Tudo isto pelo baixíssimo e econômico preço de: </p> </span>

                <span class="right-text"><h3> Selecionado </h3></span>

                <span> 
                  <h2> 28,90 R$ </h2> 
                  <small> mensais </small> 
                </span>

                <span>
                  
                  <details>

                    <summary> Saiba mais </summary>

                    <br>

                    <p> Selecionando este plano, você tem um desconto de aproximadamente 13,50 R$,
                    que clientes pagam usando as Bikees em dias aleatórios. </p>

                  </details>

                  <br>

                </span>
      
              </label>

              <label class="card-plan flex flex-center flex-column not-selected" id="premium-plan">

                <span> <h1> Premium </h1> </span>

                <span> <p> Com este plano, você tem direito aos benefícios PREMIUM, alguns deles são: </p>

                <br>

                <details>
                  <summary> 5 BIKEES diferentes </summary>
                  <br>
                  <p><small>Você tem o direito de escolher até duas das cinco bicicletas inclusas no plano.</small></p>
                </details>

                <br>

                <details>
                  <summary> Bikees perto de você, na sua cidade </summary>
                  <br>
                  <p><small>Os pontos Bikees estão disponibilizados na maioria da grande São Paulo.</small></p>
                </details>

                <br>

                <details>
                  <summary> Até 7 horas por dia para pedalar </summary>
                  <br>
                  <p><small>Você pode utilizar das bikees por até sete horas durante um único dia.</small></p>
                </details>

                <br>

                <details>
                  <summary> Suporte prioritário no Bikees System </summary>
                  <br>
                  <p><small>Para qualquer problema, você tem o suporte prioritário do sistema para utilizar.</small></p>
                </details>

                <br>

                <div id="slider_two" class="slider flex flex-row">
                  <img src="./media/img/yellow-bikee-slider.png" alt="Bikee Amarela">
                  <img src="./media/img/green-bikee-slider.png" alt="Bikee Verde">
                  <img src="./media/img/white-bikee-slider.png" alt="Bikee Branca">
                  <img src="./media/img/black-bikee-slider.png" alt="Bikee Preta">
                </div>

                <p> Tudo isto pelo baixíssimo e econômico preço de: </p> </span>

                <span> 
                  <h2><del> 60,90 R$ </del></h2> 
                  <small> mensais </small> 
                </span>

                <span class="right-text"><h3> Selecionado </h3></span>

                <span> 
                  <h2> 48,90 R$ </h2> 
                  <small> mensais </small> 
                </span>

                <span>
                  
                  <details>

                    <summary> Saiba mais </summary>

                    <br>

                    <p> Selecionando este plano, você tem um desconto de aproximadamente 18,50 R$,
                    que clientes pagam usando as Bikees em dias aleatórios. </p>

                  </details>

                  <br>

                </span>
                
              </label>

              <span>
                  <label class="radio"> 
                    <input type="radio" name="selected-plan" id="selected-plan" value="Normal"></input>
                    <input type="radio" name="selected-plan" id="selected-plan" value="Premium"></input>
                  </label>
              </span>

            </label>

          </section>

          <!-- Seção 3: Mapear bikee -->

          <section id="map-a-bikee">

            <h1>Ache sua Bikee</h1>
            
            <fieldset>

              <div class="map">
                <iframe id="maps" src="https://www.google.com/maps/embed/v1/search?q=bike%20itau&key=AIzaSyAGb12yL0LK59e7SqGfX3bGOxyNxVxmGxo" width="450" height="450" loading="lazy"></iframe>
              </div>

              <div class="right-text">
                <h4>Reserve sua bikee aqui e busque-a no local mostrado pelo mapa.</h4>
                <div class="input-area">
                  <h5>Procure uma bikee perto de você.</h5>
                </div>

                <?php 

                  if (isset($_SESSION['login'])) {
                    if ($_SESSION['login'] != "sim") {
                      echo '<p><small>Obs: Você precisa ter uma conta para reservar uma bikee!</small></p>';
                    } 
                  }

                  // Se estiver logado, aparecerá nada

                  else {
                    echo '<p><small>Obs: Você precisa ter uma conta para reservar uma bikee!</small>';
                  }

                   ?>

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
