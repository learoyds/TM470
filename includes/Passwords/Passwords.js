// JavaScript Document

// Password Generator
// Created by Chris Learoyd
// http://www.learoyds.com
// Copyright All Rights Reserved 2013.

function singlePassword() {
	
	var myLetter;
	var myNumber = Math.floor(Math.random() * (126 - 33 + 1)) + 33;
	while (myNumber == 59) {
		myNumber = Math.floor(Math.random() * (126 - 33 + 1)) + 33;
	}
	while (myNumber == 34){
		myNumber = Math.floor(Math.random() * (126 - 33 + 1)) + 33;
	}
	while (myNumber == 60){
		myNumber = Math.floor(Math.random() * (126 - 33 + 1)) + 33;
	}
	while (myNumber == 61){
		myNumber = Math.floor(Math.random() * (126 - 33 + 1)) + 33;
	}
	while (myNumber == 62){
		myNumber = Math.floor(Math.random() * (126 - 33 + 1)) + 33;
	}
	while (myNumber == 124){
		myNumber = Math.floor(Math.random() * (126 - 33 + 1)) + 33;
	}
	while (myNumber == 42){
		myNumber = Math.floor(Math.random() * (126 - 33 + 1)) + 33;
	}
	myLetter = String.fromCharCode(myNumber);
	return myLetter;
}

function passwordGrid() {
	
	document.getElementById("main").innerHTML="<table id='table'><tr><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword()  + "</td><td>" + singlePassword()  + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td></tr><tr><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td></tr><tr><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td></tr><tr><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword()  + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td></tr><tr><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" +singlePassword()  + "</td><td>" + singlePassword() + "</td></tr><tr><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" +singlePassword()  + "</td><td>" + singlePassword() + "</td></tr><tr><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" +singlePassword()  + "</td><td>" + singlePassword() + "</td></tr><tr><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" +singlePassword()  + "</td><td>" + singlePassword() + "</td></tr><tr><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" +singlePassword()  + "</td><td>" + singlePassword() + "</td></tr><tr><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" +singlePassword()  + "</td><td>" + singlePassword() + "</td></tr><tr><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" +singlePassword()  + "</td><td>" + singlePassword() + "</td></tr><tr><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" + singlePassword() + "</td><td>" +singlePassword()  + "</td><td>" + singlePassword() + "</td></tr></table>";
		
}