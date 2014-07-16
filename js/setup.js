$('#setup_button').click(function(){
	var latitude = $('#input_lat_hidden').val();
	var longitude = $('#input_long_hidden').val();
	$.ajax({
		url: '/index.php/feed/add_ip/',
		context: this,
		type: 'POST',
		data: {latitude: latitude, longitude: longitude},
		success: function(data){
			alert("Successfully Updated!");
			window.location.replace("http://localhost/index.php/feed/");
		}
	});
});

function getLocation(){
	if (navigator.geolocation) {
		//alert("Geo");
		navigator.geolocation.getCurrentPosition(showMap, showError);
	} else {
		alert("Geolocation is not supported by this browser.");
	}
}
function showMap(position) {
	//alert("sds");
	$('#input_lat_hidden').val(position.coords.latitude);
	$('#input_long_hidden').val(position.coords.longitude);
	$.ajax({
		url: '/index.php/feed/add_ip/',
		type: 'POST',
		data: {latitude: position.coords.latitude, longitude: position.coords.longitude},
		context: this,
		success: function(data){
			alert(data);
		}
	});
}

function showError(error) {
	switch(error.code) {
		case error.PERMISSION_DENIED:
			alert("User denied the request for Geolocation.");
			break;
		case error.POSITION_UNAVAILABLE:
			alert("Location information is unavailable.");
			break;
		case error.TIMEOUT:
			alert("The request to get user location timed out.");
			break;
		case error.UNKNOWN_ERROR:
			alert("An unknown error occurred.");
			break;
	}
}

getLocation();