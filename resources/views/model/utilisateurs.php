<?php
// Retourne tous les informations d'un utilisateur
function get_utilisateur_details($id_utilisateur){
  require (__DIR__ .'/../config/bdd.php');

  $sql = "SELECT * FROM utilisateurs WHERE id_utilisateur = :id_utilisateur";
  $req = $bd->prepare($sql);
  $marqueurs = array('id_utilisateur'=>$id_utilisateur);
  $req->execute($marqueurs);
  $result = $req->fetchall();
  $req->closeCursor();

  return $result[0];
}
// Retourne l'id_utilisateur d'un utilisateur à partir de son email
function get_id_via_email($email){
  require (__DIR__ .'/../config/bdd.php');

  $sql = "SELECT id_utilisateur FROM utilisateurs WHERE email = :email";
  $req = $bd->prepare($sql);
  $marqueurs = array('email'=>htmlspecialchars($email));
  $req->execute($marqueurs);
  $result = $req->fetchall();
  $req->closeCursor();

  return $result[0]['id_utilisateur'];
}
// Retourne le nombre d'utilisateur avec un email
function count_utilisateurs_email($email){
  require (__DIR__ .'/../config/bdd.php');

  $sql = "SELECT COUNT(id_utilisateur) FROM utilisateurs WHERE email = :email";
  $req = $bd->prepare($sql);
  $marqueurs = array('email'=>htmlspecialchars($email));
  $req->execute($marqueurs);
  $result = $req->fetchall();
  $req->closeCursor();

  return $result[0]['COUNT(id_utilisateur)'];
}
// Retourne le mot de passe d'un utilisateur
function get_utilisateur_password($id_utilisateur){
  require (__DIR__ .'/../config/bdd.php');

  $sql = "SELECT password FROM utilisateurs WHERE id_utilisateur = :id_utilisateur";
  $req = $bd->prepare($sql);
  $marqueurs = array('id_utilisateur'=>$id_utilisateur);
  $req->execute($marqueurs);
  $result = $req->fetchall();
  $req->closeCursor();

  return $result[0]['password'];
}