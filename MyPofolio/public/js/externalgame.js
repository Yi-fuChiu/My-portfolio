
//  this section is for the action after the user who click the button
function userChoice(){
    // the prompt pop-up and gives some instruction
	var userchoice = prompt("Please enter rock, paper, scissors or dynamite");
    // array of possible game piece from PC 
	var gamePieces = ["rock", "paper","scissors","dynamite"];
    // random result from the length of possible result
	var rndResult = gamePieces[getRandomGamePiece(gamePieces.length)];
    $(document).ready(function(){ 
        // jaquery get result by id
       $("#results").html("<br/>You get: " +  userchoice + "<br/> Computer gets: " + rndResult + "<br/> The result is: " + WhoWins(userchoice, rndResult));
    }); 
}

function getRandomGamePiece(arrayLength){
     // get my randome array game piece
     var rnd = Math.floor((Math.random() * arrayLength) + 0);
     // return our random game piece back
     return rnd;
        }

     // if... else to gain the value
function WhoWins(choice1,choice2){  
        if(choice1 === choice2){  
             return "tie!";  
         }else if(choice1 === "rock"){  
             if(choice2 === "scissors"){  
                 return "rock wins";  
            }else if(choice2 === "paper"){
                 return "paper wins";  
            }else {  
                return "dynamite wins";  
            } 


        }else if(choice1 === "paper"){  
            if(choice2 === "rock"){  
                return "paper wins";  
            }else if(choice2 === "scissors"){  
                return "scissors wins";  
            }else{  
                return "dynamite wins"; 
            }  

        }else if(choice1 === "scissors"){  
            if(choice2 === "rock"){  
                return "rock wins";  
            }else if(choice2 === "dynamite"){  
                return "scissors wins";  
            }else{  
                return "scissors wins";  
            }  

        }else if(choice1 === "rock"){  
            if(choice2 === "scissors"){  
                 return "rock wins";  
            }else if(choice2 === "paper"){  
                return "paper wins";  
            }else{  
                return "dynamite wins"; 
            } 

        }else if(choice1 === "dynamite"){  
            if(choice2 === "scissors"){  
                return "scissors wins";  
            }else if(choice2 === "rock"){  
                return "dynamite wins";  
            }else{  
                return "dynamite wins"; 
         }  
         }            
    } 
