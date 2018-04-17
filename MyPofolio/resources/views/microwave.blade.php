<!DOCTYPE html>
<html>
  <head>
    <title>Microwave Project</title>
    <!-- JQuery Libraries / Script Links -->
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   
    <!-- Fonts and User Styles -->
    <link rel="stylesheet" href="./css/microwave.css">
     <script type="text/javascript"  src="./js/externalmicrowave.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Orbitron|Open+Sans+Condensed:300,700" rel="stylesheet">
  </head>
  <body>
    <section class="wholeMicrowave">
      <section class="microwaveWindow">
        <section class="microwaveHandle">
        </section>
      </section>
      <section class="inputSection">
        <table>
            <!-- Microwave Screen -->
          <tr>
            <input type="text" id="display" name="display" value="">
          </tr>
          <!-- Number Input Buttons (0 through 9) -->
            <tr>
              <td>
                <button onclick="displayNumber(1)" value="1">1</button>
              </td>
              <td>
                <button onclick="displayNumber(2)" value="2">2</button>
              </td>
              <td>
                <button onclick="displayNumber(3)" value="3">3</button>
              </td>
            </tr>
            <tr>
              <td>
                <button onclick="displayNumber(4)" value="4">4</button>
              </td>
              <td>
                <button onclick="displayNumber(5)" value="5">5</button>
              </td>
              <td>
                <button onclick="displayNumber(6)" value="6">6</button>
              </td>
            </tr>
            <tr>
              <td>
                <button onclick="displayNumber(7)" value="7">7</button>
              </td>
              <td>
                <button onclick="displayNumber(8)" value="8">8</button>
              </td>
              <td>
                <button onclick="displayNumber(9)" value="9">9</button>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>
                <button onclick="displayNumber(0)" value="0">0</button>
              </td>
              <td></td>
            </tr>
        </table>
        <!-- Start, Clear and Stop Timer Buttons -->
        <table>
          <tr>
            <td>
              <button id="stopBtn" onclick="stopTimer()" value="Stop">Stop</button>
            </td>
            <td>
              <button id="clearBtn" onclick="clearTimer()" value="Clear">Clear</button>
            </td>
            <td>
              <button id="startBtn" onclick="startTimer()" value="Start">Start</button>
            </td>
          </tr>
        </table>
        <!-- Open Microwave Button -->
        <table> 
          <tr>
            <td></td>
            <td><button id="openBtn"></button></td>
            <td></td>
          </tr></table>
      </section>
    </section>

    <!-- JavaScript Tag (At bottom of body to ensure all above HTML has been loaded first) -->

    <script src="./js/externalmicrowave.js"></script>


  </body>
</html>

<br/> <br/>
<div class="groupname">
Group Members/ Designers:<br/>
  Amilia (Yingli Pi) <br/>
  Austin Smith <br/>
  Souha Yaacoub <br/>
  Yifu Chiu (Chris)
</div>