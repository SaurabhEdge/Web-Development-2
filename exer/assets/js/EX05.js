/*
      Saurabh Shukla 
     03/14/2021 
     ISTE646 Exercise 5 – JavaScript Part 2 

*/


// Globale variable declaration 

var pixelcount = 0;


/*
     This method adds up the pixel of left of id "text"

*/

function jsStyle() {
    
    document.getElementById("text").style.position="relative";
    document.getElementById("text").style.left = ++pixelcount*10 + "px";
}



 /*
     This method calculates the number of text input of form

        */


function howmany() {
    var counter = 0;
    for(let i=0; i<document.getElementsByTagName('form')[0].getElementsByTagName('input').length; i++){
        if(document.getElementsByTagName('form')[0].getElementsByTagName('input')[i].type=="text"){
            counter++;
        }
    }
    alert("Total number of inputs with text type:" + counter);
}


/*
     These method changes the color as per styling & set up the color for next element
        */


function colorchanger() {
   
    document.getElementById('third_section').style.backgroundColor = document.getElementById("mySelect").value;
    while(document.getElementById('forth_section').firstChild){
        document.getElementById('forth_section').removeChild(change.lastChild);
    }
    document.getElementById('forth_section').innerHTML=col;
}


/*
     These method changes the color as per styling 
        */


function changeRed(){						
        document.getElementById("rb").style.color=document.getElementById("mySelect").value;			
}

function changeBlack(){
        document.getElementById("rb").style.color="black";
}



 /*
     This method calculates the value from user input by checking null condittion

        */

function divide(){
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
function multiply(){
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