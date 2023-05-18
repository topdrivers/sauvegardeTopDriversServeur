@extends('user.layout.app')

@section('content')
    <div class="banner row no-margin" alt = "taxi" style="background-image: url('{{ asset('asset/img/taxi.jpg') }}');">
        <div class="banner-overlay"></div>
        <div class="container">
            <div class="col-md-8">
                <h2 class="banner-head"><span class="strong">Toujours le Taxi que vous souhaitez</span><br>Le meilleur moyen d'aller et venir où vous voulez</h2>
            </div>
            <div class="col-md-4">
                <div class="banner-form">
                    <div class="row no-margin fields">
                        <div class="left">
                            <img src="{{asset('asset/img/ride-form-icon.png')}}">
                        </div>
                        <div class="right">
                            <a href="{{url('login')}}">
                                <h3>Réserver avec {{Setting::get('site_title','Tranxit')}}</h3>
                                <h5>Se connecter <i class="fa fa-chevron-right"></i></h5>
                            </a>
                        </div>
                    </div>
                    <div class="row no-margin fields">
                        <div class="left">
                            <img src="{{asset('asset/img/ride-form-icon.png')}}">
                        </div>
                        <div class="right">
                            <a href="{{url('register')}}">
                                <h3>Insciption Client</h3>
                                <h5>Insciption <i class="fa fa-chevron-right"></i></h5>
                            </a>
                        </div>
                    </div>

                    <p class="note-or">Ou <a href="{{url('provider/login')}}">se connecter</a> avec son compte Taxi.</p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row white-section no-margin">
        <div class="container">
            
            <div class="col-md-4 content-block small">
                <h2>Obtenez votre taxi d'un seul appui sur l'application</h2>
                <div class="title-divider"></div>
                <p>{{ Setting::get('site_title', 'Tranxit')  }} est le moyen le plus intelligent pour se déplacer. Un touche d'appli et votre voiture vient directement à vous. Votre chauffeur connaît exactement votre destination. Et vous pouvez payer en espèce ou par carte.</p>
            </div>

            <div class="col-md-4 content-block small">
                <h2>Choose votre moyen de paiement</h2>
                <div class="title-divider"></div>
                <p>Lorsque vous arrivez à destination, soit vous payer en espèce ou votre carte bancaire est automatiquement débiter. Avec {{ Setting::get('site_title', 'Tranxit') }}, le choix vous appartient</p>
            </div>

            <div class="col-md-4 content-block small">
                <h2>Vous évaluez, nous observons</h2>
                <div class="title-divider"></div>
                <p>Evaluez votre Taxi et fournissez un feedback annonyme de votre trajet. Votre contribution nous aide à faire de chaque trajet une expérience menant au 5 étoiles.</p>
            </div>


        </div>
    </div>

    <div class="row gray-section no-margin">
        <div class="container">                
            <h2 class="sub-head"><span class="strong">Un choix de véhicules selon vos besoins</span></h2>

           
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


    <div class="row white-section no-margin">
        <div class="container">
            
            <div class="col-md-6 content-block">
                <h2 class="two-title"><span class="light">Tarifs</span><br><span class="strong">Obtenez une estimation de prix</span></h2>
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
                <p>Que ce soit sur la banquette arrière ou à l'avant, chaque partie de l'expérience  {{ Setting::get('site_title', 'Tranxit') }}a été conçue autour de votre sécurité.</p>
                <a class="content-more" href="#">COMMENT NOUS GARANTISSONS VOTRE SECURITE<i class="fa fa-chevron-right"></i></a>
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
                    <input type="text" class="form-control"  placeholder="Search" >
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