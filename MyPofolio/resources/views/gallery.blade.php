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
    	<a href="img/IMG_4980.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/IMG_4980.jpg"></a>
    	<a href="img/IMG_4980.jpg" data-lightbox="mygallery" data-title="This is dog"><img src="img/IMG_4980.jpg"></a>
    	<a href="img/IMG_4980.jpg" data-lightbox="mygallery" data-title="This is fish"><img src="img/IMG_4980.jpg"></a>
    	<a href="img/IMG_4980.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/IMG_4980.jpg"></a>
    	<a href="img/IMG_4980.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/IMG_4980.jpg"></a>
    	<a href="img/IMG_4980.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/IMG_4980.jpg"></a>
    	<a href="img/IMG_4980.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/IMG_4980.jpg"></a>
    	<a href="img/IMG_4980.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/IMG_4980.jpg"></a>
    	<a href="img/IMG_4980.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/IMG_4980.jpg"></a>
    	<a href="img/IMG_4980.jpg" data-lightbox="mygallery" data-title="This is cat"><img src="img/IMG_4980.jpg"></a>
    </div>




</body>

</html>

@endsection