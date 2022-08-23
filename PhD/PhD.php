	
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
date_default_timezone_set('Africa/lagos');
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
	<title>FUTO POSTGRADUATE | PhD STUDENTs LOGIN</title>
	
	<!-- // IMAGE ICON -->
	<link rel="icon" type="img/jpg" href="../images/futo.jpg">
	
	<!-- //Import CSS-->
	<link rel="stylesheet" href="../animate/animate.css" media="all">
	<link rel="stylesheet" href="../main.css" media="all">
		<script src="../animate/wow.min.js"></script>

	
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap4.min.css" media="all">
	
	<!-- //Import JS-->
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="../main.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Rajdhani:500" rel="stylesheet">
	
</head>

<body onload="load()">
	<div class="oz-sticky-nav" id="oz-sticky-nav">
		<a  href="../PGD/PGD.php"  class="oz-categories Category" id="oz-categories Category">PGD students<i class="fa fa-cogs"></i></a>
		<a href="../Msc/Msc.php" class="oz-categories Category" id="oz-categories Category">Msc students<i class="fa fa-cogs"></i></a>
		<a  href="#"  class="oz-categories Category active" id="oz-categories Category">PhD students<i class="fa fa-cogs"></i></a>
	</div>

	
	
	<center>
	
	<div class="oz-form">
		<div class="oz-form-container container">
			<div id="phd">
				<div class="oz-form-header" id="oz-form-header">
					<img src="../images/futo.jpg" alt="SCIT-IT" height="" width=""  > <br>
				</div><div id="oz-header" class="oz-header">registration</div>
				<div class="form-data"><?php
					echo '<form action="'.phd($conn).'" ent-type="form-data" method="POST" id="form">';
						echo '<input type="text" placeholder="REG NUMBER" name="Reg_num" id="reg" maxlength="11" pattern="[2]{1}[0]{1}[1]{1}[0-9]{8}" title="REGISTRATION NUMBER" required="">';
						echo '<input type="text" name="email"  id="email" maxlength="30" placeholder="E-MAIL"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  required="">';
						echo '<input type="text" id="id" placeholder="SERIAL ID" pattern="[0-9]{10}" maxlength="10" title="SERIAL ID" name="ID" required="">';
						echo '<input type="password" placeholder="PASSWORD" id="password" title="PASSWORD" minlength="6" name="password" required="">';
						echo '<div class="submit"><button type="submit" name="submit" value="VERIFY" id="submit">REGISTER <span> </span></button></div>
					</form>'; ?>
				</div>
			<div class="validated" id="Login" name="validated" title="Login" >Registered?, <a cursor="pointer" href="<?php echo 'login.php?=login50591?/philosophy'; ?>">Login!	  </a></div>
			</div>
		</div>
	</div>
	
	</center>
	
	
	
	
	<br>
	<div class="footer"> designed and developed by <a href="#" title="OWNED BY BRYTOZ" target="_blank">byte.io</a></div>
	<script src="../main.js"></script>
	<script src="../animate/wow.min.js"></script>
</body>
</html>


