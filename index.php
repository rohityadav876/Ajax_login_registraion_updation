 <?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['UID']) || (trim($_SESSION['UID']) == '')) {
		header("location: login.php");
		exit();
	}
?>

<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Dashboard for Saaslabs</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 


<link href="style/style.css" rel="stylesheet" type="text/css" media="screen">



</head>

<body class="my">
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
            <li><a href="logout.php" > <span class="glyphicon glyphicon-log-out "> </span> Logout</a></li>
            
        </div><!--/.nav-collapse -->
      </div>
</nav>
   
   <div id="update_info"></div> 
<div class="signin-form">

	<div class="container">
	
    

	  <table class="table">
    <thead>
      <tr>
	  <th>SaasLabs ID</th>
        <th>Firstname</th>
        
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td> <?php echo $_SESSION['UID'] ; ?></td>
       
        <td><?php echo $_SESSION['NAME'] ; ?></td>
        <td><?php echo $_SESSION['USER_EMAIL'] ; ?></td>
      </tr>
    </tbody>
  </table>
  
	  <button type="button" class="btn btn-info btn-lg" id="editdetails" data-toggle="modal" data-target="#edit" data-keyboard="true"> <span class="glyphicon glyphicon-edit"></span> Edit Details</button>
    </div>
    
</div>

<!-- Modal -->
  <div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Yout Details </h4>
        </div>
        <div class="modal-body">
		
		
            <form class="form-signin" method="post" id="update-form">
        
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
		
       <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter Your Name" name="name" id="name" value=" <?php echo $_SESSION['NAME'] ; ?>" />
        </div>
		
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" value="<?php echo $_SESSION['USER_EMAIL'] ; ?>" />
        <span id="check-e"></span>
        </div>
        

        
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
    		<span class="glyphicon glyphicon-edit"></span> &nbsp; UpdateDetails
			</button> 
        </div>        
      </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

 <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>