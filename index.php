<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- LINK CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- LINK JS -->
  <script src="script.js" defer></script>
  <!-- LINK FONTAWESOME  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Clicker-GAME</title>
</head>

<body>
  <nav>
    <div class="nav-section nav-logo-section" id="nav-logo-section">
      <a href="#">
        <i class="fa-sharp fa-solid fa-ghost"></i>
      </a>
    </div>
    <div class="nav-section nav-link-section" id="nav-link-section">
      <a href="index.php">Accueil</a>
      <a href="connexion.php">Connexion</a>
    </div>
    <div class="nav-section nav-social-section" id="nav-social-section">
      <a href="github"><i class="fa-brands fa-github"></i></a>
      <a href="portfolio"><i class="fa fa-book-open"></i></a>
      <a href="linkedin"><i class="fa-brands fa-linkedin"></i></a>
    </div>
    <div class="nav-section nav-register-section" id="nav-register-section">
      <a href="register.php">Inscription</a>
    </div>
  </nav>

  <main>
    <article>
      <div class="article-score-section article-section">
        <h1>SCORE:</h1><br>
        <span id="score-display"></span>
      </div>
      <div class="article-items-section article-section">
        <h2>ITEMS</h2>
        <button id="item-1" class="item-btn">
          <i class="fa-solid fa-wand-sparkles"></i>
          Prix: <span id="cost1">20</span>
          Niveau: <span id="level1">0</span>
        </button>
        <button id="item-2" class="item-btn">
          <i class="fa-solid fa-hat-wizard"></i>
          Prix: <span id="cost2">40</span>
          Niveau: <span id="level2">0</span>
        </button>

      </div>
      <div class="article-title-section article-section">
        <p></p>
      </div>
      <div class="article-click-section article-section">
        <button id="btn-click">CLICK MUTHAFUCKAAAA!!!</button>
      </div>
    </article>
  </main>

</body>

</html>