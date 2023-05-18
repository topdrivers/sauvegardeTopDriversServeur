@extends('user.layout.app2')

@section('content')
    <div class="banner row no-margin" alt = "taxi" style="background-image: url('{{ asset('asset/img/taxi.jpg') }}');">
        <div class="banner-overlay"></div>
        <div class="container">
            <div class="col-md-8">
                <h1 class="banner-head"><span class="strong">Taxi Longue Distance</span></h1><h2 class="banner-head"><br>Le Confort d'un véhicule tout équipé</h2>
            </div>
            <div class="col-md-4">
            <div class="banner-form">
                <div class="row no-margin fields">
                    <div class="left">
                        <img src="{{ asset('asset/img/reservation-par-telephone.png') }}" alt =  "reservation taxi par téléphone">
                    </div>
                    <div class="right">
                        
                            <h3>03 88 44 00 44</h3>
                            <h5>Télépnone <i class="fa fa-chevron-right"></i></h5>
                      
                    </div>
                </div>
                <div class="row no-margin fields">
                    <div class="left">
                        <img src="{{ asset('asset/img/reservation-par-email.png') }}" alt =  "reservation taxi par email">
                    </div>
                    <div class="right">
                        
                            <h4>support@top-drivers.fr</h4>
                            <h5>Ou via formulaire <i class="fa fa-chevron-right"></i></h5>
                       
                    </div>
                </div>
               
            </div>
        </div>
        </div>
    </div>
	
	<div class="row gray-section no-margin">
    <div class="container">
        <div class="col-md-6 img-block text-center"> 
            <img src="{{ asset('asset/img/reserver-taxi-application.png') }}" alt = "reserver-taxi-application.png">
        </div>
        <div class="col-md-6 content-block">
            <h2>Réservez votre chauffeur en appelant le 03 88 44 00 44</h2>
            <div class="title-divider"></div>
            <p>{{ Setting::get('site_title', 'Tranxit')  }} est la solution la plus adapté pour les trajets longues distances. Il suffit de nous appeler par téléphone au 03 88 44 00 44, le standard recueillera auprès de vous les informations nécessaires. Le standard vous confirmera la réservation et vous recevrez un lien de paiement par e-mail et/ou par sms. Vous recevrez ensuite la confirmation définitive de votre course par e-mail et/ou par sms. Votre chauffeur vous conduira à votre destination en toute sécurité. 
			</p>
            
        </div>
    </div>
</div>

    <div class="row white-section no-margin">
        <div class="container">
            
            <div class="col-md-4 content-block small">
                <h2>Etape 1 : Estimer le prix de votre course</h2>
                <div class="title-divider"></div>
                <p>Utiliser notre outil d'estimation du prix de la course pour savoir combien vous coûtera votre trajet. Notre outil vous donnera un tarif en fonction de la distance de la course et du moyen de locomtion choisi. </p>
            </div>

            <div class="col-md-4 content-block small">
                <h2>Etape 2 : Appelez le 03 88 44 00 44</h2>
                <div class="title-divider"></div>
                <p>Vous connaisez le prix de votre course. Dès à présent appeler-nous pour réserver votre chauffeur. Le standard receuillera auprès de vous les informations nécessaires à votre prise en charge.</p>
            </div>

            <div class="col-md-4 content-block small">
                <h2>Etape 3 : Payer et recevez la confirmation définitive</h2>
                <div class="title-divider"></div>
                <p>A l'issue de votre appel téléphonique vous recevrez immédiatement un lien de paiement par sms et/ou par email pour confirmer définitivement votre résrvation. Vous recevrez dans la foulée la confirmation de votre réservation avec les détails de la course.</p>
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
                        <img src="{{asset('/asset/img/electric-car.png')}}">
                    </div>
                  </div>
                  <div id="premium" class="tab-pane fade">
                    <div class="car-slide">
                        <img src="{{asset('/asset/img/car-slide2.png')}}">
                    </div>
                  </div>
                  <div id="accessibility" class="tab-pane fade">
                    <div class="car-slide">
                        <img src="{{asset('/asset/img/van-car.jpg')}}">
                    </div>
                  </div>

                  


                </div>
            </div>
        </div>
    </div>


    <div class="row white-section no-margin">
        <div class="container">
            
            <div class="col-md-6 content-block">
                <h2 class="two-title"><span class="strong">Estimer le prix de votre course</span></h2>
                <div class="title-divider"></div>
                <form id="estimate-form"> 
                <div class="input-group fare-form">
                    <input type="text" class="form-control" required  placeholder="Entrer lieu de départ" id="origin-input" name="s_address">       
                 <span class="error_ride" id="error1" style="color: red;"></span>                           
                </div>

                <div class="input-group fare-form no-border-right">
                    <input type="text" class="form-control" required  placeholder="Entrer lieu de départ" id="destination-input" name="d_address">
                    <span class="input-group-addon">
                        <button type="button" id="estimate-btn">
                            <i class="fa fa-arrow-right"></i>
                        </button>  
                    </span>
                   
                </div> 
                 <span class="error_ride" id="error2" style="color: red;"></span>  

                <div class="fare-detail" >  
                </div>  

                 <input type="hidden" id="service_type" name="service_type">
                 <input type="hidden" name="s_latitude" id="origin_latitude">
                 <input type="hidden" name="s_longitude" id="origin_longitude">
                 <input type="hidden" name="d_latitude" id="destination_latitude">
                    <input type="hidden" name="d_longitude" id="destination_longitude">
                    <input type="hidden" name="current_longitude" id="long">
                    <input type="hidden" name="current_latitude" id="lat">   

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
                <h2>La sécurité avant tout</h2>
                <div class="title-divider"></div>
                <p>Que ce soit sur la banquette arrière ou à l'avant, chaque partie de l'expérience  {{ Setting::get('site_title', 'Tranxit') }} a été conçue autour de votre sécurité. Nous sommes soumis à un contrôle annuel de nos véhicules. Nos chauffeurs sont formés à une conduite souple et sécurisé.</p>
                
            </div>
            <div class="col-md-6 img-block text-center"> 
                <img src="{{asset('asset/img/seat-belt.jpg')}}">
            </div>
        </div>
    </div>
	
	

    <div class="row find-city no-margin">
        <div class="container">
            <h2>{{Setting::get('site_title','Tranxit')}} est dans votre ville</h2>
            <form>
                <div class="input-group find-form">
                    <input type="text" class="form-control"  placeholder="Search" id="selected-cities" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <i class="fa fa-arrow-right"></i>
                        </button>  
                    </span>
                </div>
            </form>
        </div>
    </div>
    <?php $footer = asset('asset/img/footer-city.png'); ?>
    <div class="footer-city row no-margin" style="background-image: url({{$footer}});"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript"> 

        $("#estimate-btn").click(function(){ 
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
            $('#error2').html('Entrer lieu de départ');
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
                   $(data).each(function(index,value){
                    if(index==0)
                    {
                        $('.fare-detail').append('<div class="fare-radio"><input type="radio" name="fare" id="'+value.name+'" checked="checked"><label for="'+value.name+'"><div class="fade-radio-inner"><div class="name">'+value.name+'</div><div class="rate">'+value.distance+'	Km |		'+currency+value.estimated_fare+'	|	'+value.time+'</div></div></label></div>');
                    }
                    else
                    { 
                        $('.fare-detail').append('<div class="fare-radio"><input type="radio" name="fare" id="'+value.name+'"><label for="'+value.name+'"><div class="fade-radio-inner"><div class="name">'+value.name+'</div><div class="rate">'+value.distance+'	Km |		'+currency+value.estimated_fare+'	|	'+value.time+'</div></div></label></div>'); 
                    }
                   });
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