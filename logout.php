<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
		unset($_SESSION['UID']);
	unset($_SESSION['NAME']);
	unset($_SESSION['USER_EMAIL']);
?>

<!DOCTYPE html">
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Dashboard:Logged Out</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 


<link href="style/style.css" rel="stylesheet" type="text/css" media="screen">



</head>

<body>
   <nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"  title="Saaslabs Login Registration System">SaasLabs</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
               <li><a href="login.php" >Login</a></li>
            <li><a href="register.php" >Register</a></li>
			
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>
   
   
<div class="signin-form">

	<div class="container">
	<div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Success!</strong>  Successfully Logged out From our system.
    </div>

	
    </div>
    
</div>


 <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
$('document').ready(function()
{ 
	window.setTimeout(function(){
									
		window.location.href = "index.php";
										
	}, 6000);
});
</script>


</body>
</html>

