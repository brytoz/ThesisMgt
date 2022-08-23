	<!--
				 
		.'''.	  .'''.     .'''.    '     '  '''''.            '
	   '	 '   '     '   '     '   '     '  '     '          '
	   '         '   '     '     '   '     '  '     '         '
	   '  ''''   ' ' .     '     '   '     '  '`````         '  '
	   '  '  '   '    '    '     '   '     '  '             '   '   
		' . '    '     '    '...'     '...'   '            ''''''''''
                                                                '

-->
<?php
require 'query.php';
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
	<title>FUTO POSTGRADUATE | Msc STUDENTs LOGIN</title>
	
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
	<style>
		.oz-form{
			margin-top:4em;
		}
	</style>
</head>

<body>
	
	<center>
	
	<div class="oz-form">
		<div class="oz-form-container container">
			<div id="msc">
				<div class="oz-form-header" id="oz-form-header">
					<img src="../images/futo.jpg" alt="SCIT-IT" height="" width=""  > <br>
				</div><div id="oz-header" class="oz-header">SIGN IN</div>
				<div class="form-data"><?php 
					echo '<form action="'.msc($conn).'" ent-type="form-data" method="POST" id="form">';
						echo '<input type="text" placeholder="REG NUMBER" name="Reg_num" id="reg" maxlength="11" pattern="[2]{1}[0]{1}[1]{1}[5]{1}[1]{1}[0]{1}[1]{1}[0-9]{4}" title="REGISTRATION NUMBER" required="">';
						echo '<input type="password" placeholder="PASSWORD" id="password" title="PASSWORD" minlength="6" name="password" required="">';
						echo '<div class="submit"><button type="submit" name="submit" value="VERIFY" id="submit">LOGIN </button></div>
					</form>'; ?>
				</div>
			<div class="validated" id="Login" name="validated" title="Login" ><a href="Msc.php">Not Registered?</a></div>
		</div>
	</div>
	
	</center>
	
	
	
	
	<br>
	<div class="footer"> designed and developed by <a href="#" title="OWNED BY BRYTOZ" target="_blank">byte.io</a></div>
	<script src="../main.js"></script>
</body>
</html>


