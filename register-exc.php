<?php
	
	require_once 'dbconfig.php';

	//Connect to mysql server
    $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
    if(!$link) {
        die('Failed to connect to server: ' . mysql_error());
    }
    
    //Select database
    $db = mysql_select_db(DB_DATABASE);
    if(!$db) {
        die("Unable to select database");
    }
    
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$name = clean($_POST['name']);
	$email = clean($_POST['user_email']);
	$password = clean($_POST['password']);
	$cpassword = clean($_POST['cpassword']);
	
	 $qry_select="SELECT * FROM users WHERE email='$email'";
    $result_select=mysql_query($qry_select);
    if(mysql_num_rows($result_select)>0){
      echo "Duplicate Email";
     exit();	  
    }
    else{
	    //Create INSERT query
	    $qry = "INSERT INTO users(name, email, password) VALUES('$name','$email','".md5($_POST['cpassword'])."')";
	    $result = @mysql_query($qry);
	    
	    //Check whether the query was successful or not
	    if($result) {
		    echo "registered";
		    exit();
	    }else {
		    die("Something went wrong.\n Our team is working on it at the  moment.\n Please try again after some few minutes.". mysql_error());
	    }
    }
	
?>