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
 
		case "https://top-drivers.fr/":
			$titre  =   "Top Drivers - Taxi à Strasbourg, par téléphone, par application mobile";
			$description   =   "Réserver votre chauffeur de taxi à Strasbourg de diférentes manières : par tél : 03 88 44 00 44, via notre formulaire, ou en téléchargeant notre application.";
			$keywords = "taxi, taxi strasbourg, taxi gare strasbourg, taxi aéroport";
			
		break;
		case "https://www.top-drivers.fr/":
			$titre  =   "Top Drivers - Taxi à Strasbourg, par téléphone, par application mobile";
			$description   =   "Réserver votre chauffeur de taxi à Strasbourg de diférentes manières : par tél : 03 88 44 00 44, via notre formulaire, ou en téléchargeant notre application.";
			$keywords = "taxi, taxi strasbourg, taxi gare strasbourg, taxi aéroport";
			
		break;
 
		case "https://top-drivers.fr/taxi-strasbourg" :
			$titre  =   "Top Drivers - Taxi Strasbourg, proche de vous, chauffeur géolocalisé";
			$description   =   "Top Drivers vous assure un taxi à Strasbourg et environs. Nous desservons les gares et aéroports. L'arrivée du taxi chauffeur ne sera plus un sujet d'inquiétude.";
			$keywords = "taxi, taxi strasbourg, taxi gare strasbourg, taxi aéroport strasbourg";
			
		break;
		case  "https://www.top-drivers.fr/taxi-strasbourg" :
			$titre  =   "Top Drivers - Taxi Strasbourg, proche de vous, chauffeur géolocalisé";
			$description   =   "Top Drivers vous assure un taxi à Strasbourg et environs. Nous desservons les gares et aéroports. L'arrivée du taxi chauffeur ne sera plus un sujet d'inquiétude.";
			$keywords = "taxi, taxi strasbourg, taxi gare strasbourg, taxi aéroport strasbourg";
			
		break;
		
		
		case "https://top-drivers.fr/ride"  :
			$titre  =   "Taxi réserver votre chauffeur";
			$description   =   "Estimer le prix de votre course. Faites le choix du type de véhicule : berline, éléctrique ou van puis réserver votre taxi.";
			$keywords = "estimer tarif taxi, estimer prix taxi, taxi éléctrique, taxi van";
			
		break;
		case  "https://www.top-drivers.fr/ride" :
			$titre  =   "Taxi réserver votre chauffeur";
			$description   =   "Estimer le prix de votre course. Faites le choix du type de véhicule : berline, éléctrique ou van puis réserver votre taxi.";
			$keywords = "estimer tarif taxi, estimer prix taxi, taxi éléctrique, taxi van";
			
		break;
		case "https://top-drivers.fr/drive"  :
			$titre  =   "Devener chauffeur de taxi";
			$description   =   "Rejoigner Top Drivers et soyez notre partenaire privillégié. Recevez vos courses planifiées et instannées via l'application";
			$keywords = "devenir taxi, devenir chauffeur, taxi partenaire, taxi recevoir courses";
			
		break;
		case  "https://www.top-drivers.fr/drive" :
			$titre  =   "Devener chauffeur de taxi";
			$description   =   "Rejoigner Top Drivers et soyez notre partenaire privillégié. Recevez vos courses planifiées et instannées via l'application";
			$keywords = "devenir taxi, devenir chauffeur, taxi partenaire, taxi recevoir courses";
			
		break;
		case "https://top-drivers.fr/confidentialite"  :
			$titre  =   "Top Drivers confidentialité";
			$description   =   "Les règles de confidentialité s'appliquent à tous les utilisateurs et partenaire de Top Drivers. ";
			$keywords = "Top Drivers confidentialité, Top Drivers règles confidentielles, taxi confidentialité";
			
		break;
		case  "https://www.top-drivers.fr/confidentialite" :
			$titre  =   "Top Drivers confidentialité";
			$description   =   "Les règles de confidentialité s'appliquent à tous les utilisateurs et partenaire de Top Drivers. ";
			$keywords = "Top Drivers confidentialité, Top Drivers règles confidentielles, taxi confidentialité";
			
		break;
		case "https://top-drivers.fr/conditions"  :
			$titre  =   "Top Drivers conditions générales";
			$description   =   "Les utilisateurs et partenaires de Top Drivers sont soumis aux condtions générales.";
			$keywords = "Top Drivers conditions, Top Drivers conditions générales, taxi conditions";
			
		break;
		case  "https://www.top-drivers.fr/conditions" :
			$titre  =   "Top Drivers conditions générales";
			$description   =   "Les utilisateurs et partenaires de Top Drivers sont soumis aux condtions générales.";
			$keywords = "Top Drivers conditions, Top Drivers conditions générales, taxi conditions";
			
		break;
		
		case "https://top-drivers.fr/taxi-chauffeur":
			$titre  =   "Taxi chauffeur privé, devenez notre partenaire";
			$description   =   "Augmenter vos revenus en travaillant avec Top Drivers. Visualiser les chiffres journaliers, hebdomadaires et mensuels";
			$keywords = "taxi revenus, taxi partenaires, taxi augmenter vos coures, taxi cahuffeur";
			
		break;
		case "https://www.top-drivers.fr/taxi-chauffeur" :
			$titre  =   "Taxi chauffeur privé, devenez notre partenaire";
			$description   =   "Augmenter vos revenus en travaillant avec Top Drivers. Visualiser les chiffres journaliers, hebdomadaires et mensuels";
			$keywords = "taxi revenus, taxi partenaires, taxi augmenter vos coures, taxi cahuffeur";
			
		break;
		case "https://top-drivers.fr/taxi-low-cost" :
			$titre  =   "taxi bas coût";
			$description   =   "Nos clients profitent régulièrement de promotions, de code promos, des courses par cher, et des tarifs avantageux";
			$keywords = "taxi tarifs pas cher, taxi prix pas cher, taxi promotions, taxi code promos";
			
		break;
		case  "https://www.top-drivers.fr/taxi-low-cost" :
			$titre  =   "taxi bas coût";
			$description   =   "Nos clients profitent régulièrement de promotions, de code promos, des courses par cher, et des tarifs avantageux";
			$keywords = "taxi tarifs pas cher, taxi prix pas cher, taxi promotions, taxi code promos";
			
		break;
		case "https://top-drivers.fr/devenir-taxi" :
			$titre  =   "Devenir taxi";
			$description   =   "Denvenez taxi avec Top Drivers. Nous nous assurons de fournir un flux de courses constants et de qualité.";
			$keywords = "taxi devenir taxi, taxi courses longues, taxi partenaires";
			
		break;
		
		case "https://www.top-drivers.fr/devenir-taxi" :
			$titre  =   "Devenir taxi";
			$description   =   "Denvenez taxi avec Top Drivers. Nous nous assurons de fournir un flux de courses constants et de qualité.";
			$keywords = "taxi devenir taxi, taxi courses longues, taxi partenaires";
			
		break;
		
		
		case "https://top-drivers.fr/taxi-electriques" :
			$titre  =   "taxi électriques";
			$description   =   "Top Drivers c'est le choix de voitures 100% éléctriques, et de voitures hybrids";
			$keywords = "taxi éléctrique, taxi voiture éléctrique, taxi hybrids, taxi voiture hybrid";
			
		break;
		
		case   "https://www.top-drivers.fr/taxi-electriques" :
			$titre  =   "taxi électriques";
			$description   =   "Top Drivers c'est le choix de voitures 100% éléctriques, et de voitures hybrids";
			$keywords = "taxi éléctrique, taxi voiture éléctrique, taxi hybrids, taxi voiture hybrid";
			
		break;
		
		case "https://top-drivers.fr/taxi-securite" :
			$titre  =   "Taxi sécurité";
			$description   =   "Top Drivers vous garantit la propreté et la sécurité à bords de ces véhicules, et d'une conduite responsable";
			$keywords = "taxi sécurité, taxi voiture sûr, taxi voiture contrôlé, taxi responsable";
			
		break;
		case  "https://www.top-drivers.fr/taxi-securite":
			$titre  =   "Taxi sécurité";
			$description   =   "Top Drivers vous garantit la propreté et la sécurité à bords de ces véhicules, et d'une conduite responsable";
			$keywords = "taxi sécurité, taxi voiture sûr, taxi voiture contrôlé, taxi responsable";
			
		break;
		
		case  "https://www.top-drivers.fr/mentions-legales/siege-sociale":
			$titre  =   "Top Drivers - Mentions légales société";
			$description   =   "Informez-vous des informations légales de la société Top Drivers dont le siège sociale se trouve 10 rue de neuvic";
			$keywords = "taxi société, taxi mentions légales, taxi coordonnée, taxi siège sociale";
			
		break;
		
		
		
 
 
		// Tu rajoute d'autre switch de la même façon ici !
 
 
		default : // Si il y a pas une bonne variable GET, on met le switch default ( donc l'accueil ici )
			$titre  =   "Taxi Strasbourg par défaut";
			$description   =   "Top Drivers desription par défaut";
			$keywords = "";
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
    <div id="wrapper">
        <div class="overlay" id="overlayer" data-toggle="offcanvas"></div>

        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li>
                </li>
                <li class="full-white">
                    <a href="{{ url('/register') }}">INSCRIPTION CLIENT</a>
                </li>
                <li class="white-border">
                    <a href="{{ url('/provider/login') }}">DEVENIR CHAUFFEUR</a>
                </li>
                <li>
                    <a href="#reservation_en_ligne">Réserver votre course</a>
                </li>
                <li>
                    <a href="{{ url('/drive') }}">Conduire</a>
                </li>
              
                <li>
                    <a href="{{ url('/confidentialite') }}">Politique de confidentialité</a>
                </li>
                <li>
                    <a href="{{ url('/conditions') }}">Termes et Conditions</a>
                </li>
				
				<li>
                    <a href="{{ url('/mentions-legales/siege-sociale') }}">Mentions légales</a>
                </li>
				<li>
                    <a href="{{ url('/data-privacy') }}">Privacy</a>
                </li>
                
<!--                <li>
                    <a href="{{ url('/taxi-electriques') }}">Notre impact local</a>
                </li>
                 </li>
                <li>
                    <a href="{{ url('/taxi-securite') }}">Comment garantir votre sécurité</a>
                </li> -->

                <li>
                    <a href="{{ Setting::get('store_link_ios','#') }}"><img src="{{ asset('/asset/img/appstore-application-mobile.png') }}" alt = "appstore application mobile"></a>
                </li>
                <li>
                    <a href="{{ Setting::get('store_link_android','#') }}"><img src="{{ asset('/asset/img/playstore-application-mobile.png') }}" alt = "playstore application mobile"></a>
                </li>
            </ul>
        </nav>

        <div id="page-content-wrapper">
            <header>
                <nav class="navbar navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Basculer la navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                                <span class="hamb-top"></span>
                                <span class="hamb-middle"></span>
                                <span class="hamb-bottom"></span>
                            </button>

                            <a class="navbar-brand" href="{{url('/')}}"><img src="{{ Setting::get('site_logo', asset('logo-black.png')) }}"></a>
							<a class="navbar-telephone" href="tel:+33388440044"><img class="navbar-telephone" src="{{ asset('asset/img/reservation-par-telephone.png') }}" alt =  "reservation taxi par téléphone"><span  style="color:white" >  03 88 44 00 44</span></a>
							
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav ">
							
                                <li @if(Request::url() == url('/ride')) class="active" @endif>
                                    
									<a href="{{ Setting::get('store_link_ios','#') }}"><img src="{{ asset('/asset/img/appstore-application-mobile.png') }}" alt = "appstore application mobile"></a>
									
								</li>	
								<li @if(Request::url() == url('/drive')) class="active" @endif>
                                   <a href="{{ Setting::get('store_link_android','#') }}"><img src="{{ asset('/asset/img/playstore-application-mobile.png') }}" alt = "playstore application mobile"></a>
                                </li>
								
							</ul>
							
                            <ul class="nav navbar-nav navbar-right">
								<li>
								
								<form method="post"   >
									<div class="input-group find-form">
									<input type="text" class="form-control"  placeholder="Rechercher une ville"  id="selected-cities" name="city">
									<span class="input-group-addon" id="selected-cities-list" >
									
									 
									 
									</span>
									</div>
								</form>
								</li>
								
								
                                <li><a href="{{ url('/formulaire') }}"><img src="{{ asset('asset/img/reservation-par-email.png') }}" alt =  "reservation taxi par email"></a></li>
                                <li><a href="{{url('/login')}}"><span  style="color:white">Se connecter</span></a></li>
                                <li><a class="menu-btn" href="{{url('/register')}}"><span  style="color:black">Inscrivez-vous</span></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            @yield('content')
            <div class="page-content">
                <div class="footer row no-margin">
                    <div class="container">
                        <div class="footer-logo row no-margin">
                            <div class="logo-img">
                                <img src="{{Setting::get('site_logo',asset('asset/img/logo-white.png'))}}">
                            </div>
                        </div>
                        <div class="row no-margin">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <ul>
                                    <li><a href="#reservation_en_ligne">Réserver maintenant</a></li>
                                    <li><a href="#">Nos Villes</a></li>
                                    <li><a href="#reservation_en_ligne">Estimation tarifs</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <ul>
                                    <li><a href="{{url('login')}}">Inscription client</a></li>
                                    <li><a href="{{url('drive')}}">Devenir chauffeur</a></li>
									<li><a href="{{ url('/mentions-legales/siege-sociale') }}">Mentions légales</a></li>
                                    
                                </ul>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <h5>Obtenir l'application sur</h5>
                                <ul class="app">
                                    <li>
                                        <a href="{{Setting::get('store_link_ios','#')}}">
                                            <img src="{{asset('asset/img/appstore-taxi-application-ios.png')}}" alt= "application mobile taxi Iphone">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{Setting::get('store_link_android','#')}}">
                                            <img src="{{asset('asset/img/playstore-taxi-application-android.png')}}" alt= "application mobile taxi smartphone">
                                        </a>
                                    </li>                                                        
                                </ul>                        
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-12">                        
                                <h5>Connectez-vous</h5>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row no-margin">
                            <div class="col-md-12 copy">
                                <p>{{ Setting::get('site_copyright', '&copy; '.date('Y').' Appoets') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	</body>
</html>


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
	      <script type="text/javascript" src="{{ asset('asset/js/map.js') }}"></script>
		  
    
<script src="https://maps.googleapis.com/maps/api/js?key={{Setting::get('map_key')}}&libraries=places&callback=initMap&callback=searchCity" async defer ></script>

<script type="text/javascript">
    var current_latitude = 48.5734053;
    var current_longitude = 7.7521113;
</script>

<script type="text/javascript">
    if( navigator.geolocation ) {
       navigator.geolocation.getCurrentPosition( success, fail );
    } else {
        console.log('Sorry, your browser does not support geolocation services');
        initMap();
    }

    function success(position)
    {
        document.getElementById('long').value = position.coords.longitude;
        document.getElementById('lat').value = position.coords.latitude

        if(position.coords.longitude != "" && position.coords.latitude != ""){
            current_longitude = position.coords.longitude;
            current_latitude = position.coords.latitude;
        }
        initMap();
    }

    function fail()
    {
        // Could not obtain location
        console.log('unable to get your location');
        initMap();
    }
	
	
</script> 






<script type="text/javascript">
    jQuery(".hamburger.is-closed").click(function(){
        jQuery("#sidebar-wrapper").toggleClass('active');
    });
</script>