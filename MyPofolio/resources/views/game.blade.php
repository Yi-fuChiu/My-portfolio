<html>
<!-- our basic 'shell' for javascript work -->
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- This links to my external JavaScript page -->
    <script type="text/javascript"  src="./js/externalgame.js">
    </script>
    <!-- this link to my stylesheet -->
    <link rel="stylesheet" type="text/css" href="./css/game.css">
    </head>
    <body>

        <!-- html -->
        <div class="box">
    	<h2> A game of ‘Rock, Paper, Scissors’</h2>
    	<input type="button" value="Get start" onclick="userChoice()";/>
    	<div id='results'></div>
        </div>

    </body>


</html>
