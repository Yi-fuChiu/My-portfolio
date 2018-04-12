<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/welcome.css">
  <link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Carter+One|Gugi" rel="stylesheet">
  <title>Text with Background</title>
  </head>

  <style type="text/css">

      body,h1{
        margin: 0;
        padding: 0;
        font-family: 'Gugi', cursive;
      }

      .text-container h1{
        font-size: 200px;
        color: rgba(225,225,225,.1);
        background-image: url(/img/goldcode.jpg);
        background-repeat: repeat-x;
        -webkit-background-clip:text;
        animation: animate 50s linear infinite;
      }

      @keyframes animate {
        0%{
          background-position: left 0px top 10px;
        }
        40%{
          background-position: left 800px top 10px;
        }
      }

      .text-container {
        margin-top: 10%;
        text-align: center;
      }

  </style>


<body>
  <div class="text-container">
    <h1>Yi-fu Chiu</h1>
     <a href="/home" class="button">Click it to my place</a> 
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</body>
</html>
