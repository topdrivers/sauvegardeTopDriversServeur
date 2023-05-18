@extends('user.layout.app')

@section('content')
<div class=" banner  no-margin" style="background-image: url('{{ asset('asset/img/banniere-taxi.jpg') }}');">
    <div class="banner-overlay"></div>
    
        <div class="col-md-8">
            <h2 class="banner-head"><span class="strong">Besoin d'un Taxi à Strasbourg ?</span></h2><br>
        </div>
        <div class="col-md-4">
            <div class="banner-form">
                <div class="row no-margin fields">
                    <div class="left">
                        <img src="{{ asset('asset/img/reservation-par-telephone.png') }}">
                    </div>
                    <div class="right">
                        
                            <h3>03 88 44 00 44</h3>
                            <h5>Télépnone <i class="fa fa-chevron-right"></i></h5>
                      
                    </div>
                </div>
                <div class="row no-margin fields">
                    <div class="left">
                        <img src="{{ asset('asset/img/reservation-par-email.png') }}">
                    </div>
                    <div class="right">
                        
                            <h3>support@top-drivers.fr</h3>
                            <h5>Ou via formulaire <i class="fa fa-chevron-right"></i></h5>
                       
                    </div>
                </div>
               
            </div>
        </div>
    
</div>



<div class="row white-section no-margin">
        <div class="container">
            
            <div class="col-md-6 content-block">
                <h2 class="two-title"><span class="light">Estimer le prix de votre course</span><br><span class="strong"></span></h2>
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

<div class="row white-section no-margin">
    <div class="container">
        <div class="col-md-6 img-block text-center"> 
            <img src="{{ asset('asset/img/reserver-taxi-application.png') }}" alt = "reserver-taxi-application.png">
        </div>
        <div class="col-md-6 content-block">
            <h2>Réservez en un clic</h2>
            <div class="title-divider"></div>
            <p>{{ Setting::get('site_title', 'Tranxit')  }} est le moyen le pls facile pour obtenir son taxi à Strasbourg. Il suffit d'un clic, et voilà votre Taxi directement chez vous. Votre chauffeur de taxi connaitra votre destination. Et vous pouvez payer en espèces ou être prélevé directement via l'application.</p>
            <a class="content-more" href="{{ url('/taxi-application') }}" target="__blank">PLUS DE RAISONS <i class="fa fa-chevron-right"></i></a>
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
            <img src="{{ asset('asset/img/anywhere.png') }}">
        </div>
    </div>
</div>

<div class="row white-section no-margin">
    <div class="container">
        <div class="col-md-6 img-block text-center"> 
            <img src="{{ asset('asset/img/low-cost.png') }}">
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
        <div class="col-md-6 full-img text-center" style="background-image: url({{ asset('asset/img/behind-the-wheel.jpg') }});"> 
            <!-- <img src="img/anywhere.png"> -->
        </div>
    </div>
</div>

<div class="row white-section no-margin">
    <div class="container">
        <div class="col-md-6 img-block text-center"> 
            <img src="{{ asset('asset/img/low-cost.png') }}">
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
            <img src="{{ asset('asset/img/seat-belt.jpg') }}">
        </div>
    </div>
</div>

<div class="row find-city no-margin">
    <div class="container">
        <h2>{{ Setting::get('site_title','Tranxit') }} est à Strasbourg</h2>
        <form>
            <div class="input-group find-form">
                <input type="text" class="form-control" placeholder="Rechercher" >
                <span class="input-group-addon">
                    <button type="submit">
                        <i class="fa fa-arrow-right"></i>
                    </button>  
                </span>
            </div>
        </form>
    </div>
</div>

<div class="footer-city row no-margin" style="background-image: url({{ asset('asset/img/footer-city.png') }});"></div>
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
                        $('.fare-detail').append('<div class="fare-radio"><input type="radio" name="fare" id="'+value.name+'" checked="checked"><label for="'+value.name+'"><div class="fade-radio-inner"><div class="name">'+value.name+'</div><div class="rate">'+value.distance+'Km-'+currency+value.estimated_fare+'-'+value.time+'</div></div></label></div>');
                    }
                    else
                    { 
                        $('.fare-detail').append('<div class="fare-radio"><input type="radio" name="fare" id="'+value.name+'"><label for="'+value.name+'"><div class="fade-radio-inner"><div class="name">'+value.name+'</div><div class="rate">'+value.distance+'Km-'+currency+value.estimated_fare+'-'+value.time+'</div></div></label></div>'); 
                    }
                   });
               }
             });   
        }

    }); 
    </script>
@endsection


