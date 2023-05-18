<?php
// Connexion à la base de donnée
try {
//  $bd = new PDO("mysql:host=localhost;dbname=idealcom_gladorme","root","");
  $bd = new PDO('mysql:host=localhost;dbname=topdriver;charset=utf8', 'admin', 'df646f010f83b1f238f4c99b5e7733ea5f4ae16f14b0ba30');
  $bd->exec('SET NAMES utf8');
} catch (Exception $e){
  die("Erreur: Connexion à la base de donnée impossible");
}