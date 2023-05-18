<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	


    
    

    <link href="https://top-drivers.fr/asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://top-drivers.fr/asset/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://top-drivers.fr/asset/css/style.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <div class="overlay" id="overlayer" data-toggle="offcanvas"></div>

        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li>
                </li>
                <li class="full-white">
                    <a href="https://top-drivers.fr/register">INSCRIPTION CLIENT</a>
                </li>
                <li class="white-border">
                    <a href="https://top-drivers.fr/provider/login">DEVENIR CHAUFFEUR</a>
                </li>
                <li>
                    <a href="https://top-drivers.fr/ride">Réserver votre course</a>
                </li>
                <li>
                    <a href="https://top-drivers.fr/drive">Conduire</a>
                </li>
              
                <li>
                    <a href="https://top-drivers.fr/confidentialite">Politique de confidentialité</a>
                </li>
                <li>
                    <a href="https://top-drivers.fr/conditions">Termes et Conditions</a>
                </li>
                
<!--                <li>
                    <a href="{{ url('/taxi-electriques') }}">Notre impact local</a>
                </li>
                 </li>
                <li>
                    <a href="{{ url('/taxi-securite') }}">Comment garantir votre sécurité</a>
                </li> -->

                
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

                            
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                           
							
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Aide</a></li>
                                <li><a href="https://top-drivers.fr/login">Se connecter</a></li>
                                <li><a class="menu-btn" href="https://top-drivers.fr/drive')}}">Devenir Chauffeur</a></li>
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
                                
                            </div>
                        </div>
                        <div class="row no-margin">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <ul>
                                    <li><a href="https://top-drivers.fr/#">Réserver votre course</a></li>
                                    <li><a href="https://top-drivers.fr/#">Conduire</a></li>
                                    <li><a href="https://top-drivers.fr/#">Nos Villes</a></li>
                                    <li><a href="https://top-drivers.fr/#">Estimation tarifs</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <ul>
                                    <li><a href="https://top-drivers.fr/ride">Inscription client</a></li>
                                    <li><a href="https://top-drivers.fr/drive">Devenir chauffeur</a></li>
                                    <li><a href="https://top-drivers.fr/ride">Réserver maintenant</a></li>                            
                                </ul>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <h5>Obtenir l'application sur</h5>
                                <ul class="app">
                                    <li>
                                        
                                            <img src="https://top-drivers.fr/asset/img/appstore.png">
                                        </a>
                                    </li>
                                    <li>
                                        
                                            <img src="https://top-drivers.fr/asset/img/playstore.png')}}">
                                        </a>
                                    </li>                                                        
                                </ul>                        
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-12">                        
                                <h5>Connectez-vous</h5>
                                <ul class="social">
                                    <li><a href="https://top-drivers.fr/#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://top-drivers.fr/#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row no-margin">
                            <div class="col-md-12 copy">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://top-drivers.fr/asset/js/jquery.min.js"></script>
    <script src="https://top-drivers.fr/asset/js/bootstrap.min.js"></script>
    <script src="https://top-drivers.fr/asset/js/scripts.js"></script>
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
    <script type="text/javascript" src="https://top-drivers.fr/asset/js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key={{Setting::get('map_key')}}&libraries=places&callback=initMap&callback=searchCity"></script>

<script type="text/javascript">
    var current_latitude = 40.730610;
    var current_longitude = -73.935242;
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
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(".hamburger.is-closed").click(function(){
        jQuery("#sidebar-wrapper").toggleClass('active');
    });
</script>
</body>
</html>
