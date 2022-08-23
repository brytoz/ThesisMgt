	
	<!--
				 
		.'''.	  .'''.     .'''.    '     '  '''''.            '
	   '	 '   '     '   '     '   '     '  '     '          '
	   '         '   '     '     '   '     '  '     '         '
	   '  ''''   ' ' .     '     '   '     '  '`````         '  '
	   '  '  '   '    '    '     '   '     '  '             '   '   
		' . '    '     '    '...'     '...'   '            ''''''''''
                                                                '

-->
<?
include 'all.php';

 if (loggedin()==false) {
	header('Location: ../functions/logout.php'); 
 }
 

?>


<!DOCTYPE hmtl>
<html lang="en">
<head>
	<meta charset="Utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">		
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content=" "/>
	<meta name="description" content=" ">
	<title>FUTO POSTGRADUATE | PhD STUDENT</title>
	
	<!-- // IMAGE ICON -->
	<link rel="icon" type="img/jpg" href="../images/futo.jpg">
	
	<!-- //Import CSS-->
	<link rel="stylesheet" href="../animate/animate.css" media="all">
	<link rel="stylesheet" href="../main.css" media="all">
	
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap4.min.css" media="all">
	
	<!-- //Import JS-->
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="../main.js"></script>
		
	<link href="https://fonts.googleapis.com/css?family=Rajdhani:500" rel="stylesheet">

	<!-- //ICON -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		
		<style>
		body{		
			background: url('../images/futo-tab-01-Scaled.jpg');
			margin: 0 !important;
			background-size:cover;
			background-repeat:no-repeat;
			background-position: center center;
			height:100%;
			width:100%;
		}
		#disappear{
			display:none;
		}
		#disappear1{
			display:none;
		}
		.footer {
			color:black;
		}
	</style>
</head>

<body >
	<center>
	
	<div class="oz-form-profile">
			<div class="oz-body-main" id="oz-body-main">
				<div class="oz-body"><form method="POST">
					<a onclick="actionOne()" href="#" name="profile"> <span><span><i class="fa fa-user"></i></span> Profile </a>
					<a onclick="actionTwo()" href="#" name="process"> <span><i class="fa fa-mortar-board"></i></span> Process </a></form>
					<a href="../functions/logout.php"><span><i class="fa fa-sign-out"></i></span> Logout</a>
				</div>
				<div class="oz-details" name="oz-details" id="oz-details"> Welcome to your portal!. <br>Please make sure you were issued a receipt on payment of your departmental dues </div>
				<div class="oz-details" id="disappear1">
					<?php require_once 'all.php';
						echo '<p>FULLNAME: '.$fullname.'</p>';
						echo '<p>REG-NUM: '.$Reg_num.'</p>';
						echo '<p>EMAIL: '.$Email.'</p>';
						echo '<p>SERIAL ID: '.$serial_ID.'</p>';
					?> 
				</div>
				<div class="oz-details" id="disappear">
					Submission of thesis
					<?php require_once 'all.php';
						echo '<div id="but1" ><span class="span1"> STAGE 1</span>';
							echo '<form action="'.file_($conn).'" ent-type="form-data" method="POST" id="form">';
								echo '<input type="file" title="Choose file" name="file" required="">';
								echo '<input type="hidden" name="Reg_num" value="'.$Reg_num.'">';
								echo '<input type="submit" title="Upload thesis" value="UPLOAD" class="btn btn-primary" name="submit">';
							echo '</form>';
						echo '</div>';
					?>
				</div>
			</div>
	</div>
	
	</center>
	
	
	
	<br>
	<div class="footer"> designed and developed by <a href="#" title="OWNED BY BRYTOZ" target="_blank">IMT GROUP 4</a></div>
	<script src="../main.js"></script>
</body>
</html>


