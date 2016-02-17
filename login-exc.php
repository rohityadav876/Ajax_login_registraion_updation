<?php
	//Start session
	session_start();
	
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
	$email = clean($_POST['user_email']);
	$password = clean($_POST['password']);
	
	$qry="SELECT * FROM users WHERE email='$email' AND password='".md5($_POST['password'])."'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			
			//Login Successful
			session_regenerate_id();
			
			$member = mysql_fetch_assoc($result);
			
			$_SESSION['UID'] = $member['id'];
			$_SESSION['NAME'] = $member['name'];
			$_SESSION['USER_EMAIL'] = $member['email'];			
			$_SESSION['PASSWORD'] = $member['password'];
			session_write_close();
			echo "Login Successful !";
			exit();
		}else {
			//Login failed
			echo "Login Failed !";
			exit();
		}
	}else {
		die("Query failed");
	}
	
	
?>