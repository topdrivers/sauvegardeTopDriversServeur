
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
 
		case "https://top-drivers.fr/provider/register"  :
			$titre  =   "Enregistrement Chauffeur de taxi";
			$description   =   "Accéder à votre espace privé en vous enregistrant. Joignez les documents obligatoires et prenez la route.";
			$keywords = "taxi s'enregistrer, taxi documents, taxi compte privé, taxi enregistrement";
			
		break;
		
		
		
		case "https://top-drivers.fr/provider/login"  : 
			$titre  =   "Taxi connectez-vous";
			$description   =   "Connectez-vous à votre compte via l'application mobile ou sur ordinateur. Réserver votre chauffeur et géolocaliser sa position.";
			$keywords = "taxi se connecter, taxi compte privé, taxi application mobile, taxi géolocalisé";
			
		break;
		
		case "https://top-drivers.fr/provider/password/reset"  :
			$titre  =   "Chauffeur de taxi mot de passe oublié";
			$description   =   "En cas d'oubli de mot de passe, recréer un nouveau mot de passe. Ne le commnuiquer à personne. Utiliser un mot avec plusieurs caractères spéciaux.";
			$keywords = "taxi nouveau mot de passe, taxi password, taxi mot de passe oublié";
			
		break;
		
		//********************************************************************************
		
		case  "https://www.top-drivers.fr/provider/register" :
			$titre  =   "Enregistrement Chauffeur de taxi";
			$description   =   "Accéder à votre espace privé en vous enregistrant. Joignez les documents obligatoires et prenez la route.";
			$keywords = "taxi s'enregistrer, taxi documents, taxi compte privé, taxi enregistrement";
			
		break;
		
		
		
		case  "https://www.top-drivers.fr/provider/login" : 
			$titre  =   "Taxi connectez-vous";
			$description   =   "Connectez-vous à votre compte via l'application mobile ou sur ordinateur. Réserver votre chauffeur et géolocaliser sa position.";
			$keywords = "taxi se connecter, taxi compte privé, taxi application mobile, taxi géolocalisé";
			
		break;
		
		case  "https://www.top-drivers.fr/provider/password/reset" :
			$titre  =   "Chauffeur de taxi mot de passe oublié";
			$description   =   "En cas d'oubli de mot de passe, recréer un nouveau mot de passe. Ne le commnuiquer à personne. Utiliser un mot avec plusieurs caractères spéciaux.";
			$keywords = "taxi nouveau mot de passe, taxi password, taxi mot de passe oublié";
			
		break;
		
		default : // Si il y a pas une bonne variable GET, on met le switch default ( donc l'accueil ici )
			$titre  =   "Taxi enregistrement connexion";
			$description   =   "Accéder à votre espace privé en vous enregistrant. Connectez-vous à votre compte via l'application mobile ou sur ordinateur. ";
			$keywords = "taxi s'enregistrer, taxi se connecter, taxi compte privé";
		break;
		
		
		
		
		}
   ?>
   

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   
	
	
	
	<title><?php echo $titre;?></title>

    <meta name="description" content="<?php echo $description;?>"/>
	<meta name="keywords" content="<?php echo $keywords;?>"/>
    <meta name="author" content="Top Drivers chargé de la programmation"/>

    <link rel="shortcut icon" type="image/png" href="{{ Setting::get('site_icon') }}"/>


    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div class="full-page-bg" style="background-image: url({{ asset('asset/img/background-inscription-chauffeur.jpg') }});" alt="inscription chauffeur">
        <div class="log-overlay"></div>
            <div class="full-page-bg-inner">
                <div class="row no-margin">
                    <div class="col-md-6 log-left">
                        <span class="login-logo"><img src="{{ Setting::get('site_logo', asset('logo-black.png')) }}"></span>
                        <h2>{{Setting::get('site_title','Tranxit')}} needs partners like you.</h2>
                        <p>Drive with {{Setting::get('site_title','Tranxit')}} and earn great money as an independent contractor. Get paid weekly just for helping our community of riders get rides around town. Be your own boss and get paid in fares for driving on your own schedule.</p>
                    </div>
					
                    <div class="col-md-6 log-right">
                        <div class="login-box-outer">
                            <div class="login-box row no-margin">
                                @yield('content')
                            </div>
                            <div class="log-copy"><p class="no-margin">{{ Setting::get('site_copyright', '&copy; '.date('Y').' Appoets') }}</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/scripts.js') }}"></script>

    @yield('scripts')
    
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
</body>
</html>
