@extends('layout')

@section('content')

        <div class="wrapper">

              <div class="line"></div>

          <div class="text-container">
               <p>A Creative Web Developer & Different</p>
               <p>Angel on Design<p>
               <a href="#" class="button button01">Find Out More</a> 
               <span class="or">or</span>
               <a href="#" class="button button02">View Portfolio</a> 
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








         <img class="mypic" src="./img/yifu.jpg">
         <div Class="pictext">  
          <div class="pictext-title">
             <p>Yi-fu Chiu</p>
          </div>
          <div class="pictext-dis">
             <p>I creat custom designs for websites,<br> interfaces and webapps based <br> on your requirement.</p>
          </div>
      </div>

       <div class="sidepic-container">
          <div><img class="sidepic" src="./img/coding.jpeg"></div>
          <div><img class="sidepic" src="./img/camera.jpg"></div>
          <div><img class="sidepic" src="./img/design.jpg"></div>
          <div><img class="sidepic" src="./img/typing.jpg"></div>
       </div>
        </div>
    </div>


<section>
  <div class="wrapper">
    <div class="skillcolum">
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



      </div>
      

    </div>
  </div>
</section>


@endsection



 <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script> 