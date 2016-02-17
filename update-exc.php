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
	
	//Sanitize the POST values
	$name = clean($_POST['name']);
	$email = $_SESSION['USER_EMAIL'];
	$update_email=clean($_POST['user_email']);
	
	 $qry_select="SELECT * FROM users WHERE email='$email'";
	 
    $result_select=mysql_query($qry_select);
	
    if(mysql_num_rows($result_select)>0){
		
		$member = mysql_fetch_assoc($result_select);
			
		$id = $member['id'];
		$sql = "UPDATE users SET name='$name', email='$update_email' WHERE id='$id'";
		$result=mysql_query($sql);
		 
		if($result) {
			
			//Login Successful
			session_regenerate_id();
			
			$_SESSION['UID'] = $id;
			$_SESSION['NAME'] = $name;
			$_SESSION['USER_EMAIL'] =$update_email;			
			
			session_write_close();
			
		    echo "updated";
		    exit();
	    }
    }
    else{
	    echo "Email Does not Exist!";
     exit();
    }
	
?>