<!doctype html>
<html lang="fr">
  <head>
  	<title>Top Drivers - Contact - Informations légales</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!--<link rel="stylesheet" href="https://top-drivers.fr/contact-form-06/contact-form-06/cssbis/style.css">-->
	<link href="{{asset('asset/css/style3.css')}}" rel="stylesheet">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section">Mention légales société Top Drivers</h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters mb-5">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h2 class="mb-4">Informations légales</h2>
									
									
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<p><span>Adresse :</span> Taxi Strasbourg </br>10 rue de Neuvic </br>67100 Strasbourg</p>
													<p><span>SIRET :</span> 834 889 198 00018</p>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<p><span>Téléphone :</span> <a href="tel://1234567920">+33 3 88 44 00 44</a></p>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<p><span>E-mail :</span> <a href="mailto:info@yoursite.com">support@top-drivers.fr</a></p>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<p><span>Website :</span> <a href="https://top-drivers.fr">https://top-drivers.fr</a></p>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div id="map">
			          </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-map-marker"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Adresse :</span> Taxi Strasbourg </br>10 rue de Neuvic </br>67100 Strasbourg</p>
							<p><span>SIRET :</span> 834 889 198 00018</p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-phone"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Téléphone :</span> <a href="tel://1234567920">+33 3 88 44 00 44</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-paper-plane"></span>
			        		</div>
			        		<div class="text">
				            <p><span>E-mail :</span> <a href="mailto:info@yoursite.com">support@top-drivers.fr</a></p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-globe"></span>
			        		</div>
			        		<div class="text">
				            <p><span>Website :</span> <a href="https://top-drivers.fr">https://top-drivers.fr</a></p>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('asset/js/jquery.min.js')}}"></script>
  <script <script src="{{asset('asset/js/popper.js')}}"></script>
  <script <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
  <script <script src="{{asset('asset/js/jquery.validate.min.js')}}"></script>
  
  <script <script src="{{asset('asset/js/map.js')}}"></script>
  <script <script src="{{asset('asset/js/main.js')}}"></script>

	</body>
</html>


<script>
    var map;
    
	
   

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 48.5734053, lng: 7.7521113},
            zoom: 9,
            minZoom: 1
        });
		
	}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key={{ Setting::get('map_key') }}&libraries=places&callback=initMap" async defer></script>

