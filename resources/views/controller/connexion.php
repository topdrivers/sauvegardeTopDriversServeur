<?php
// On vérifie si la personne est pas déjà connecté: $_SESSION['id_utilisateur'] est définit uniquement lorsqu'un utilisateur se connecte au panel admin
session_start();
if (isset($_SESSION['id_utilisateur'])){
  header("Location: ../admin.php");
  exit();
}

// On verifie si les champs sont bien renseigné
if(!isset($_POST['email']) || !isset($_POST['password'])){
  header('Location: ../page.php?redir=arg');
  exit();
}
if(empty($_POST['email']) || empty($_POST['password'])){
  header('Location: ../page.php?redir=arg');
  exit();
}

require (__DIR__.'/../model/utilisateurs.php');

// On vérifie que l'adresse email existe
$count_utilisateurs_email = count_utilisateurs_email($_POST['email']);
if($count_utilisateurs_email == 0){
  header("Location: ../page.php?redir=errconnect");
  exit();
}

$id_utilisateur = get_id_via_email($_POST['email']);
$password = get_utilisateur_password($id_utilisateur);

// On vérifie que le mot de passe est bien le même que celui enregistré dans la base de donnée
if(password_verify(htmlspecialchars($_POST['password']), $password)){
  $details = get_utilisateur_details($id_utilisateur);

  $_SESSION['id_utilisateur'] = $details['id_utilisateur'];
  $_SESSION['email'] = $details['email'];

  header('Location: ../admin.php?redir=success');
  exit();
}else{
  header("Location: ../index.php?redir=errconnect");
  exit();
}