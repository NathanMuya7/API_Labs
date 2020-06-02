//variables
var number1_element = document.getElementById("num1"); //getting elements from the DOM
var number2_element = document.getElementById("num2");
//functions
function divideThem(){

  var number1 = number1_element.value;
  var number2 = number2_element.value;

  let result = number 1 / number2;

  var results h4 = document.getElementById("results");
  results_h4.innerText = result;
}

//2. Using javascript addEventListener methods

var divide_them = document.getElementById('divide-them');
/*
target.addEventListener(type, listener [, options]);

target is divide_them -- our button
type is click
listener is a function to be executed..
so..


divide_them.addEventListener('click',function(){
  alert('I am not implemented also!');
});
*/
//we can use the first approach for now..


//let us get rid of the error once someone fills in a value...

//let us check out the different events..

//clear error message if there is input
number1_element.addEventListener('focusout',(event)=>{
  //perfect..
  if(number1_element.value != ""){
    document.getElementById('num1Error').innerHTML = '';
    document.getElementById('num1Error').style.display = 'none';
  }
});

//clear error message if there is input
number2_element.addEventListener('focusout',(event)=>{
  //perfect..
  if(number2_element.value != ""){
    document.getElementById('num2Error').innerHTML = '';
    document.getElementById('num2Error').style.display = 'none';
  }
});



// There you have it
// We have looked at;
// Adding JS to a Page
/*
  1. Adding JS to a Page
  2. Event handling
  3. Bootstrap (overview) and Adding Icons
  4. Input validation

*/

//Check out classroom resources for more..

//Cheers
