<html>
<!-- our basic 'shell' for javascript work -->
    <head>
    <script type="text/javascript" src="./js/externalinfoform.js">

    </script>
      <style>
          body{
            background-color: lightblue;
          }
      </style>
    </head>
    <!-- These are some items I want my users to choose -->
    <body onload="loadProvinces()">
    <!-- I use id to define some actions -->

       <h1>Please Enter Following Information</h1>
    	Name: <input type="text" name="txtName" id="txtName"/>
    	<br/>
    	<br/>
        Email: <input type="text" name="txtEmail" id="txtEmail"/>
        <br/>
        <br/>
        Province: <select name="cboProv" id="cboProv"></select>
        <br/>
        <br/>
        <!-- button for submission -->
        <input type="button" value="Submit" onclick="validateForm()"/>
   
    </body>

</html>
