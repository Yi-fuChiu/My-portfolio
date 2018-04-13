@extends('layout')

@section('content')




<html>
<head>
<title> Image Gallery Design </title>	
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">
</head>


<body class="wrapper">
    <h1> Image Gallery Design </h1>
    <div class="gallery">
    	<a href="img/stampede-1.jpg" data-lightbox="mygallery" data-title="Stampede Fireworks <br>F-stop: f/8 <br> Exposure time: 7sec <br>ISO speed: ISO-100 <br> Canon EOS 50 Mark II"><img src="img/stampede-1.jpg"></a>
    	<a href="img/baby.jpg" data-lightbox="mygallery" data-title="This is dog"><img src="img/baby.jpg"></a>
    	<a href="img/goose.jpg" data-lightbox="mygallery" data-title="This is fish"><img src="img/goose.jpg"></a>
    	<a href="img/fireworks.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/fireworks.jpg"></a>
    	<a href="img/waterfall.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/waterfall.jpg"></a>
    	<a href="img/calgarynight.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/calgarynight.jpg"></a>
    	<a href="img/couple.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/couple.jpg"></a>
    	<a href="img/moon.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/moon.jpg"></a>
    	<a href="img/moon-1.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/moon-1.jpg"></a>
    	<a href="img/wildanimal.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/wildanimal.jpg"></a>
        <a href="img/dahla.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/dahla.jpg"></a>
        <a href="img/ice.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/ice.jpg"></a>
        <a href="img/insect.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/insect.jpg"></a>
        <a href="img/dahli-1.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/dahli-1.jpg"></a>
         <a href="img/family.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/family.jpg"></a>
    </div>




</body>

</html>

@endsection