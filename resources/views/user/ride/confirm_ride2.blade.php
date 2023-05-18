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


@section('styles')
<style type="text/css">
    .surge-block{
        background-color: black;
        width: 50px;
        height: 50px;
        border-radius: 25px;
        margin: 0 auto;
        padding: 10px;
        padding-top: 15px;
    }
    .surge-text{
        top: 11px;
        font-weight: bold;
        color: white;
    }
</style>
@endsection

@section('content')
<div class="col-md-9" id="reservation_en_ligne">
    <div class="dash-content">
        <div class="row no-margin" >
            <div class="col-md-12">
                <h4 class="page-title">@lang('user.ride.ride_now')</h4>
            </div>
        </div>
        
        <div class="row no-margin">
            <div class="col-md-6">
                <form action="{{url('create/ride')}}" method="POST" id="create_ride">

                {{ csrf_field() }}
                    <dl class="dl-horizontal left-right">
                        <dt>@lang('user.type')</dt>
                        <dd>{{$service->name}}</dd>
                       
                        <dt>Orgin Point</dt>
                        <dd>{{$fare->orgin_name}}</dd>
                        
                        <dt>Apporach Distance</dt>
                        <dd>{{$fare->apporach_distance}} Kms</dd>
                        
                        <dt>Arrived Distance</dt>
                        <dd>{{$fare->arrived_distance}} Kms</dd>

                        <dt>Ride Distance</dt>
                        <dd>{{$fare->distance}} Kms</dd>

   <!--                      <dt>TEST --- Case</dt>
                        <dd>{{$fare->calculator}}</dd>

                        <dt>Base Price </dt>
                        <dd>{{$fare->base_price}}</dd> -->


<!--                          <dt>APPorach Cost</dt>
                        <dd>{{$fare->apporach_cost}}</dd>

                        <dt>Ride Cost</dt>
                        <dd>{{$fare->ride_cost}}</dd>
 -->

                        <dt>@lang('user.eta')</dt>
                        <dd>{{@$fare->time}}</dd>
                        <dt>@lang('user.estimated_fare')</dt>
                        <dd>{{@currency($fare->estimated_fare)}}</dd>
                        <hr>
						
                        
						
                    </dl>

                    <input type="hidden" name="s_address" value="{{Request::get('s_address')}}">
                    <input type="hidden" name="d_address" value="{{Request::get('d_address')}}">
                    <input type="hidden" name="s_latitude" value="{{Request::get('s_latitude')}}">
                    <input type="hidden" name="s_longitude" value="{{Request::get('s_longitude')}}">
                    <input type="hidden" name="d_latitude" value="{{Request::get('d_latitude')}}">
                    <input type="hidden" name="d_longitude" value="{{Request::get('d_longitude')}}">
                    <input type="hidden" name="service_type" value="{{Request::get('service_type')}}">
                    <input type="hidden" name="distance" value="{{@$fare->distance}}">

                   <p>@lang('user.payment_method')</p>
                    <select class="form-control" name="payment_mode" id="payment_mode" onchange="card(this.value);">
                      <option value="CASH">ESPECE</option>
                      
                        <option value="CARD">CARTE BANCAIRE</option>
                      
                    </select>
                    <br>

                    
                    

                    @if(@$fare->surge == 1)


                        <span><em>Note : En raison d'une forte demande le tarif peut varier</em></span>
                        <div class="surge-block"><span class="surge-text">{{$fare->surge_value}}</span>

                        </div>
                    
                    @endif



                    <button type="submit" class="half-primary-btn fare-btn">@lang('user.ride.ride_now')</button>
                    <button type="button" class="half-secondary-btn fare-btn" data-toggle="modal" data-target="#schedule_modal">Planifier plus tard</button>

                </form>
            </div>

            <div class="col-md-6">
                <div class="user-request-map">
                    <?php 
                    $map_icon = asset('asset/img/marker-start.png');
                    $static_map = "https://maps.googleapis.com/maps/api/staticmap?autoscale=1&size=600x450&maptype=roadmap&format=png&visual_refresh=true&markers=icon:".$map_icon."%7C".$request->s_latitude.",".$request->s_longitude."&markers=icon:".$map_icon."%7C".$request->d_latitude.",".$request->d_longitude."&path=color:0x191919|weight:8|".$request->s_latitude.",".$request->s_longitude."|".$request->d_latitude.",".$request->d_longitude."&key=".Setting::get('map_key'); ?>
                    <div class="map-static" style="background-image: url({{$static_map}});">
                    </div>
                    <div class="from-to row no-margin">
                        <div class="from">
                            <h5>De</h5>
                            <p>{{$request->s_address}}</p>
                        </div>
                        <div class="to">
                            <h5>À</h5>
                            <p>{{$request->d_address}}</p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

    </div>
</div>



<!-- Schedule Modal -->
<div id="schedule_modal" class="modal fade schedule-modal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Schedule a Ride</h4>
      </div>
      <form>
      <div class="modal-body">
        
        <label>Date</label>
        <input value="{{date('m/d/Y')}}" type="text" id="datepicker" placeholder="Date" name="schedule_date">
        <label>Time</label>
        <input value="{{date('H:i')}}" type="text" id="timepicker" placeholder="Heure" name="schedule_time">

      </div>
      <div class="modal-footer">
        <button type="button" id="schedule_button" class="btn btn-default" data-dismiss="modal">Valider</button>
      </div>

      </form>
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
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#schedule_button').click(function(){
                $("#datepicker").clone().attr('type','hidden').appendTo($('#create_ride'));
                $("#timepicker").clone().attr('type','hidden').appendTo($('#create_ride'));
                document.getElementById('create_ride').submit();
            });
        });
    </script>
    <script type="text/javascript">
        var date = new Date();
        date.setDate(date.getDate()-1);
        $('#datepicker').datepicker({  
            startDate: date
        });
        $('#timepicker').timepicker({showMeridian : false});
    </script>
    <script type="text/javascript">
        function card(value){
            if(value == 'CARD'){
                $('#card_id').fadeIn(300);
            }else{
                $('#card_id').fadeOut(300);
            }
        }
    </script>
@endsection