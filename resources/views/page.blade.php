<!DOCTYPE HTML>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ideal-Com - Contact</title>
  <meta name="description" content="Formulaire">
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
  </div>
</nav>

<?php
if (isset($_GET['redir'])){
  if ($_GET['redir'] == "arg"){
    echo "
    <div class='alert alert-dismissible alert-warning'>
      <button type='button' class='close' data-dismiss='alert'>&times;</button>
      <p>Veuillez remplir correctement les champs !</p>
    </div>";
  }
  if ($_GET['redir'] == "tel"){
    echo "
    <div class='alert alert-dismissible alert-warning'>
      <button type='button' class='close' data-dismiss='alert'>&times;</button>
      <p>Veuillez remplir le champs téléphone suivant cet exemple: 0600000000. Sans espace ou point et sans préfix (+33)</p>
    </div>";
  }
}
?>

<div class="container">
  <h1 class="text-center">Demande de devis</h1>
  <div class="container-fluid">
    <div class="col-sx-4"></div>
    <div class="col-sx-4 text-center well bs-component">
      <form method="POST" action="controller/formulaire">
	  {{ csrf_field () }} 
        <div class="form-group">
          <label for="type">Type:</label>
          <select class="form-control text-center" name="type" id="type" required>
            <option value="site" selected>Site Internet</option>
            <option value="app">Application</option>
            <option value="ecommerce">eCommerce</option>
          </select>
        </div>
        <div class="form-group">
          <label for="nom">Nom:</label>
          <input type="text" class="form-control text-center" name="nom" id="nom" placeholder="Entrez votre nom" required>
        </div>
        <div class="form-group">
          <label for="prenom">Prénom:</label>
          <input type="text" class="form-control text-center" name="prenom" id="prenom" placeholder="Entrez votre prénom" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control text-center" name="email" id="email" placeholder="Entrez votre email" required>
        </div>
        <div class="form-group">
          <label for="tel">Numéro de téléphone:</label>
          <input type="text" class="form-control text-center" name="tel" id="tel" placeholder="Entrez votre numéro de téléphone" pattern="[0-9]{10}" required>
        </div>
        <div class="form-group">
          <label for="societe">Nom de la société:</label>
          <input type="text" class="form-control text-center" name="societe" id="societe" placeholder="Entrez le nom de votre société" required>
        </div>
        <div class="form-group">
          <label for="msg">Message:</label>
          <textarea class="form-control text-justify" rows="5" id="msg" name="msg" placeholder="Entrez les détails de votre demande ici ..." required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Envoyer la demande</button>
      </form>
    </div>
    <div class="col-sx-4"></div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>