<?php
// Envoie des mails
function mailto($type, $nom, $prenom, $email, $tel, $societe, $msg) {
  require (__DIR__.'/../config/destinataires.php');


  $to      = $mail_destinaires[$type];
  $subject = 'Nouvelle demande de devis !';
  $message = 'Contact: '. $nom . " " . $prenom . "\r\n\r\n";
  $message .= 'Société: '. $societe . "\r\n\r\n";
  $message .= 'Type de devis: '. $type . "\r\n\r\n";
  $message .= 'Message: '. $msg . "\r\n\r\n";
  $message .= 'Numéro de téléphone: '. $tel;
  $headers = 'From: ' . $email . "\r\n" .
             'Reply-To: ' . $email . "\r\n";


  mail($mail_admin, $subject, $message, $headers);
  mail($to, $subject, $message, $headers);
}
require (__DIR__.'/../config/destinataires.php');
print_r($mail_destinaires['site']);