/*
      Saurabh Shukla 
     02/24/2021 
     ISTE646 Exercise 4 – JavaScript Part 1 

*/

/*
     This method changes the styling of paragraph with id "text"

*/

	function jsStyle() {
		// function to change style
		// Change the color and the size of the font
		// in the paragraph with id='text'
		document.getElementById('text').style.fontFamily="Trebuchet MS";
		document.getElementById('text').style.color="red";
		document.getElementById('text').style.fontSize="50px";
	}


    /*
     This method fetches fristname & lastname value from form section with
     id fname & lname respectively "

*/

    function getFormValues() {
		// function to send first and last names
		// to an 'alert' message.
		
		var fname=  document.getElementById('fname').value;
		var lname=  document.getElementById('lname').value;
		alert("First name: " +fname+"      "+"Last name: "+lname);
		 
	}


    /*
     This method displays the selected value from drop down &
     displays with help of alert box

    */
    function getOptions() {
        // function to display the number of options in an alert()
            
        var valueOfItem = document.getElementById("mySelect").value;
        var element=document.getElementById("mySelect");
        var items = "Total option: ";
        var i;
        len=document.getElementById("mySelect").length;  
        console.log(len);
        items = items+len;
        for (i=0;i<element.length;i++)
        {
            items = items + "\n" + element.options[i].text;
        }
        alert(items +"\n" +" Selected item: " +valueOfItem);
        
    
    }


    /*
     This method changes the color when mouse is hovered on text field

    */
    
	//create a function that is called on the mouseover that turns the text red

	function mouseover() 
	{
 	 document.getElementById("rb").style.color = "red";
    }	

      /*
     This method changes the color when mouse is not hovered on text field

    */

	//create a function that is called on the mouseout that turns the text black

   function mouseout() 
   {
     document.getElementById("rb").style.color = "black";
   }

   // code two functions multiply and divide functions here
	//hints:
		//when you get a value out of an input, you are getting a string.
		//  To get a number, use parseInt()
		//When you want to output something into the HTML you can use .innerHTML 
		//- like document.getElementById("result").innerHTML= "fred";


          /*
     This method calculates the value from user input by checking null condittion

        */
		function divide() 
        {
     
             var	fnumber= parseInt(document.getElementById('firstoperand').value);
             var	snumber= parseInt(document.getElementById('secondoperand').value);
             var output=fnumber/snumber;
             if(!isNaN(output))
                 {
                     document.getElementById("result").innerHTML = output;
                 }
             else
                 {
                     alert("Please enter valid number in input")
                 }
     
        }
     
        
          /*
     This method calculates the value from user input by checking null condittion

        */
        
             function multiply() 
        {
             
             var	fnumber= parseInt(document.getElementById('firstoperand').value);
             var	snumber= parseInt(document.getElementById('secondoperand').value);
             var output=fnumber*snumber;
             if(!isNaN(output))
                 {
                     document.getElementById("result").innerHTML = output;
                 }
             else
                 {
                     alert("Please enter valid number in input")
                 }
     
        }
     