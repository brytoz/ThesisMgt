<?php
require 'query.php';
	
	$fullname = UserId('fullname');
	$Email = UserId('email');
	$Reg_num = UserId('Reg');
	$serial_ID = UserId('serial');
	//$stage = UserId('year');
	 
	 
 if (loggedin()==true) {
	 return true;
 } else {
	header('Location: ../functions/logout.php'); 
 }
?>