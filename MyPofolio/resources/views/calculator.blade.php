<!DOCTYPE html>
    <html>
    <title>Javascript Calculator</title>
        <head>
            <script type="text/javascript" src="./js/externalcalculator.js"></script>
            <link rel="stylesheet" href="./css/calculator.css" />
        </head>
        <body>
            <center>
        <h1>Javascript Calculator</h1>
        <hr size=20 color="black">
        <div>
             <form name="Calculator">

               <input type="text" id="display"  class="textbox" name="display"/>

                <input type="button"  value="7" onclick="key_num('7')" />
                <input type="button"  value="8" onclick="key_num('8')" />
                <input type="button"  value="9" onclick="key_num('9')" />
                <input type="button"  value="+" class="operation" onclick="Operation('add')" />


                <input type="button"  value="4" onclick="key_num('4')" />
                <input type="button"  value="5" onclick="key_num('5')" />
                <input type="button"  value="6" onclick="key_num('6')" />
                <input type="button"  value="-" class="operation" onclick="Operation('subtract')"/>


                <input type="button"  value="1" onclick="key_num('1')" />
                <input type="button"  value="2" onclick="key_num('2')" />
                <input type="button"  value="3" onclick="key_num('3')" />
                <input type="button"  value="x" class="operation" onclick="Operation('multiply')" />


                <input type="button"  value="0" onclick="key_num('0')" />
                <input type="button"  value="." onclick="decimal('.')" />
                <input type="button"  value="=" class="equal" onclick="calculate('')" />
                <input type="button"  value="/" class="operation" onclick="Operation('divide')" />

               <input type="button"  value="clear"  class="clear" onclick="clearDisplay()" />
        </form>
      </div>
    <center>
  </body>
</html>


<br/> <br/>
<div>
Group Members/ Designers:<br/>
  Amilia (Yingli Pi) <br/>
  Austin Smith <br/>
  Souha Yaacoub <br/>
  Yifu Chiu (Chris)
</div>

<br/> <br/>
Wrap  • Today at 1:38 PM • 2 kB HTML snippet • Shared in #general 
Unshare from #general


Add Comment
Commenting in #general