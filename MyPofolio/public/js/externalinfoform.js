/*
Hi Chris - this looks great.  Well done adding in
the regex validation for the email. Your application
works well and has all the comments and naming I needed
to see.  The only thing I missed was setting the focus
on the email if it wasn't entered.  Great job otherwise.
19/20
*/

// this is my external js page that I can write all
// functions here to link and appy onto my html page


// The fuction is to active loadProvinces(), telling
// my HTML to act things, in this case is to make array
// for select-box
function loadProvinces(){
    // Provinces array here
	var provArray=["Ontario","Quebec","British Columbia","Alberta",
	"Manitoba","Saskatchewan","Acotia","Brunswick","Newfoundland",
	"Edward Island","Northwest Territores","Nunavut","Yukon"]
	var output="<option value=''>-Select-</option>";
    // forLoop
	for(index=0;index<provArray.length;index++){
		output+="<option value='"+provArray[index]+"'>"+
		provArray[index]+"</option>";
	}
    // document gets elements from html 'id'
	document.getElementById('cboProv').innerHTML=output;
}

// this is the function for validate
function validateForm(){
    // the value of id
	 var Name = document.getElementById('txtName').value;
     var Email = document.getElementById('txtEmail').value;
     var emailFormat = /(\w+\.)*\w+@([a-zA-Z]+\.)+[a-zA-Z]{2,6}/;
     var Province = document.getElementById('cboProv').value;
            // if statements
            if(Name==""){
                // do something, this is an alert function for pop-up notification
                alert('Please enter a name');
                document.getElementById('txtName').focus();
                return false;
            }
            // if statements
            if(Email==""){
                // do something, this is an alert function for pop-up notification
                alert("please enter a valid email.");
                return;
                // do something else
                }else{
                if(!emailFormat.test(Email)){
                alert("Please enter a valid email format. Ex: user@gmail.com");
                return;
                    }
                }
            // if statements
            if(Province==""){
                // do something, this is an alert function for pop-up notification
                alert('Please select a province');
                document.getElementById('cboProv').focus();
                return false;
            }
            // do something, this is an alert function for pop-up notification
            alert('Congrats, you entered the form correctly');
}
