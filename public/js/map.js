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
