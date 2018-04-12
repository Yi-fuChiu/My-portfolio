
<html>
<head>
<title> Image Gallery Design </title>	
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">
</head>

@extends('layout')

@section('content')


<div class="wrapper">

<div class='hero'>
        <img class='mypic' src="./img/mydisplay.jpg">
        <div class='content'>
              <p>Yi-fu Chiu (Chris Chiu) is original from Taiwan. He has been living in Canada for 7 years.
                 He had worked in Taiwan as a photographer for years. After he moved to Canada, he have taken
                 Web Developer at Southern Alberta Institute of Technology, Calgary. He is working on CSS, JS,
                 PHP, Illustrator and Photoshop. He loves engaging with people, working with team.
              </p>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                  in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur
                  adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                  in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                  in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                  in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur
                  adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                  in culpa qui officia deserunt mollit anim id est laborum.
              </p>
        </div>
  </div>



	
<div id="map"></div>

<script>
	function initMap(){

	// Map options
		var options = {
			zoom:8,
			center:{lat:51.0678322,lng:-114.0819833}
		}
		
		//  New Map
		var map = new 
		google.maps.Map(document.getElementById('map'), options);

		// Listen for click on map
		// google.maps.event.addListener(map, 'click',
		// function(event){
			// Add maker
		// 	addMarker({coords:event.latLng});
		// });
	
		//  Add marker
		var marker = new google.maps.Marker({
            position:{lat:51.0678322, lng:-114.0819833},
            map:map,
            icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
		});

		var infoWindow = new google.maps.InfoWindow({
			content:'<h1>SAIT</h1>'
		});

		marker.addListener('click', function(){
			infoWindow.open(map, marker);
		});
		}
	
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVQJeokmHmhvAh9XkRhqD1yVCw55YaY18&callback=initMap"></script>
</div>


@endsection