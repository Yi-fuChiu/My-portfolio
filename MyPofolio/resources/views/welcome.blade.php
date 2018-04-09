<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yi-fu Chiu</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Patua+One|Paytone+One|Russo+One|Roboto|Righteous" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="/css/basicstyle.css">
        <link rel="stylesheet" href="/css/style.css">

    </head>

    <header>
      <div class="wrapper">


<!--      <nav class="site-header sticky-top py-1">
     <div class="container d-flex flex-column flex-md-row justify-content-between">
          <a class="py-2" href="#" style="height: 100px; width: 300px;"><img src="./img/yifulogo.svg">
        </a>
        <a class="py-2 d-none d-md-inline-block" href="#">Home</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Portofolio</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Gallery</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Support</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Pricing</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
      </div> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light my-navbar">
      <a class="navbar-brand toplogo" href="#">
        <img class="my-logo" src="./img/yifulogo.gif">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse my-navbar-menu" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto justify-content-center">
            <li class="nav-item active">
               <a class="nav-link" href="#" style="color: #9f8b52">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#" style="color: #9f8b52">Link</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #c68142">Portfolio</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="#">Action</a>
               <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#">Something else here</a>
            </div>
            </li>
            <li class="nav-item">
               <a class="nav-link disabled" href="#" style="color: #c68142">Contact</a>
            </li>

            <div class="socialicons">
             <i class="fa fa-linkedin-square"></i>
             <i class="fa fa-facebook-square"></i>
             <i class="fa fa-instagram"></i>
             <i class="fa fa-twitter-square"></i>
         </div>
          </ul>
      </div>

    </nav>
  </div>

    </header>

       <body>
        <div class="wrapper">
              <div class="line"></div>

             <div class="maintext">
                <p>A Creative Web Developer & Different</p>
                <p>Angel on Design<p>
             </div>

        <div button-container>
             <div class="button01">
                 <a href="">Find Out More</a>
             </div>

             <div class="button02">
                 <a href="">View Portfolio</a>
             </div>
        </div>
        </div>
        </body>



    <section>
       <div class="wrapper">

        <div Class="pictext">
          <img class="mypic" src="./img/yifu.jpg">
          <p>Yi-fu Chiu</p>
      </div>

       <div class="sidepic-container">
          <div><img class="sidepic" src="./img/coding.jpeg"></div>
          <div><img class="sidepic" src="./img/camera.jpg"></div>
          <div><img class="sidepic" src="./img/design.jpg"></div>
          <div><img class="sidepic" src="./img/typing.jpg"></div>
       </div>
        </div>
    </section>




    <div id = "svgcontainer" style="width: 500px;height: 500px;"></div>
    <script src="./js/test1.js"></script>











    <!--Footer-->
<footer class="page-footer font-small stylish-color-dark pt-4 mt-4">

    <!--Footer Links-->
    <div class="container text-center text-md-left">
        <div class="row">

            <!--First column-->
            <div class="col-md-4">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Footer Content</h5>
                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit
                    amet, consectetur adipisicing elit.</p>
            </div>
            <!--/.First column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Second column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Third column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Fourth column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Call to action-->
    <div class="text-center py-3">
        <ul class="list-unstyled list-inline mb-0">
            <li class="list-inline-item">
                <h5 class="mb-1">Register for free</h5>
            </li>
            <li class="list-inline-item">
                <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
            </li>
        </ul>
    </div>
    <!--/.Call to action-->

    <hr>

    <!--Social buttons-->
    <div class="text-center">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-fb mx-1">
                    <i class="fa fa-facebook"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-tw mx-1">
                    <i class="fa fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-gplus mx-1">
                    <i class="fa fa-google-plus"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-li mx-1">
                    <i class="fa fa-linkedin"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-dribbble mx-1">
                    <i class="fa fa-dribbble"> </i>
                </a>
            </li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> MDBootstrap.com </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<
</html>
