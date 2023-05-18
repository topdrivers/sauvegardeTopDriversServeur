<?php
session_start();
if (!isset($_SESSION['id_utilisateur'])){
  header("Location: connexion.php?redir=noconnected");
  exit();
}
?>
<!DOCTYPE HTML>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ideal-Com - Panel Admin</title>
  <meta name="description" content="Panel Admin">
  <meta name="author" content="Guillaume Ladorme">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>


<body>
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><strong>Ideal-Com</strong></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav text-center">
        <li><a href="deconnexion.php"><strong>Se déconnecter</strong></a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container text-center">
  <a href="controller/export.php" class="btn btn-success">Exporter les demandes au format CSV</a>
</div>

<div class="container">
  <h1 class="text-center">Demande de devis</h1>
  <div class="container">
    <div class="text-center well bs-component">
      <?php
      require (__DIR__ .'/controller/load_demandes.php');
      load_demandes();
      ?>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
