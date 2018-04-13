@extends('layout')

@section('content')

        <div class="wrapper">



          <div class="text-container">
               <p>A Creative Web Developer & Different</p>
               <p>Angel on Design<p>
               <a href="#" class="button button01">Find Out More</a> 
               <span class="or">or</span>
               <a href="/portafolio" class="button button02">View Portafolio</a> 
          </div>
      

   <div class="hero">
       <div class="wrapper">


<style type="text/css">
     #canvas {
       position: absolute;
       margin-left: 400px;
       margin-top: 223px;
       width: 790px;
       height: 432px;
       transform: translateX(-50%) translateY(-50%);
       box-shadow: 0 0 10px 0 #999;
     }
  </style>
  <script type="text/javascript">
      function init () {
        var canvas = document.getElementById('canvas');
        var ctx = canvas.getContext('2d');
        var w = canvas.width;
        var h = canvas.height;

        var bg = new Image();
        bg.src = "images/bg.jpg";

        var flakes = [];

        function snowfall (){
          ctx.clearRect(0, 0, w, h);
          // ctx.drawImage(bg, 0, 0);
          addFlake();
          snow();
        };
        function addFlake(){
          var x = Math.ceil(Math.random() * w);
          var s = Math.ceil(Math.random() * 4);
          flakes.push({"x": x, "y": 0, "s": s})
        };
        function snow () {
          for (var i =0; i<flakes.length; i++) {
            var flake = flakes[i];
            ctx.beginPath();
            ctx.fillStyle = "rgba(255, 255, 255, 0.7)";
            ctx.arc(flake.x, flakes[i].y+=flake.s/2, flake.s/2, 0, 2 * Math.PI);
            ctx.fill();
            if(flakes[i].y > h){
              flakes.splice(i, 1);
            }
          };
         };
         setInterval(snowfall, 20);
        };
        window.onload = init;
  </script>
</head>
<body>
   <canvas id="canvas" width="778" height="387"></canvas>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</body>


<div class="row">
  <div class="col-sm-8"><img class="mypic" src="./img/yifu-1.jpg"></div>
  <div class="col-sm-2"><img class="sidepic" src="./img/coding.jpeg"><img class="sidepic" src="./img/camera.jpg"></div>
  <div class="col-sm-2"><img class="sidepic" src="./img/design.jpg"><img class="sidepic" src="./img/typing.jpg"></div>
</div>

        </div>
    </div>


<section>
  <div class="wrapper">
    <div class="skillcolumn">
      <h1>My skills</h1>

      <div class="skillicon">
        <i class="fab fa-html5"></i>
        <p>html 5</p>
      </div>

      <div class="skillicon">
        <i class="fas fa-code"></i>
        <p>code</p>
      </div>

      <div class="skillicon">
        <i class="fab fa-css3-alt"></i>
        <p>CSS 3</p>
      </div>

      <div class="skillicon">
         <i class="fab fa-sass"></i>
        <p>Sass</p>
      </div>

       <div class="skillicon">
         <i class="fab fa-wordpress"></i>
         <p>Wordpress</p>
      </div>

      <div class="skillicon">
         <i class="fab fa-js-square"></i>
         <p>JavaScript</p>
      </div>

     <div class="skillicon">
         <i class="fab fa-php"></i>
         <p>PHP</p>
      </div>

      <div class="skillicon">
         <i class="fas fa-camera-retro"></i>
         <p>Photography</p>
      </div>
      
     <div class="skillicon"> 
         <i class="fas fa-paint-brush"></i>   
         <p>PhotoShop</p>
      </div>

      <div class="skillicon">
         <i class="fas fa-pencil-alt"></i>
         <p>Illustrator</p>
      </div>

       <div class="skillicon">
         <i class="fas fa-edit"></i>
         <p>CorelDRAW</p>
      </div>

        <div class="skillicon">
         <i class="fab fa-github-square"></i>
         <p>Github</p>
      </div>
    
        <div class="skillicon">
         <i class="fas fa-columns"></i>
         <p>MySQL</p>
      </div>

         <div class="skillicon">
         <i class="fas fa-map-marker-alt"></i>
         <p>API</p>
      </div>
    
      



      </div>
      

    </div>
  </div>
</section>


@endsection



 <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script> 