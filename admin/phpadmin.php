<?php
require '../functions/conn.php';

//register && LOGIN function
function admin($conn) {
	
if(isset($_POST['fullname']) && isset($_POST['school'])  && isset($_POST['password']) && isset($_POST['icode']) && isset($_POST['submit'])) {
		$fullname = $_POST["fullname"];
		$school = $_POST["school"];
		$icode = $_POST["icode"];
		$password = $_POST["password"]; 
		//crypt the password
		$salt = sha1(md5($password)).'^#|!@#$%%vZsQ2lB8g0s'; 
		$password_hash = md5($password.$salt);
		$timestamp = date('Y-m-d  H:i:s');


		 if (!empty($fullname) &&!empty($school) &&!empty($icode) &&!empty($password)) {
			 	// CHANGE THE NAME OF THE TABLE LATER ON
			 $sql_select1 = "SELECT `fullname` FROM supervisor WHERE fullname LIKE '".mysqli_real_escape_string($conn, $fullname)."'";
			 $sql_select2 = "SELECT `school`  FROM supervisor WHERE school LIKE '".mysqli_real_escape_string($conn, $school)."'";
			 $sql_select3 = "SELECT `code` FROM `supervisor` WHERE code LIKE '".mysqli_real_escape_string($conn, $icode)."'";
			 $result1 = mysqli_query($conn, $sql_select1);
			 $result2 = mysqli_query($conn, $sql_select2);
			 $result3 = mysqli_query($conn, $sql_select3);
			 
				
			if (  mysqli_num_rows($result1) === 1) {//fullname check
				echo '<script>alert("'.$fullname.' already exist!");</script>';
			 }else if(mysqli_num_rows($result3)==1){//serial icode used check
				echo '<script>alert("used Code Id!");</script>';

			 }else {
						
						//INSERTING
				$insert = "INSERT INTO supervisor VALUES ('', 
				'".mysqli_real_escape_string($conn, $fullname)."',
				'".mysqli_real_escape_string($conn, $school)."',
				'".mysqli_real_escape_string($conn, $icode)."',
				'".mysqli_real_escape_string($conn, $password_hash)."')";
				//query check
				$insert_query = mysqli_query($conn, $insert);
				
				if ($insert_query===true) {	
					echo '<script> alert("Please log in");</script>';
				} else {
					echo '<script>alert("Sorry, we couldn\'t register you this time please try again later");</script>';

				} 
			 }
	} else {
		 echo '<script>alert("Please fill all fields!");</script>';
		 
	 }
	
	 //login section
			
}	
			
}


function adlogin($conn){
	if(empty($_POST['fullname']) && empty($_POST['school']) && isset($_POST['icode']) && isset($_POST['password']) && isset($_POST['submit'])){
		$icode = $_POST["icode"];
		$password = $_POST["password"]; 
		//crypt the password
		$salt = sha1(md5($password)).'^#|!@#$%%vZsQ2lB8g0s'; 
		$password_hash = md5($password.$salt);
		
		if(!empty($icode) && !empty($password)){
			$sql_select = "SELECT `id` FROM supervisor WHERE code LIKE '".mysqli_real_escape_string($conn, $icode)."' AND password LIKE '".mysqli_real_escape_string($conn, $password_hash)."'";
		
			$login_query = mysqli_query($conn, $sql_select);
			$rows = mysqli_num_rows($login_query);
			
			if ($rows==0) {
				echo '<script>alert("Incorrect Code Id or password! ");</script>';
			}else if ($rows==1) {
				$_SESSION['icode'] = $_POST['icode'];
				/*$count = mysqli_fetch_row($login_query);
				$user_icode = $count[0];
					//set cookie 

				setcookie('code', $code, time() + 2880, '/');
				setcookie('password', $password_hash, time() + 2880, '/');
				
				$_SESSION['user_icode'] = $user_icode;*/
					//Redirect to profile page
				header('Location: successful.php?true='.sha1(rand()).'/');
			}
				
		} else {
			echo '<script>alert("Please fill all fields!");</script>';
		}
			
}

}



function check($conn){
	
	if(isset($_POST['reject']) && empty($_POST['reject'])){/*
		$to_email = "recipient@example.com"; //the user email
		$subject = "no-reply Thesis report";
		$body = "Your thesis was rejected at this stage, please review your work";
		$headers = "From: group9@example.com";
	 
	   if ( mail($to_email, $subject, $body, $headers)) {
		  echo "<script>alert('Email successfully sent to '".$to_email."</script>";
		  
		  //remove the user here $my_file = 'file.txt';  unlink($my_file);
	   } else {
		  echo("Email sending failed...");
		} */ echo "<script> 
			document.getElementById('checking').style.display = 'none';
			document.getElementById('checking').style.display = 'none';
			document.getElementById('process').style.display = 'block';
			alert('Your thesis was rejected at this stage, please review your work'); </script>";
			

	}else if(isset($_POST['accept']) && empty($_POST['accept'])){/*
			$to_email = "recipient@example.com"; //the user email
		   $subject = "no-reply Thesis report";
		   $body = "Your thesis was accepted";
		   $headers = "From: group9@example.com";
		 
		   if ( mail($to_email, $subject, $body, $headers)) {
			  echo "<script>alert('Email successfully sent to '".$to_email."</script>";
			  
			  //remove the user here $my_file = 'file.txt';  unlink($my_file); 
		   } else {
			  echo("Email sending failed...");
			}*/ echo "<script> 
			document.getElementById('checking').style.display = 'none';
			document.getElementById('checking').style.display = 'none';
			document.getElementById('process').style.display = 'block';
			alert('Your thesis was accepted'); </script>";
			
		} else {
		
	}
	
}


function getfile($conn){
	if(isset($_REQUEST['file'])){
		//Get parameters 
		$file = urldecode($_REQUEST['file']);   //decode the URL-endcoded string
		$filepath = 'path/'.$file;
		
		
		//start download
		if(file_exists($filepath)){
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment;filename="'.basename($filepath).'');
			header('Expires, 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: '.filesize($filepath));
			flush();
			readfile($filepath);
			exit();
		}
	}
}


function open($conn){
	if(isset($_POST['fille'])){
		$myfile = fopen("Abstract1.doc", "r") or die("Unable to open file!");
		echo fread($myfile,filesize("Abstract1.doc"));
	}
	
}


//display function
function display($conn) {	
	//$Username = UserId('username'); 
	//$_SESSION['username'] = $Username;
		
	/*			
	 $sql =  "SELECT * FROM `filemasters`";
	 $results = mysqli_query($conn, $sql);
	 $sql =  "SELECT * FROM `filemasters`";
	 $results = mysqli_query($conn, $sql);
	 $sql =  "SELECT * FROM `filemasters`";
	 $results = mysqli_query($conn, $sql);*/
	 
	 
	 $sql =  "SELECT * FROM `filemasters`";
	 $results = mysqli_query($conn, $sql);
	 while ($row = mysqli_fetch_assoc($results)) {
		 $msc = 'msc';
		 $phd = 'phd';
		 $pgd = 'pgd';
		// $sql =  "SELECT `id` FROM `supervisor` WHERE school LIKE '".mysqli_real_escape_string($conn, $msc)."' AND code LIKE '".$_SESSION['icode']."'";
		//	$results = mysqli_query($conn, $sql);
		 
		 
		 
			echo '<tr>';
			echo '<td>'.$row['Reg'].'</td>';
			echo '<td>';
			echo ' <form method="POST" action="'.getfile($conn).'" >';
				echo '<span class="btn btn-info" cursor="pointer"  name="file"> <a style="color:white;" href="Abstract1.doc">'.$row['file'].'</a></span>';
			echo ' </form>';
			echo '</td>';
			echo '<td>';
			echo ' <form method="POST" action="'.check($conn).'" >';
			echo '<button class="btn btn-info" name="process" onclick="explode();" disabled id="process" > Checking</button>';
			
			//$sql =  "SELECT * FROM `filemasters`";
			//$results = mysqli_query($conn, $sql);
			
			
			echo '<span id="checking" ><button class="btn btn-success" name="accept"  > Accept</button> ';
			echo '<button name="reject" class="btn btn-danger">Reject</button></span>';
			echo '</form>';
			echo '</td>';
			echo '</tr>';
	}
}








