<?php
// On vérifie que le visiteur est bien autorisé à acceder la page
session_start();
if (!isset($_SESSION['id_utilisateur'])){
  header("Location: connexion.php?redir=noconnected");
  exit();
}


require (__DIR__ .'/../model/demandes.php');
$demandes = get_demandes();

// On supprime les duplications des champs lors de la requête et on transforme le timestamp enregistré dans la base de donnée en une date lisible
foreach ($demandes as $row=>$value){
  unset($demandes[$row][0]);
  unset($demandes[$row][1]);
  unset($demandes[$row][2]);
  unset($demandes[$row][3]);
  unset($demandes[$row][4]);
  unset($demandes[$row][5]);
  unset($demandes[$row][6]);
  unset($demandes[$row][7]);
  unset($demandes[$row][8]);
  unset($demandes[$row][9]);
  $demandes[$row]['date'] = date("d-m-Y H:i:s", $value['date']);
}

// On transforme le résultat de la base de donnée en CSV
function array2csv(array &$array)
{
  if (count($array) == 0) {
    return null;
  }
  ob_start();
  $df = fopen("php://output", 'w');
  fputcsv($df, array_keys(reset($array)));
  foreach ($array as $row) {
    fputcsv($df, $row);
  }
  fclose($df);
  return ob_get_clean();
}

// On modifie l'en-tête HTTP pour faire télécharger le fichier
function download_send_headers($filename) {
  $now = gmdate("D, d M Y H:i:s");
  header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
  header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
  header("Last-Modified: {$now} GMT");

  header("Content-Type: application/force-download");
  header("Content-Type: application/octet-stream");
  header("Content-Type: application/download");

  header("Content-Disposition: attachment;filename={$filename}");
  header("Content-Transfer-Encoding: binary");
}

download_send_headers("data_export_" . date("Y-m-d") . ".csv");
echo array2csv($demandes);
die();
