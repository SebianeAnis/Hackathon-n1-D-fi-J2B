<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Distance API</title>
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
</head>
<body>
  
<form >
    <div class="jumbotron">
        <div class="container-fluid">
            
            <form class="form-horizontal">
                <div class="form-group">
                   
                    <div class="col-xs-4">
                        Départ : <br>
                        <input type="text" id="from"  class="form-control">
                    </div>
               </div>
               <br>
               <div class="form-group">
                
                    
                    <div class="col-xs-4">
                        Destination : <br>
                        <input type="text" id="to"  class="form-control">
                        
                    </div>
                  
                 </div>
                 
            </form>

            <div class="col-xs-offset-2 col-xs-10">
                <br><button onclick="calcRoute();">Calculer la distance</button>
            </div>
        </div>
        <div class="container-fluid">
            <div id="googleMap">

            </div>
            <br><div id="output">

            </div>
        </div>

    </div>

    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuDynld9yqVTXrVVT8ObLSQ0B9P4ZvW28&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
var myLatLng = { lat: 48.863186, lng: 2.339754 };
var mapOptions = {
	center: myLatLng,
	zoom: 7,
	mapTypeId: google.maps.MapTypeId.ROADMAP

};

//créer la carte
var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

var directionsService = new google.maps.DirectionsService();

var directionsDisplay = new google.maps.DirectionsRenderer();

directionsDisplay.setMap(map);


//calcul distance
function calcRoute() {
	//créer la request
	var request = {
		origin: document.getElementById("from").value,
		destination: document.getElementById("to").value,
		travelMode: google.maps.TravelMode.DRIVING, 
		unitSystem: google.maps.UnitSystem.METRIC,
	}

   
	directionsService.route(request, function (result, status) {
		if (status == google.maps.DirectionsStatus.OK) {

			//afficher la distance
			const output = document.querySelector('#output');
			output.innerHTML = "<div class='alert-info'>  De : " + document.getElementById("from").value + ".<br /> à : " + document.getElementById("to").value + ".<br /> - Distance totale : </i>  " + result.routes[0].legs[0].distance.text + ".<br /> - Durée : " + result.routes[0].legs[0].duration.text + ".</div>";

			//dessine la route
			directionsDisplay.setDirections(result);
		} else {
			
			//position de base sur paris
			map.setCenter(myLatLng);

			//message d'erreur
			output.innerHTML = "<div class='alert-danger'><i class='fas fa-exclamation-triangle'></i> Adresse introuvable.</div>";
		}
	});

}



//create autocomplete objects for all inputs
var options = {
	types: ['(cities)']
}

var input1 = document.getElementById("from");
var autocomplete1 = new google.maps.places.Autocomplete(input1, options);

var input2 = document.getElementById("to");
var autocomplete2 = new google.maps.places.Autocomplete(input2, options);


    </script>
    <script src="Scripts/jquery-3.1.1.min.js"></script>
    <script src="map.js"></script>

</form>

</body>
</html>