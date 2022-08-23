<?php
date_default_timezone_set('Africa/lagos');
ob_start();
session_start();
require('../functions/conn.php');	
	
	
//register && LOGIN function
function msc($conn) {
	
if(isset($_POST['Reg_num']) && isset($_POST['email']) && isset($_POST['ID']) && isset($_POST['password']) && isset($_POST['submit'])) {
		$Reg_num = $_POST["Reg_num"];
		$email = $_POST["email"];
		$ID = $_POST["ID"];
		$password = $_POST["password"]; 
		//crypt the password
		$salt = sha1(md5($password)).'^#|!@#$%%vZsQ2lB8g0s'; 
		$password_hash = md5($password.$salt);
		$timestamp = date('Y-m-d  H:i:s');


		 if (!empty($Reg_num) &&!empty($email) &&!empty($ID) &&!empty($password)) {
			 $diz = 1;
			 	// CHANGE THE NAME OF THE TABLE LATER ON
			 $sql_select1 = "SELECT `Reg` FROM masters WHERE Reg LIKE '".mysqli_real_escape_string($conn, $Reg_num)."'";
			 $sql_select2 = "SELECT `email`  FROM masters WHERE email LIKE '".mysqli_real_escape_string($conn, $email)."'";
			 $sql_select3 = "SELECT `serial` FROM id WHERE `serial` ='".mysqli_real_escape_string($conn, $ID)."'";
			 $sql_select4 = "SELECT `id` FROM `id` WHERE serial LIKE '".mysqli_real_escape_string($conn, $ID)."' AND receipt LIKE '".mysqli_real_escape_string($conn, $diz)."'";
			 $result1 = mysqli_query($conn, $sql_select1);
			 $result2 = mysqli_query($conn, $sql_select2);
			 $result3 = mysqli_query($conn, $sql_select3);
			 $result4 = mysqli_query($conn, $sql_select4);
			 
				
			if (  mysqli_num_rows($result1) === 0) {//reg check
				echo '<script>document.getElementById("oz-header").innerHTML = "'.$Reg_num.' Don\'t exist!";</script>';
			 } else if (mysqli_num_rows($result2)===1) {//email check
				echo '<script>document.getElementById("oz-header").innerHTML = "The Email '.$email.' already exist.!";</script>';
			 } else if (mysqli_num_rows($result3)===0) {//serial id check
				echo '<script>document.getElementById("oz-header").innerHTML = "Invalid ID!";</script>';
			 }else if(mysqli_num_rows($result4)==1){//serial id used check
				echo '<script>document.getElementById("oz-header").innerHTML = "used ID!";</script>';
			 }else {
						
						//INSERTING
				$insert = "UPDATE `masters` SET `email`='".mysqli_real_escape_string($conn, $email)."',`serial`='".mysqli_real_escape_string($conn, $ID)."',`password`='".mysqli_real_escape_string($conn, $password_hash)."',`reg_date`='".$timestamp."' WHERE Reg='".mysqli_real_escape_string($conn, $Reg_num)."'";
				//INsert into ID
				$insert1 = "UPDATE id SET receipt='1' WHERE serial='".mysqli_real_escape_string($conn, $ID)."'";
				//query check
				$insert_query = mysqli_query($conn, $insert);
				$insert_query1 = mysqli_query($conn, $insert1);
				
				if ($insert_query===true && $insert_query1===true) {	
					echo '<script>document.getElementById("oz-header").innerHTML = "Please log in";</script>';
				} else {
					echo '<script> alert("Sorry, we couldn\'t Register you this time please try again later");</script>';
				} 
			 }
	} else {
		 echo '<script>document.getElementById("oz-header").innerHTML = "Please fill all fields!";</script>';
	 }
	 
	 //login
}	else if(isset($_POST['Reg_num']) && empty($_POST['email']) && empty($_POST['ID']) && isset($_POST['password']) && isset($_POST['submit'])){
			
		$Reg_num = $_POST["Reg_num"];
		$password = $_POST["password"]; 
		//crypt the password
		$salt = sha1(md5($password)).'^#|!@#$%%vZsQ2lB8g0s'; 
		$password_hash = md5($password.$salt);
		
		if(!empty($Reg_num) && !empty($password)){
			$sql_select = "SELECT `id` FROM masters WHERE Reg LIKE '".mysqli_real_escape_string($conn, $Reg_num)."' AND password LIKE 
		'".mysqli_real_escape_string($conn, $password_hash)."'";
		
		$login_query = mysqli_query($conn, $sql_select);
		$rows = mysqli_num_rows($login_query);
		
			if ($rows==0) {
				echo '<script>document.getElementById("oz-header").innerHTML = "Incorrect Reg number or password!";</script>';
			}else if ($rows==1) {
				
				$count = mysqli_fetch_row($login_query);
				$user_id = $count[0];
					//set cookie 

				setcookie('Reg_num', $Reg_num, time() + 2880, '/');
				setcookie('password', $password_hash, time() + 2880, '/');
				
				$_SESSION['user_id'] = $user_id;
					//Redirect to profile page
				header('Location: ptrue.php?='.md5(time()).''.sha1("group-nine").'"true/student"');
						
			}
			
		} else {
			echo '<script>document.getElementById("oz-header").innerHTML = "Please fill all fields!";</script>';
		}
	
	
}
}




//logged in function
function loggedin() {
	if (isset($_COOKIE['Reg_num']) && isset($_COOKIE['password']) && isset($_SESSION['user_id'])) {
		return true;
	} else {
		return false; 
	}
}

//userId function
function UserId($get) {
	require '../functions/conn.php';
	$query = "SELECT ".$get." FROM masters WHERE `id`='".$_SESSION['user_id']."'";
	if ($data_query = mysqli_query($conn, $query)) {
			$data_row = mysqli_fetch_row($data_query);
			$data_count = $data_row[0];
		if ($data_count == true) {
			return $data_count;
		}
	}
}
	
//file function 
function file_($conn){
	if (isset($_FILES['file']) && !empty($_FILES['file']) && isset($_POST['submit'])) {
	
			$Reg_num = mysqli_real_escape_string($conn, $_POST['Reg_num']);			
			//start file variables
			$file = $_FILES['file'];
			$target = 'uploads/'.basename($_FILES['file']['name']);
			//define file names 
			$filename = $file['name']; //file name
			$fileTmpname = $file['tmp_name']; //file temporary name
			$filesize = $file['size'];  //size of the file 
			$fileError = $file['error'];  //error output on the file
			$filetype = $file['type'];// the text 
			$allowedExt = 'ppt';
			
			$fileExt = explode('.',$filename);
			$fileActualExt = strtolower(end($fileExt));
			
			if (!empty($filename)) {
					if ($filesize < 1000000) {
						if ($fileError === 0) {
							if (in_array($fileActualExt, $allowedExt) == true) {
								move_uploaded_file($fileTmpname, $target);
								//query
								$upload_insert = "INSERT INTO filemasters VALUES ('', '".$Reg_num."', '', '', '', '".$filename."')";
								$upload_result = mysqli_query($conn, $upload_insert);

								echo "<script>alert('Your file was uploaded successfully!');</script>";
								
							} else {
								echo "<script>alert('You cannot Upload files of this type!');</script>";
							}
						} else {
							echo "<script>alert('There was an error uploading your file!');</script>";
						}
					} else {
						echo "<script>alert('File too large!!');</script>";
					}
			} else {
				echo "<script>alert('problem ooo!');</script>";
			}

		} 
}












