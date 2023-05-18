<?php
// Affichage des demandes sur le panel admin
function load_demandes(){
  require (__DIR__ .'/../model/demandes.php');
  $result = get_demandes();

  echo "
  <table class='table table-striped table-hover text-center'>
    <thead>
      <tr>
        <th class='text-center'>#</th>
        <th class='text-center'>Type</th>
        <th class='text-center'>Nom</th>
        <th class='text-center'>Prénom</th>
        <th class='text-center'>Email</th>
        <th class='text-center'>Téléphone</th>
        <th class='text-center'>Société</th>
        <th class='text-center'>Message</th>
        <th class='text-center'>Adresse IP</th>
        <th class='text-center'>Date</th>
      </tr>
    </thead>
    <tbody>
  ";

  foreach ($result as $cle=>$value){
    $i = $cle + 1;
    echo "
    <tr>
      <td>{$i}</td>
      <td><span class='label label-success'>{$value['type']}</span></td>
      <td>{$value['nom']}</td>
      <td>{$value['prenom']}</td>
      <td>{$value['email']}</td>
      <td>{$value['tel']}</td>
      <td>{$value['societe']}</td>
      <td>".nl2br($value['msg'])."</td>
      <td>{$value['ip']}</td>
      <td>".date("d-m-Y H:i:s", $value['date'])."</td>
    </tr>";
  }

  echo "
      </tbody>
  </table>
  ";

  if (count($result) == 0){
    echo "
    <div class='alert alert-dismissible alert-warning'>
      <p>Il n'y a pas encore de demande de devis disponible</p>
    </div>";
  }
}
?>
