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
<!DOCTYPE hmtl>
<html lang="en">
<head>
<link href="bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="bootstrap/bootstrap.min.js"></script>
<script src="bootstrap/jquery-1.11.1.min.js"></script>
<!-- // IMAGE ICON -->
	<link rel="icon" type="img/jpg" href="../images/futo.jpg">

<title> SUPERVISOR LOGIN | FUTO POSTGRADUATE</title>

<style>
body{		
			background: url('../images/calendar.jpg');
			margin: 0 !important;
			background-size:cover;
			background-repeat:no-repeat;
			background-position: center center;
			height:100%;
			width:100%;
		}
</style>
</head>
<body>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Supervisors Sign In</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                       <?php echo '<form method="POST" action="'.adlogin($conn).'" ent-type="form-data" id="loginform" class="form-horizontal" role="form">' ;?>
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" required="" maxlength="10" pattern="[0-9]{10}" name="icode" placeholder="CODE ID">                                        
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" required="" name="password" placeholder="PASSWORD">
                            </div>
                                    
                                <div style="margin-top:10px; margin-left:-50%; text-align:center;" class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button  style="width:-100%;" type="submit" name="submit"  name="submit" class="btn btn-success"> LOGIN </button>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Supervisors Registration 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            HERE
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                        </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Supervisors Reg</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                           <?php echo '<form method="POST" ent-type="form-data" action="'.admin($conn).'" id="signupform" class="form-horizontal" role="form">';?>
                                <center>
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    
                                </div></center>
                                    
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">FULLNAME</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="fullname" required="" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="school" class="col-md-3 control-label">SCHOOL</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" maxlength="3" pattern="[aA-zZ]{3}" name="school" required="" placeholder="PGD/MSC/PHD" title="Simply Type Either PGD/MSC/PHD">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" required="" name="password" placeholder="Password">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label"> Code ID</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" required="" pattern="[0-9]{10}" maxlength="10" name="icode" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button  style="width:100%;" type="submit" name="submit"  name="submit" class="btn btn-success">Register</button>
                                    </div>
                                </div>
                                
                            </form>
                         </div>
                    </div>
                
         </div> 
    </div>
 </body>