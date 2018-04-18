
@extends('layout')

@section('content')
 
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="/css/basicstyle.css">


<!--Body-->
<div class="wrapper">

<!--About Panel-->
  <div class="main container-fluid">

  <h1 class="nametitle">Yi-fu Chiu</h1>
  <div class="row vertical-center">
    <div class="col-3">
      <img class="meimg" src='./img/aboutme.jpg' alt="Yi-fu Chiu"/></div>
          <div class="col-9">
            <p class="exp">My name is Yi-fu Chiu (Chris), I have done several front and back end projects while pursuing a certificat in web development at SAIT, and I enjoy both working with a team and coding individually. Currently I am a junior Front-End Developer and Designer. Practical experience in ecommerce and product branding as well as digital and social media marketing. 
            </p>
      
  </div> 
  
</div>

<!--End of About Panel-->
<!--Portfolio Panel-->
      <div class="aboutmap">
        <h4 class="nametitle">This is where I am !</h4>
      <div id="map">

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
    //  addMarker({coords:event.latLng});
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

</div>
</div>
    </div>

  </div>
</div>
   
</div>


@endsection