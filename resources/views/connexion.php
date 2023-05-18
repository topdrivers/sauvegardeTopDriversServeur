<!DOCTYPE HTML>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ideal-Com - Connexion</title>
  <meta name="description" content="Connexion au Panel Admin">
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

<div class="container">
  <h1 class="text-center">Accès restreint</h1>
  <div class="container-fluid">
    <div class="col-sx-4"></div>
    <div class="col-sx-4 text-center well bs-component">
      <form method="POST" action="controller/connexion.php">
        <div class="form-group">
          <label for="nom">Email:</label>
          <input type="email" class="form-control text-center" name="email" id="email" placeholder="Entrez votre email" required>
        </div>
        <div class="form-group">
          <label for="password">Mot de passe:</label>
          <input type="password" class="form-control text-center" name="password" id="password" placeholder="Entrez votre mot de passe" required>
        </div>
        <button type="submit" class="btn btn-success">Se connecter</button>
      </form>
    </div>
    <div class="col-sx-4"></div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>