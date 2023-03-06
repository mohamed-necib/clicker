<?php

class User
{
  //Attributs de connexion
  private PDO $bdd;



  public function __construct()
  {
    //Connexion à la base de données
    $dsn = "mysql:host=localhost;
    dbname=clicker";
    $db_username = "root";
    $db_password = "root";
    $options = array(
      PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    );

    try {
      $this->bdd = new PDO($dsn, $db_username, $db_password, $options);
    } catch (PDOException $e) {
      echo "Erreur: " .
        $e->getMessage();
      die;
    }
  }

  public function checkUserExist($login)
  {
    //On vérifie si l'utilisateur est déjà présent en BDD
    $checkUserExist = $this->bdd->prepare('SELECT login, password FROM utilisateurs WHERE login = ?');
    $checkUserExist->execute(array($login));
    $checkUserExist->fetch();
    $row = $checkUserExist->rowCount();
    if ($row === 0) {
      return true;
    } else {
      return false;
    }
  }

  //FONCTION PERMETTANT L'INSCRIPTION
  public function register($login, $password, $conf_password)
  {
    if ($this->checkUserExist($login)) {
      //Si le mdp correspond au conf-mdp alors on crypte et on envoi les infos en bdd
      if ($password === $conf_password) {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $insert = $this->bdd->prepare('INSERT INTO utilisateurs(login, password) VALUES (:login, :password)');
        $insert->execute([
          'login' => $login,
          'password' => $password,
        ]);

        echo json_encode([
          'response' => 'is_ok',
          'messInscription' => 'Votre inscription a bien été prise en compte'
        ]);
        die();
      }
    }
  }

  //FONCTION PERMETTANT LA CONNEXION 
  public function connexion($login, $password)
  {
    $checkUserExist = $this->bdd->prepare('SELECT id, login, password FROM utilisateurs WHERE login =?');
    $checkUserExist->execute([$login]);
    $data = $checkUserExist->fetch();
    $row = $checkUserExist->rowCount();
    if ($row === 1) {
      $hashedPassword = $data['password'];
      if (password_verify($password, $hashedPassword)) {
        $_SESSION['login'] = $login;
        echo json_encode(['response' => 'ok_connexion', 'messConnexion' => 'Vous êtes bien connécté']);
        die();
      }
    }
  }

  //FONCTION PERMETTANT LA DECONNEXION
  public function deconnect()
  {
    session_start();
    unset($_SESSION['login']);
    session_destroy();
    header("Location: index.php");
  }
}
