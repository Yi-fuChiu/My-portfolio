@extends('layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<div id="map"></div>

<script>
	function initMap() {
		var location = {lat: -25.363, lng: 131.044};
		var map = new google.maps.Map(document.getElementById("map"), {
			zoom: 4,
			center: location
		});
		Var marker = new google.maps.Marker ({
			map:map
		})
	}
	
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVQJeokmHmhvAh9XkRhqD1yVCw55YaY18&callback=initMap"></script>

</body>
</html>
@endsection