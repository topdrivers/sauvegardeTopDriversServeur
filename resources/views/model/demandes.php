
<?php

// Rajout d'une demande dans la base de donnée
function add_demande($type, $nom, $prenom, $email, $tel, $societe, $msg, $ip, $date){
	
  require ("/../config/bdd.php");

  $sql = "INSERT INTO demandes (type, nom, prenom, email, tel, societe, msg, ip, date)
          VALUES (:type, :nom, :prenom, :email, :tel, :societe, :msg, :ip, :date)";
  $req = $bd->prepare($sql);
  $marqueurs = array(
    'type'=>$type,
    'nom'=>$nom,
    'prenom'=>$prenom,
    'email'=>$email,
    'tel'=>$tel,
    'societe'=>$societe,
    'msg'=>$msg,
    'ip'=>$ip,
    'date'=>$date
  );
  $req->execute($marqueurs);
  $req->closeCursor();
}

// Retourne tous les demandes disponible dans la base de donnée
function get_demandes(){
  require ("/../config/bdd.php");
  //require('/usr/share/php');

  $sql = "SELECT * FROM demandes";
  $req = $bd->prepare($sql);
  $req->execute();
  $result = $req->fetchall();
  $req->closeCursor();

  return $result;
}