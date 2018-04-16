//javaScript Calculator

   var displayNum =  "0";
   var storedNum ="0";
   var calculation = 0;
   queuedOperation = 0; // it is operation for multiple numbers ex.4+8-7+0
   calculationFinished = false;  //  to start new calculation

//key_num has all the numbers inside the Calculator

function key_num(num) {
   // Select the calculator's display
   var displayNum = document.getElementById("display").value;

   // Check if the display is empty and the number being pressed is 0
   // This is to make sure the first number isn't 0 because then javascript thinks we are using OCTAL (Base eight)
   if ((display.value == "0") && num == "0") {
   // If it is, do nothing
     return;
   }
   // Check if a calculation has finished
   // If it has replace the number in the display (the answer to the calculation with the number
   // that was just pressed and change calculation finished back to false
   else if (calculationFinished == true) {
       display.value = num;
       calculationFinished = false;
   }
   // if neither of these is the case input the numbers as usual
   else {
     display.value += num;
   }
}


// Clear the global variables and the display
function clearDisplay() {

    displayNum = "";
    storedNum = "";
    document.getElementById('display').value = displayNum;
}

// function to add decimals
function decimal(dec) {
  if ( displayNum.length == 0)
    {
      displayNum = "0.";
    }

   var display = document.getElementById("display");

       display.value += dec;
}


function Operation(operator) {
   // Select the calculator's display
   var displayNum= document.getElementById("display").value;

   // Check if there is a queued operation
   // If there is a queued operation calculate it
   // Then set the stored number to total of the calculation
   if (queuedOperation == 0) {
       storedNum = display.value;
   }
   else if (queuedOperation == 1) {
       storedNum = eval(storedNum) + eval(displayNum);
   }
   else if (queuedOperation == 2) {
       storedNum = eval(storedNum) - eval(displayNum);
   }
   else if (queuedOperation == 3) {
       storedNum = eval(storedNum) * eval(displayNum);
   }
   else if (queuedOperation == 4) {
       storedNum = eval(storedNum) / eval(displayNum);
   }

   if (operator == 'add') {
       calculation = 1;
   }
   else if (operator == 'subtract') {
       calculation = 2;
   }
   else if (operator == 'multiply') {
       calculation = 3;
   }
   else if (operator == 'divide') {
      calculation = 4;
   }

   queuedOperation = calculation;
   // Clear the display in order to receive a new number
   display.value = '';
}

function calculate() {
   // Select the calculator's display
   var displayNum = document.getElementById("display").value;

   // Do the math
   if (calculation == 1) {
       displayNum = eval(storedNum) + eval(displayNum);
   }
   else if (calculation == 2) {
       displayNum = eval(storedNum) - eval(displayNum);
   }
   else if (calculation == 3) {
       displayNum = eval(storedNum) * eval(displayNum);
   }
   else if (calculation == 4) {
       displayNum = eval(storedNum) / eval(displayNum);
   }


   // Change display to the answer
   display.value = displayNum;

   if (calculation != 0){
  calculationFinished = true;
   // Clear all the global variables
   // Necessary in case the user wants to make a calculation using the answer
   calculation = 0;
   queuedOperation = 0;
   displayNum = "";
   storedNum = "";
}
}