@extends('admin.layout.base')

@section('title', 'Map View ')

@section('content')

<div class="content-area py-1">
<div class="container-fluid">
		<div class="box box-block bg-white">
				<div class="clearfix mb-1">
					<h5 class="float-xs-left">Godseye</h5>
					<div class="float-xs-right">
					<button class="btn btn-default godseye_menu" data-value="STARTED">Enroute to Pickup</button>
					<button class="btn btn-default godseye_menu" data-value="ARRIVED">Reached Pickup</button>
					<button class="btn btn-default godseye_menu" data-value="PICKEDUP">Journey Started</button>
					<button class="btn btn-default godseye_menu" data-value="ACTIVE">Available</button>
					<button class="btn btn-primary godseye_menu" data-value="ALL">All</button>

					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h3 class="provider_title btn-primary">All</h3>
						<ul class="provider_list"></ul>
					</div>
					<div class="col-md-8">
						<div id="map" style="width:100%;height:500px;background:#ccc"></div>
					</div>
				</div>
			</div>
	</div>
</div>

            <footer class="footer">
	<div class="container-fluid">
		<div class="row text-xs-center">
			<div class="col-sm-4 text-sm-left mb-0-5 mb-sm-0">
				<p>2020 © Switch Ride</p>
			</div>
		</div>
	</div>
</footer>
        </div>
    </div>

   <script src="//maps.googleapis.com/maps/api/js?key={{ Setting::get('map_key') }}&libraries=places&callback=initMap" async defer></script>

	var map, info;
	var markers = [];
	var status = "ALL";

	if( navigator.geolocation ) {
         navigator.geolocation.getCurrentPosition( success, fail );
    } else {
          console.log('Sorry, your browser does not support geolocation services');
          initialize();
    }

    function success(position)
    {

        if(position.coords.longitude != "" && position.coords.latitude != ""){
            current_longitude = position.coords.longitude;
            current_latitude = position.coords.latitude;
        }

      initialize(current_latitude, current_longitude);
    }

    function fail()
    {
        initialize();
    }

	function initialize(latitude = 0, longitude = 0) {

		var mapInterval = setInterval(getProviders, 300000);

	    var mapOptions = {
	        zoom: 12,
	        mapTypeId: google.maps.MapTypeId.ROADMAP,
	        center: new google.maps.LatLng(latitude, longitude)
	    };

	    map = new google.maps.Map(document.getElementById('map'), mapOptions);

	    $('.godseye_menu').on('click', function() {
	    	$('.provider_title').text($(this).text());
			status = $(this).data('value');
			$(this).addClass('btn-primary').siblings().removeClass('btn-primary');
			clearInterval(mapInterval);
			getProviders();
			mapInterval = setInterval(getProviders, 300000);
		});


		function getProviders() {

			$.get("http://top-drivers.fr/admin/godseye/list/?status="+status, function(data) {
				var locations = data.locations;
				var providers = data.providers;

				removeMarkers();

				$('.provider_list').empty();

				for (i = 0; i < locations.length; i++) {

					var item = locations[i];

					console.log(providers[i].service.marker);

					var marker = new google.maps.Marker({
						icon: { scaledSize: new google.maps.Size(20, 35), url : providers[i].service.service_type.marker },
			            map: map,
			            position: new google.maps.LatLng(locations[i].lat, locations[i].lng)
			        });

			        marker.provider = providers[i];

			        marker.addListener('click', function(e) {
						selectProvider(this);
						scrollList(this);
					});


					var onClick = function(marker){
						return function() {
							selectProvider(marker);
						}
					}

					var image = "http://top-drivers.fr/asset/img/grey.png";

					if(providers[i].service.status == 'active') {
						image = "http://top-drivers.fr/asset/img/green.png";
					} else if(providers[i].service.status == 'riding' && providers[i].trips[0].status == 'STARTED') {
						image = "http://top-drivers.fr/asset/img/red.png";
					} else if(providers[i].service.status == 'riding' && providers[i].trips[0].status == 'ARRIVED') {
						image = "http://top-drivers.fr/asset/img/yellow.png";
					} else if(providers[i].service.status == 'riding' && providers[i].trips[0].status == 'PICKEDUP') {
						image = "http://top-drivers.fr/asset/img/blue.png";
					} else {
						image = "http://top-drivers.fr/asset/img/grey.png";
					}

					var avatar = (providers[i].avatar == null || providers[i].avatar == "") ? "http://top-drivers.fr/main/avatar.jpg" : providers[i].avatar ;

			        var li = $(`<li id="`+providers[i].id+`">
						<label class="image">
							<label class="image">
								<img src="`+avatar+`">
							</label>
							<img src="`+image+`">
						</label>
						<p>`+providers[i].first_name+` `+providers[i].last_name+` 
						<b>`+providers[i].mobile+`</b></p>
					</li>`).on('click', onClick(marker) );

					$('.provider_list').append(li);

					markers.push(marker);

				}


			});
		}

		function selectProvider(marker) {
			return showinfoWindow(marker);
		}

		function scrollList(marker){
			var item = $('.provider_list').find('li[id='+marker.provider.id+']');

			if(item) {
				var position = $(".provider_list").scrollTop() - $(".provider_list").offset().top + item.offset().top;
				$(".provider_list").animate({scrollTop : position}, 500); 
			}
		}

		function removeMarkers() {
		    for (var i in markers) {
		        if(typeof markers[i] !== 'undefined') markers[i].setMap(null);
		    }
		}

		function showinfoWindow(marker) {

			hideinfoWindow();

			var live_tarack = ((marker.provider.trips).length > 0) ? (marker.provider.trips[0].status == 'PICKEDUP') ?
					`<tr><td></td><td><a href="http://top-drivers.fr/track/`+marker.provider.trips[0].id+`" target="_blank"><b>Live tracking</b></a></td></tr>` : `` : ``;

			var avatar = (marker.provider.avatar == null || marker.provider.avatar == "") ? "http://top-drivers.fr/main/avatar.jpg" : marker.provider.avatar ;

			var html = `<table>
				<tbody>
					<tr><td rowspan="5"><img src="`+avatar+`" width="auto" height="70"></td></tr>
					<tr><td>&nbsp;&nbsp;Name: </td><td><b>`+marker.provider.first_name+ ` ` +marker.provider.last_name+`</b></td></tr>
					<tr><td>&nbsp;&nbsp;Email: </td><td><b>`+marker.provider.email+`</b></td></tr>
					<tr><td>&nbsp;&nbsp;Mobile: </td><td><b>`+marker.provider.mobile+`</b></td></tr>` +live_tarack +
				`</tbody>
			</table>`;

			info = new google.maps.InfoWindow({
				content: html,
				maxWidth: 350
			});

			info.open(map, marker);
		}

	    getProviders();
	}

	function hideinfoWindow() {
		if(typeof info != 'undefined' && info != null){
			info.close();
		}

	}


	</script>


    <script type="text/javascript" src="http://top-drivers.fr/asset/js/rating.js"></script>    
    <script type="text/javascript">
        $('.rating').rating();

        function demo_email(email) {
                        return email;
                    }

        function demo_mobile(mobile) {
                        return mobile;
                    }
    </script>