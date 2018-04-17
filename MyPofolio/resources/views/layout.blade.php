<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yi-fu Chiu</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Patua+One|Paytone+One|Russo+One|Freckle Face|Limelight|Righteous" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="/css/basicstyle.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
       <header>
         <div class="wrapper">
           <nav class="navbar navbar-expand-lg navbar-light my-navbar">
             <a class="navbar-brand toplogo" href="/">
               <img class="my-logo" src="./img/yifulogo.gif">
             </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

         <div class="collapse navbar-collapse my-navbar-menu" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto justify-content-center" style="background-color: white; z-index: 9999;">
               <li class="nav-item active">
                  <a class="nav-link" href="/home" style="color: #a67c00">Home <span class="sr-only">(current)</span></a>
               </li>

               <li class="nav-item">
                  <a class="nav-link" href="/about" style="color: #a67c00">About Me</a>
               </li>

               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="/portfolio" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="
                     false" style="color: #a67c00">Portfolio</a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#" style="color: #a67c00">HTML/CSS</a>
                  <a class="dropdown-item" href="#" style="color: #a67c00">JavaScript</a>
                  <a class="dropdown-item" href="#" style="color: #a67c00">PHP</a>
                  <a class="dropdown-item" href="#" style="color: #a67c00">Wordpress</a>
               <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/portfolio" style="color: #a67c00">Overview</a>
               </div>
               </li>

               <li class="nav-item">
                  <a class="nav-link" href="/gallery" style="color: #a67c00">Gallery</a>
               </li>

               <li class="nav-item">
                <a class="nav-link disabled" href="/contact" style="color: #a67c00">Contact</a>
               </li>


              
               <div class="socialicons">
                 <a href="https://www.linkedin.com/in/yifuchiu/"><i class="fab fa-linkedin"></i></a>
               </div>
 
               <div class="socialicons">
                 <a href="https://www.facebook.com/chris.chiu.581"><i class="fab fa-facebook-square"></i></a>
               </div>
                
               <div class="socialicons">
                 <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
               </div>

               <div class="socialicons">
                 <a href="https://twitter.com/"><i class="fab fa-twitter-square"></i></a>
               </div>         
          
           </ul>

           </div>

          </nav>
         </div>
         <div class="line"></div>
      </header>


     @yield('content')

        <!--Footer-->
<footer class="wrapper">
<div class="page-footer font-small stylish-color-dark pt-4 mt-4">

    <div class="text-center contecticons" >
        <h3> Connect with me <h3>
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-fb mx-1" href="https://www.linkedin.com/in/yifuchiu/">
                    <i class="fab fa-facebook"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-tw mx-1" href="https://twitter.com/">
                    <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-gplus mx-1" href="https://plus.google.com/discover">
                    <i class="fab fa-google-plus"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-li mx-1" href="https://www.linkedin.com/in/yifuchiu/">
                    <i class="fab fa-linkedin"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-dribbble mx-1" href="https://dribbble.com/">
                    <i class="fab fa-dribbble"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-dribbble mx-1" href="https://github.com/Yi-fuChiu">
                    <i class="fab fa-github"></i>
                </a>
            </li>

        </ul>
    </div>

    </div>

</footer>

</body>
</html>
