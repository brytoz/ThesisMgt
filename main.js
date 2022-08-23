$(document).ready(function() {
	$('.nav-trigger').click(function() {
		$('.side-nav').toggleClass('visible');
	});
});


function gotologin() {
	var log = document.getElementById('submit');
	var ID = document.getElementById('id');
	var header = document.getElementById('oz-header'); 
	var _hide = document.getElementById('Login'); 
	var _show = document.getElementById('pass_recovery'); 
	var __hide = document.getElementById('home');
	var email = document.getElementById('email');
	
	
	_show.style.display = "block";
	_hide.style.display = "none";
	__hide.style.display = "none";
	log.innerHTML = "LOGIN";
	header.innerHTML = "SIGN IN";
	ID.style.display = "none";
	email.style.display = "none";
	
}



//////////

function actionOne(){
	var chnage = document.getElementById('oz-details');
	chnage.style.display = "none";
	var chnage1 = document.getElementById('disappear');
	chnage1.style.display = "none";
	var chnage2 = document.getElementById('disappear1');
	chnage2.style.display = "block";
	
}

function actionTwo(){
	var chnage = document.getElementById('oz-details');
	chnage.style.display = "none";
	var chnage1 = document.getElementById('disappear1');
	chnage1.style.display = "none";
	var chnage2 = document.getElementById('disappear');
	chnage2.style.display = "block";
	var chnage3 = document.getElementById('but');
	chnage3.style.display = "block";
	var chnage3 = document.getElementById('but1');
	chnage3.style.display = "none";
	
}







