<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Patua+One|Paytone+One|Russo+One|Roboto" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/assignmentcss/basicstyle.css">
    <link rel="stylesheet" href="./css/assignmentcss/contactme.css">

  </head>

<body>
<!-- *************Header  *******-->
  <header>
<!--Desktop Nav  -->
     <div class="wrapper">
        <div class="container desktop-nav">
           <div class="homelink"><a href="/homepage">Home</a></div>
           <ul>
             <li><a href="/aboutme">About Me</a></li>
             <li><a href="/visited">Visited</a></li>
             <li><a href="/currentplan">Current Plan</a></li>
             <li><a href="/myallery">Gallery</a></li>
             <li><a href="/contactme">Contact Me</a></li>
             <li><a href='#'><i class="fa fa-bars" aria-hidden="true"></i></a></li>
             <li><a href='#'><i class="fa fa-search" aria-hidden="true"></i></a></li>
           </ul>
        </div>
      </div>

<!-- Mobile Nav -->
      <div class="mobile-nav">

         <div class="hamburger-container">
           <button><i class="fa fa-bars fa-lg" aria-hidden="true"></i></button>
         </div>

         <div class="logo-container">
           <div class="homelink"><a href="#">Home</a></div>
         </div>

         <div class="search-container">
           <button><i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
        </div>

<!-- Mobile Menu  -->

        <nav role="navigation">
          <div id="menuToggle">

            <input type="checkbox" />

            <span></span>
            <span></span>
            <span></span>

            <ul id="menu">
              <a href="/homepage"><li>Home</li></a>
              <a href="/aboutme"><li>About Me</li></a>
              <a href="/visited"><li>Visited</li></a>
              <a href="/currentplan"><li>Current Plan</li></a>
              <a href="/mygallery"><li>Gallery</li></a>
              <a href="/contactme"><li>Contact Me</li></a>
            </ul>
          </div>
        </nav>

      </div>
  </header>

 <section>
      <div class="wrapper">
           <style>
              input, button {
                 display: block;
                 margin-bottom: 20px;
              }
           </style>

       <div class='contactme-container'>

               <!-- basic text input  -->
              <div class='userconatainer'>
                   <label for='user-input'>User Name</label>
                   <input type='text' name='user' id='user-input' value='' placeholder="Example: Chris">
              </div>

               <!-- Radio -->
               <div class='contact-container'>
                   <label class="container01">Male
                     <input type="radio" checked="checked" name="radio">
                     <span class="checkmark"></span>
                   </label>
                   <label class="container01">Female
                     <input type="radio" name="radio">
                     <span class="checkmark"></span>
                   </label>
               </div>

               <div class='emailcontainer'>
                   <fieldset>
                     <legent>Your Email</legend>
                       <input type='email' name='email' value='' placeholder="Example: example@site.com">
                   </fieldset>
               </div>

             <!-- comments -->
          <div class='textcontainer'>
           <p>Leave your messages:</p>
           <textarea rows="4" cols="50" name="comment" form="usrform">Enter text here...</textarea>
           <input type="submit" value="Send"/>
         </div>

       </div>
     </div>
 </section>


 <footer>
        <div class="footer-container">
        <h4>Follow Me</h4>
          <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a><li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><li>
              <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a><li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a><li>
          </ul>
        </div>
     </div>
   </footer>

 </div>
     <!-- jQuery first, then Tether, then Bootstrap JS. -->
     <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
