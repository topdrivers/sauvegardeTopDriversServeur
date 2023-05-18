<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	 <?php
   
  
	$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	


   switch ($actual_link)
 
	{
 
		
		case "https://top-drivers.fr/login" :
			$titre  =   "Taxi login Espace client privé";
			$description   =   "Entrer vos identifiants pour accéder aux fonctionalités de l'application mobile Top Drivers.";
			$keywords = "taxi login, taxi identifiants, taxi application mobile, taxi se connecter";
			
		break;
		
		
		
		
		case "https://top-drivers.fr/register" :
			$titre  =   "Créer un compte, gérer vos réservations";
			$description   =   "Créer votre compte pour disposer d'un espace client privé et profiter des fonctionalités tel que la facturation, mode de paiement, l'application mobile.";
			$keywords = "taxi compte, taxi s'enregistrer, taxi factures, taxi s'inscrire";
			
		break;
		
		case "https://top-drivers.fr/password/reset":
			$titre  =   "Chauffeur de taxi réinitialiser mot de passe";
			$description   =   "Ressaisier un nouveau mot de passe. Vous aurez la possibilité de choisir un nouveau mot de passe. Choisisser un mot de passe compliqué et ne le communiquer à personne.";
			$keywords = "taxi client mot de passe, taxi client mot de passe oublié, taxi nouveau mot de passe";
			
		break;
		
		
		//***************************************************************
		case "https://www.top-drivers.fr/login" :
			$titre  =   "Taxi login Espace client privé";
			$description   =   "Entrer vos identifiants pour accéder aux fonctionalités de l'application mobile Top Drivers.";
			$keywords = "taxi login, taxi identifiants, taxi application mobile, taxi se connecter";
			
		break;
		
		
		
		
		case "https://www.top-drivers.fr/register" :
			$titre  =   "Créer un compte, gérer vos réservations";
			$description   =   "Créer votre compte pour disposer d'un espace client privé et profiter des fonctionalités tel que la facturation, mode de paiement, l'application mobile.";
			$keywords = "taxi compte, taxi s'enregistrer, taxi factures, taxi s'inscrire";
			
		break;
		
		case "https://www.top-drivers.fr/password/reset" :
			$titre  =   "Chauffeur de taxi réinitialiser mot de passe";
			$description   =   "Ressaisier un nouveau mot de passe. Vous aurez la possibilité de choisir un nouveau mot de passe. Choisisser un mot de passe compliqué et ne le communiquer à personne.";
			$keywords = "taxi client mot de passe, taxi client mot de passe oublié, taxi nouveau mot de passe";
			
		break;
		
		default : // Si il y a pas une bonne variable GET, on met le switch default ( donc l'accueil ici )
			$titre  =   "Créer un compte login";
			$description   =   "Entrer vos identifiants pour accéder aux fonctionalités et disposer d'un espace client privé et profiter des fonctionalités tel que la facturation.";
			$keywords = "taxi s'enregistrer, taxi login, taxi compte privé";
		break;
		
		
		
		
		}
   ?>

    <title><?php echo $titre;?></title>

    <meta name="description" content="<?php echo $description;?>"/>
	<meta name="keywords" content="<?php echo $keywords;?>"/>
    <meta name="author" content="Top Drivers chargé de la programmation"/>

<link rel="shortcut icon" type="image/png" href="https://top-drivers.fr/asset/img/fav-icon.jpeg"/>
    
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">

</head>

<body>

	@yield('content')

    <script src="{{asset('asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/js/scripts.js')}}"></script>
    @if(Setting::get('demo_mode', 0) == 1)
        <!-- Start of LiveChat (www.livechatinc.com) code -->
        <script type="text/javascript">
            window.__lc = window.__lc || {};
            window.__lc.license = 8256261;
            (function() {
                var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
                lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
            })();
        </script>
        <!-- End of LiveChat code -->
    @endif

    @yield('scripts')
    
</body>
</html>