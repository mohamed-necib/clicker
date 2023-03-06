<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- LINK CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- LINK JS -->
  <script src="JS/script.js" defer></script>
  <!-- LINK FONTAWESOME  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- LINK LOTTIFILES ANIMATION -->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <title>Ghost - Clicker</title>
</head>

<body>
  <?php require_once "includes/nav.php" ?>
  <main>
    <article>
      <div class="article-score-section article-section">
        <h1>SCORE:</h1><br>
        <span id="score-display"></span>
      </div>
      <div class="article-items-section article-section">
        <div class="items-title">
          <h2>BONUS ITEMS</h2>
        </div>
        <div class="items-selection">
          <div class="item-container">
            <button id="item-1" class="item-btn">
              <i class="fa-solid fa-wand-sparkles"></i>
              Prix: <span id="cost1">20</span>
              Niveau: <span id="level1">0</span>
            </button>
          </div>
          <div class="item-container">
            <button id="item-2" class="item-btn">
              <i class="fa-solid fa-hat-wizard"></i>
              Prix: <span id="cost2">40</span>
              Niveau: <span id="level2">0</span>
            </button>
          </div>
          <div class="item-container">
            <button id="item-3" class="item-btn">
            <i class="fa-solid fa-shield-halved"></i>
              Prix: <span id="cost3">100</span>
              Niveau: <span id="level3">0</span>
            </button>
          </div>
          <div class="item-container">
            <button id="item-4" class="item-btn">
            <i class="fa-solid fa-book-skull"></i>
              Prix: <span id="cost4">1000</span>
              Niveau: <span id="level4">0</span>
            </button>
          </div>
        </div>
      </div>
      <div class="article-specs-section article-section">
        <span id="scoreSecond">0 <i class="fa-sharp fa-solid fa-ghost"></i> par seconde</span>
        <div class="btn-container">
        <button id="save-btn" class="item-btn"><i class="fa-solid fa-floppy-disk"></i></button>
        <button id="reset-btn" class="item-btn"><i class="fa-solid fa-arrow-rotate-left"></i></button>
        </div>
      </div>
      <div class="article-click-section article-section">
        <button id="btn-click"><lottie-player src="https://assets3.lottiefiles.com/packages/lf20_ClOqK5.json" background="transparent" border-radius="50%" speed="1" style="width: 200px; height: 200px;" loop autoplay></lottie-player></button>
      </div>
    </article>
  </main>
</body>

</html>