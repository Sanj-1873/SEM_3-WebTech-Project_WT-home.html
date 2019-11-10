console.log("Please say something");


var ob = document.getElementsByClassName('IN-KA'); 
var target = document.getElementsByClassName('box'); 

function appear() { 
	target.style.visibility="visible";
}
function disappear() {
	target.style.visibility="hidden"; 
}
var target = document.getElementById("box");
target.onmouseover = function() {
console.log("Hello World");
};

//set a variable to refer to a specific ID
var ob = document.getElementById("IN-KA");
//initiate this function when the user clicks the ID
ob.onmouseover = function() {
console.log("Hello World");
};





/*
//declare the function
function prepareEventHandlers() {
//get a specific page ID and assign it as a variable
//initiate this function when the ID is clicked
specialSection.mouseOver = function() {
alert("Hello ");
}
}

window.onload = function() {
prepareEventHandlers();
}
*/ 

