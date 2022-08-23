
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
require 'phpadmin.php';

?>

<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SUPERVISORS PANEL |  FUTO POSTGRADUATE </title>
	
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="css/main.css">


		<link rel="stylesheet" href="css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  
		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="css/main.js"></script>

		
		<!-- // IMAGE ICON -->
		<link rel="icon" type="img/jpg" href="../images/futo.jpg">
		<style>
			#process{
				display:none;
			}
		</style>
		

	</head>
	<body>

		<div class="header">
			<div class="logo">
				<i class="fa fa-bar-chart"></i>
				<span>PANEL</span>
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
		</div>
		<div class="side-nav">
			<div class="logo">
				<i class="fa fa-bar-chart"></i>
				<span>PANEL</span>
			</div>
			<nav>
				<ul>
					
					<li class="active">
						<a href="#">
							<span><i class="fa fa-file"></i></span>
							<span>THESIS</span>
						</a>
					</li>
					
				</ul>
			</nav>
		</div>
		<div class="main-content">
			<div class="title">
				Hello There!
				<div class="pashword">
						<a href="../functions/logout.php">
							<span><i class="fa fa-bar-user"></i></span>
							<span><span><i class="fa fa-sign-out"></i></span> Logout </span>
						</a>	
				</div>
			</div>
			
			<div class="main">
				<div class="widget">
						<div class="title">Thesis waiting to be approved</div>
						<div class="chart"></div>
					<div class="context"> 
						<center style="margin-top:8px;">
						


							<div class="container">
							  <table class="table table-striped">
								<thead>
								  <tr>
									<th>Reg Number</th>
									<th>File</th>
									<th>Check</th>
								  </tr>
								</thead>
								<tbody>
										<?php display($conn);?>
								</tbody>
							  </table>
							</div>
						
						</center>
					</div>								
									
				</div>
			</div>
		</div>
																<script>
																	
																</script>
	</body>
</html>