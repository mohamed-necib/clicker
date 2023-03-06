<header>
  <nav>
    <div class="nav-section nav-logo-section" id="nav-logo-section">
      <a href="index.php"><span>Pick a Boo!!!</span>
        <i class="fa-sharp fa-solid fa-ghost"></i>
      </a>
    </div>
    <div class="nav-section nav-link-section" id="nav-link-section">
      <a href="index.php">Accueil</a>
      <?php if (isset($_SESSION['login'])) : ?>
        <a href="game.php">Ghost-Clicker Game</a>
      <?php endif; ?>
    </div>
    <div class="nav-section nav-social-section" id="nav-social-section">
      <a href="github"><i class="fa-brands fa-github"></i></a>
      <a href="portfolio"><i class="fa fa-book-open"></i></a>
      <a href="linkedin"><i class="fa-brands fa-linkedin"></i></a>
    </div>
    <div class="nav-section nav-register-section" id="nav-register-section">
      <?php if (isset($_SESSION['login'])) : ?>
        <a href="logout.php" id="btn-deconnexion">Déconnexion</a>
      <?php else : ?>
        <a href="#">authentification</a>
      <?php endif; ?>
    </div>
  </nav>
</header>