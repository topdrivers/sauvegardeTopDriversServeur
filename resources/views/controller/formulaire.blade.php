<?php
// On vérifie que les champs sont bien renseignés
if (!isset($_POST['type']) || !isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['email']) ||
    !isset($_POST['tel']) || !isset($_POST['societe'])  || !isset($_POST['msg'])){
  header('Location: ../page.blade.php?redir=arg');
  exit();
}
if (empty($_POST['type']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) ||
    empty($_POST['tel']) || empty($_POST['societe'])  || empty($_POST['msg'])){
  header('Location: ../page.blade.php?redir=arg');
  exit();
}

// On vérifie que le numéro de téléphone fait bien 10 caractères
if (strlen($_POST['tel']) != 10){
  header('Location: ../page.balde.php?redir=tel');
  exit();
}

// On enregistre les informations des champs avec htmlspecialchars() pour éviter les injections
$type = htmlspecialchars($_POST['type']);
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$email = htmlspecialchars($_POST['email']);
$tel = htmlspecialchars($_POST['tel']);
$societe = htmlspecialchars($_POST['societe']);
$msg = htmlspecialchars($_POST['msg']);


// On enregistre la demande dans la base de donnée
require (__DIR__.'/../model/demandes.php');
add_demande($type, $nom, $prenom, $email, $tel, $societe, $msg, $_SERVER["REMOTE_ADDR"],  time());

// On envoie les mails aux destinataires concernés
require (__DIR__.'/mail.php');
mailto($type, $nom, $prenom, $email, $tel, $societe, $msg);

// Renvoie sur la page de confirmation
header('Location: ../confirmation.php?redir=success');
exit();