      <header class="header-area header-sticky">
        <div class="main-nav">
          <div class="logo">
            <a href="index.php">
              BIKEES
            </a>
          </div>

          <div class="menu-section">            
            <div class="menu-toggle">
              <div class="one"></div>
              <div class="two"></div>
              <div class="three"></div>
            </div>

            <ul class="nav">
              <li><a href="./index.php" class="menu-item">Página Inicial</a></li>
              <li><a href="./page-rent.php" class="menu-item">Alugue sua Bikee</a></li>
              <li><a href="#about-us" class="menu-item">Sobre Nós</a></li>
            </ul>

            <ul class="nav" id="nav-login">
              <?php
              if (isset($_SESSION['login'])) {
                  if ($_SESSION['login'] != "sim") {
                    echo '<li><a href="./log-in.php">Entrar</a></li>';
                  } else {
                    echo '<li><a href="./php-partials/login-partials/close-session.php">sair</a></li>';
                  }
              } else {
                echo '<li><a href="./log-in.php">Entrar</a></li>';
              }
              ?>
            </ul>

          </div>
        </div>
      </header>