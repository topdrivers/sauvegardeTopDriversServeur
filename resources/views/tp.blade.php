@extends('user.layout.app')




@section('content')
<div class=" banner row no-margin " alt = "taxi" style="background-image: url('{{ asset('asset/img/taxi.jpg') }}');" >
    <div class="banner-overlay"></div>
    
        <div class="col-md-8">
            <h1 class="banner-head"><span class="strong">Besoin d'un Taxi à Strasbourg ?</span></h1><br>
        </div>
        
    
</div>

<div class="row white-section no-margin">
    <div class="container">
        <div class="col-md-6 img-block text-center"> 
            <img src="{{ asset('asset/img/reserver-taxi-application.png') }}" alt = "reserver-taxi-application.png">
        </div>
        <div class="col-md-6 content-block">
            <h2>Réservez en un clic votre taxi à Strasbourg</h2>
            <div class="title-divider"></div>
            <p>{{ Setting::get('site_title', 'Tranxit')  }} est le moyen le plus facile pour obtenir son taxi à Strasbourg. Il suffit d'un clic, et voilà votre Taxi directement chez vous. Votre chauffeur de taxi Strasbourg connaitra votre destination. Et vous pouvez payer en espèces ou être prélevé directement via l'application.
			Vous obtenez via l'application téléchargeable sur notre site l'estimation de la course. Nos taxi à Strasbourg sont à votre disposition et ravi de vous servir.</p>
            <a class="content-more" href="{{ url('/taxi-strasbourg') }}" ">PLUS DE RAISONS <i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
</div>

<div class="row gray-section no-margin">
        <div class="container">                
            <h2 class="sub-head"><span class="strong">Un choix de véhicule selon vos besoins</span></h2>

            
            <div class="car-tab">
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#economy">Electrique</a></li>
                  <li><a data-toggle="tab" href="#premium">Berline</a></li>
                  <li><a data-toggle="tab" href="#accessibility">Van</a></li>
                  
                </ul>

                <div class="tab-content">
                  <div id="economy" class="tab-pane fade in active">
                    <div class="car-slide">
                        <img src="{{asset('/asset/img/taxi-voiture-electrique.png')}}" alt = "taxi voiture 100% éléctrique">
                    </div>
                  </div>
                  <div id="premium" class="tab-pane fade">
                    <div class="car-slide">
                        <img src="{{asset('/asset/img/taxi-voiture-berline.png')}}" alt = "taxi voiture berline 4 places">
                    </div>
                  </div>
                  <div id="accessibility" class="tab-pane fade">
                    <div class="car-slide">
                        <img src="{{asset('/asset/img/taxi-van.jpg')}}" alt = "taxi van 7 places">
                    </div>
                  </div>

                  


                </div>
            </div>
        </div>
    </div>

 <div class="row white-section no-margin" id ="reservation_en_ligne">
        <div class="container">
            
            <div class="col-md-6 content-block">
                <h2 class="two-title"><span class="strong">Estimer le prix de votre course</span></h2>
                <div class="title-divider"></div>
                <form id="estimate-form"  > 
                <div class="input-group fare-form">
                    <input type="text" class="form-control" required  placeholder="Entrer lieu de départ" id="origin-input" name="s_address" >       
                 <span class="error_ride" id="error1" style="color: red;"></span>                           
                </div>

                <div class="input-group fare-form no-border-right">
                    <input type="text" class="form-control" required  placeholder="Entrer lieu de destination" id="destination-input" name="d_address" >
                    
                   
                </div> 
                 <span class="error_ride" id="error2" style="color: red;"></span>  
				 
				  <input type="hidden" id="service_type" name="service_type">
                    <input type="hidden" name="s_latitude" id="origin_latitude">
                    <input type="hidden" name="s_longitude" id="origin_longitude">
                    <input type="hidden" name="d_latitude" id="destination_latitude">
                    <input type="hidden" name="d_longitude" id="destination_longitude">
                    <input type="hidden" name="current_longitude" id="long">
                    <input type="hidden" name="current_latitude" id="lat">

                    <div class="car-detail">

                        @foreach($services as $service)
                        <div class="car-radio">
                            <input type="radio" 
                                name="service_type"
                                value="{{$service->id}}"
                                id="service_{{$service->id}}"
								
                                 @if ($loop->first) checked="checked" @endif>
                            <label for="service_{{$service->id}}">
                                <div class="car-radio-inner">
                                    <div class="img"><img src="{{image($service->image)}}"></div>
                                    <div class="name"><span>{{$service->name}}</span></div>
                                </div>
                            </label>
                        </div>
                        @endforeach


                    </div>
					
					

					<div class="fare-detail" >  
                </div> 
				
				
				
				
				<!--
					 
                        <a href="{{ url('/auth/facebook') }}"><button type="submit" class="log-teal-btn fb"><i class="fa fa-facebook"></i>SE CONNECTER AVEC FACEBOOK</button></a>
                    
                    
                        <a href="{{ url('/auth/google') }}"><button type="submit" class="log-teal-btn gp"><i class="fa fa-google-plus"></i>SE CONNECTER AVEC GOOGLE+</button></a>
                    
-->
                    

                </form>
				
				
 
            </div>

             <div class="col-md-6 map-right">
                <div class="map-responsive" style="padding-bottom: 81.25% !important;">
                     <div id="map" style="width: 100%; height: 430px;"></div>
                </div>                            
            </div>

            
        </div>
    </div>       
	
	






<div class="row gray-section no-margin">
    <div class="container">                
        <div class="col-md-6 content-block">
            <h2>Prêt à tout moment, en tout lieu</h2>
            <div class="title-divider"></div>
            <p>Voyage quotidien. Errer à travers la ville. Vol tôt le matin. Soirée tard la nuit. Peu importe la situation, compter sur {{ Setting::get('site_title', 'Tranxit') }} pour vos besoins en transport.</p>
            <a class="content-more" href="{{ url('/taxi-chauffeur') }}" target="__blank">PLUS DE RAISONS <i class="fa fa-chevron-right"></i></a>
        </div>
        <div class="col-md-6 img-block text-center"> 
            <img src="{{ asset('asset/img/taxi-geolocalise.png') }}" alt= "taxi géolocalisé">
        </div>
    </div>
</div>

<div class="row white-section no-margin">
    <div class="container">
        <div class="col-md-6 img-block text-center"> 
            <img src="{{ asset('asset/img/taxi-tarif.png') }}" alt="taxi tarification">
        </div>
        <div class="col-md-6 content-block">
            <h2>Low-cost et service de luxe</h2>
            <div class="title-divider"></div>
            <p>Vous pouvez demander tous les jours des chauffeurs à des tarifs communiqués à l'avance. Mais parfois votre besoin est plus espacé. Ou vous souhaitez un service sur mesure. Avec {{ Setting::get('site_title', 'Tranxit') }}, votre choix est primordial.</p>
            <a class="content-more" href="{{ url('/taxi-low-cost') }}"  target="__blank">PLUS DE RAISONS <i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
</div>

<div class="row gray-section no-margin full-section">
    <div class="container">                
        <div class="col-md-6 content-block">
            <h3>Derrière le vollant</h3>
            <h2>Ce sont des gens comme vous, qui vont à notre rencontre</h2>
            <div class="title-divider"></div>
            <p>Ce qui rend l'expérience {{ Setting::get('site_title', 'Tranxit') }} vraiment géniale, ce sont les gens derrière le volant. Ce sont des mères et des pères. Etudiants et enseignants Anciens combattants. Voisins. Copains. Nos partenaires conduisent leurs propres voitures, selon leur propre horaire, dans des villes grandes et petites. C'est pourquoi plus d'un million de personnes dans le monde se sont inscrites pour conduire.</p> 
            <a class="content-more-btn" href="{{ url('/devenir-taxi') }}" target="__blank" >POURQUOI CONDUIRE AVEC {{ Setting::get('site_title', 'Tranxit')  }} <i class="fa fa-chevron-right"></i></a>
        </div>devenir-taxi
        <div class="col-md-6 full-img text-center" style="background-image: url({{ asset('asset/img/chauffeur-taxi.jpg') }});" alt="chauffeur taxi"> 
            <!-- <img src="img/anywhere.png"> -->
        </div>
    </div>
</div>

<div class="row white-section no-margin">
    <div class="container">
        <div class="col-md-6 img-block text-center"> 
            <img src="{{ asset('asset/img/taxi-tarif.png') }}" alt="taxi tarification">
        </div>
        <div class="col-md-6 content-block">
            <h2>Aider les villes Pour le bien de tous</h2>
            <div class="title-divider"></div>
            <p>Une ville avec {{ Setting::get('site_title', 'Tranxit') }} a plus d'opportunités économiques pour les résidents, moins de conducteurs ivres dans les rues, et un meilleur accès au transport pour ceux qui n'en ont pas.</p>
            <a class="content-more" href="{{ url('/taxi-electriques') }}" target="__blank" >NOTRE IMPACT LOCAL <i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
</div>

<div class="row gray-section no-margin">
    <div class="container">
        <div class="col-md-6 content-block">
            <h2>La sécurité avant tout</h2>
            <div class="title-divider"></div>
            <p>Que ce soit sur la banquette arrière ou à l'avant, chaque partie de l'expérience {{ Setting::get('site_title', 'Tranxit') }} a été conçue autour de votre sécurité.</p>
            <a class="content-more" href="{{ url('/taxi-securite') }}" target="__blank" >COMMENT GARANTIR VOTRE SECURITE <i class="fa fa-chevron-right"></i></a>
        </div>
        <div class="col-md-6 img-block text-center"> 
            <img src="{{ asset('asset/img/taxi-securise.jpg') }}" alt="taxi securité">
        </div>
    </div>
</div>




<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=topdriver;charset=utf8', 'admin', 'df646f010f83b1f238f4c99b5e7733ea5f4ae16f14b0ba30');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}




$reponse2 = $bdd->query('SELECT * FROM articles_taxi_strasbourg_base WHERE id= 1');





/*
if(!isset($compteur)){
	
	$compteur=0;
	echo ("je suis passé par l'isset");
}
*/

	/*
	
	$reponse = $bdd->query('CREATE EVENT maj_taxi_strasbourg

ON SCHEDULE EVERY 1 MINUTE

DO SELECT * FROM articles_taxi_strasbourg WHERE id= '.$donnees2['article'] = $donnees2['article'] + 1);

*/

/*$reponse3 = $bdd->query('q');

while ($donnees3 = $reponse3->fetch())
{
	echo $donnees3['article'];

}

$reponse3->closeCursor(); // Termine le traitement de la requête
*/

	while ($donnees2 = $reponse2->fetch())
{
	

switch ($donnees2['article'] ) // on indique sur quelle variable on travaille
{ 
    case 1: // dans le cas où $note vaut 0
       	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=1');
		//$compteur = 2;
    break;
    
    case 2: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=2');
			//$compteur = 3;
    break;
	
	case 3: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=3');
			//$compteur = 4;
    break;
	
	case 4: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=4');
			//$compteur = 5;
    break;
	
	case 5: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=5');
			//$compteur = 6;
    break;
	
	case 6: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=6');
			//$compteur = 7;
    break;
	
	case 7: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=7');
			
    break;
    
	case 8: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=8');
			
    break;
	case 9: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=9');
			
    break;
	case 10: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=10');
			
    break;
	case 11: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=11');
			
    break;
	case 12: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=12');
			
    break;
	case 13: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=13');
			
    break;
	case 14: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=14');
			
    break;
	case 15: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=15');
			
    break;
	case 16: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=16');
			
    break;
	case 17: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=17');
			
    break;
	case 18: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=18');
			
    break;
	case 19: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=19');
			
    break;
	case 20: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=20');
			
    break;
	case 21: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=21');
			
    break;
	case 22: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=22');
			
    break;
	case 23: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=23');
			
    break;
	case 24: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=24');
			
    break;
	case 25: // dans le cas où $note vaut 5
        	$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=25');
			
    break;
    
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
		$reponse = $bdd->query('SELECT * FROM articles_taxi_strasbourg WHERE id=7');
}




}


$reponse2->closeCursor(); // Termine le traitement de la requête

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
	echo $donnees['article'];

}

$reponse->closeCursor(); // Termine le traitement de la requête



?>


<div class="row find-city no-margin">
    <div class="container">
        <h2>{{ Setting::get('site_title','Tranxit') }} est à Strasbourg</h2>
        <form>
            <div class="input-group find-form">
                <input type="text" class="form-control"  placeholder="Rechercher"  id="selected-cities">
                <span class="input-group-addon">
                    <button type="submit">
                        <i class="fa fa-arrow-right"></i>
                    </button>  
                </span>
            </div>
        </form>
    </div>
</div>

<div class="footer-city row no-margin" style="background-image: url({{ asset('asset/img/centre-ville.png') }});" alt = "taxi centre ville"></div>
	






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>






    <script type="text/javascript"> 
	
	

	

	
       $("#estimate-form").change(function(){ 
	   
	   
		console.log("appel fonction réussi")

        $('#error1').html('');
        $('#error2').html('');
        var error = 0;

        var origin_input = $('#origin-input').val();
        var destination_input = $('#destination-input').val();
		
		
	
		
		
        if(origin_input=='')
        {
            $('#error1').html('Entrer lieu de départ');
            error = 1;
        }
        if(destination_input=='')
        {
            $('#error2').html('Entrer lieu de destination');
            error = 1;
        } 
     
        if(error ==0){
            $.ajax({
               type: "GET",
               url: "{{url('/fare')}}",
               data: $("#estimate-form").serialize(),

               success: function(data)
               {  
                console.log(data);
                    $('.fare-detail').html('');
                   var currency="{{Setting::get('currency')}}";
				   var i = $('input[name=service_type]:checked', '.car-radio').val();
				   if (i==1)
				   {
					   console.log("i==1");
					  
						console.log("i==1 index==0");
						
						
						
						
                        
						 $('.fare-detail').append('<div class="fare-radio"><input type="radio" name="fare" id="berline" ><label for="berline"><div class="fade-radio-inner"><div class="name">Berline</div><div class="rate">'+data.estimated_fare+' '+currency+'</div></div></label></div>'); 
						
						
						
						
					
				   }
				   if (i==3)
				   {
					   console.log("i==3");
					   
					  
						console.log("i==3 index==1");
                       
					    $('.fare-detail').append('<div class="fare-radio"><input type="radio" name="fare" id="Van" ><label for="Van"><div class="fade-radio-inner"><div class="name">Van</div><div class="rate">'+data.estimated_fare+' '+currency+'</div></div></label></div>'); 
                    
					   
				   }
				   
				   if (i==5)
				   {
					   console.log("i==5");
					  
						console.log("i==5 index==2");
						
						 $('.fare-detail').append('<div class="fare-radio"><input type="radio" name="fare" id="Electrique" ><label for="Electrique"><div class="fade-radio-inner"><div class="name">Electrique</div><div class="rate">'+data.estimated_fare+' '+currency+'</div></div></label></div>'); 
                        
                    
				   
				   }
				   
				   
                   
               }
             });   
        }
		
		

   }); 
	


	   
	
    </script>
	
	<script>
				function searchCity()
	
				{
						var options = {
							types: ['(cities)'],
							componentRestrictions: {country: "fr"}
						};
					var input = document.getElementById('selected-cities');
					
					autocomplete = new google.maps.places.Autocomplete(input, options);
				}
				
				
					
		
	</script>
	
	
	
	
	@endsection

	