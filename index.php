<?php
session_start();
require_once './src/User.php';

// On check le formulaire d'inscription, si celui-ci est rempli on lance la fonction register qui ajoute l'utilisateur en BDD:
if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['conf-password'])) {
  $login = htmlspecialchars($_POST['login']);
  $password = htmlspecialchars($_POST['password']);
  $conf_password = htmlspecialchars($_POST['conf-password']);

  $newRegister = new User($login, $password, $conf_password);
  $newRegister->register($login, $password, $conf_password);
  die();
}

//On check les champs du formulaire de connexion, on lance ensuite la fonction connexion qui compare avec les infos de la bdd et qui permet à l'utiliser de se connecter sous conditions que son compte existe.
if (isset($_POST['login']) && isset($_POST['password'])) {
  $login = htmlspecialchars($_POST['login']);
  $password = htmlspecialchars($_POST['password']);
  $newConnexion = new User($login, $password);
  $newConnexion->connexion($login, $password);
  die();
};

?>

<!DOCTYPE html>
<html lang="fr">

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
  <!-- LINK LOTTIFILES ANIMATION -->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <title>Ghost - Clicker</title>
</head>

<body>
  <?php require_once "includes/nav.php" ?>
  <section>
    <div class="wrapper">
      <span class="icon-close"><i class="fa-sharp fa-solid fa-skull-crossbones"></i></span>
      <!-- CONNEXION -->
      <div class="form-box login">
        <h2>Connexion</h2>
        <form action="#" method="post" id="login-form">
          <div class="input-box">
            <span class="icon"><i class="fa-solid fa-user"></i></span>
            <input type="text" name="login" id="login-input" autocomplete="off" required>
            <label for="login-input">Login</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="fa-solid fa-lock"></i></span>
            <input type="password" name="password" id="login-password" required>
            <label for="login-password">Password</label>
          </div>
          <button type="submit" class="btn">Se Connecter</button>
          <div class="login-register">
            <p>Pas encore de compte? <a href="#" class="register-link"> Inscription</a></p>
          </div>
        </form>
      </div>
      <!-- INSCRIPTION -->
      <div class="form-box register">
        <h2>Inscription</h2>
        <form action="#" method="post" id="register-form">
          <div class="input-box">
            <span class="icon"><i class="fa-solid fa-user"></i></span>
            <input type="text" name="login" id="register-input" autocomplete="off" required>
            <label for="register-input">Login</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="fa-solid fa-lock"></i></span>
            <input type="password" name="password" id="password" required>
            <label for="login-password">Password</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="fa-solid fa-lock"></i></span>
            <input type="password" name="conf-password" id="conf-password" required>
            <label for="login-password">Confirmation password</label>
          </div>
          <button type="submit" class="btn">S'inscrire</button>
          <div class="login-register">
            <p>Déjà un compte? <a href="#" class="login-link"> Connexion</a></p>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script src="./JS/form-anim.js"></script>
</body>

</html>