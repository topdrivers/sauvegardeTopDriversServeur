

     src="{{asset('asset/js/jquery.min.js')}}";
     src="{{asset('asset/js/bootstrap.min.js')}}";
     src="{{asset('asset/js/scripts.js')}}";
	 
	 
    
    src="{{ asset('asset/js/map.js') }}";
	
	
 src="https://maps.googleapis.com/maps/api/js?key={{Setting::get('map_key')}}&libraries=places&callback=initMap&callback=searchCity";


    var current_latitude = 48.5734053;
    var current_longitude = 7.7521113;



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
     //   initMap();
    }
	src="js/jquery.min.js";

    //jQuery(".hamburger.is-closed").click(function(){
     //   jQuery("#sidebar-wrapper").toggleClass('active');
    //});

 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js";
    
	
	
	
   
	
        ("#estimate-btn").click(function(){ 
        ('#error1').html('');
        ('#error2').html('');
        var error = 0;

        var origin_input = ('#origin-input').val();
        var destination_input = ('#destination-input').val();
		
		
	
		
		
        if(origin_input=='')
        {
            ('#error1').html('Entrer lieu de départ');
            error = 1;
        }
        if(destination_input=='')
        {
            ('#error2').html('Entrer lieu de départ');
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
    
				function searchCity()
	
				{
						var options = {
							types: ['(cities)'],
							componentRestrictions: {country: "fr"}
						};
					var input = document.getElementById('selected-cities');
					
					autocomplete = new google.maps.places.Autocomplete(input, options);
				}
		
	
	
