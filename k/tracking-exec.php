<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('admin/Connection/config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysqli server
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysqli_error());
	}
	
	//Select database
	$db = mysqli_select_db($link, DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	// function clean($str) {
	// 	$str = @trim($str);
	// 	if(get_magic_quotes_gpc()) {
	// 		$str = stripslashes($str);
	// 	}
	// 	return mysqli_real_escape_string($str);
	// }


	function stripslashes_deep($str){
			$str = is_array($str) ?
						array_map('stripslashes_deep', $str) :
						stripslashes($str);

			return $str;
		}


	//Sanitize the POST values
	$login = stripslashes_deep($_POST['tracknumber']);
	
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Empty Tracking field not allowed';
		$errflag = true;
	}
	
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: Track_Package_online.php");
		exit();
	}
	
	//Create query
	$qry= mysqli_query($link,"SELECT * FROM tracking WHERE num='$login'");
	$result=mysqli_query($link,"SELECT * FROM tracking WHERE num='$login'");
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			$user = mysqli_fetch_assoc($result);
			$_SESSION['USER_NUM'] = $user['num'];
			

			session_write_close();
			header("location: Tracking-infos.php");
			exit();
		}else {
			//Login failed
		    $errmsg_arr[] = 'Provide a valid tracking Number';
		    $errflag = true;
	       //If there are input validations, redirect back to the login form
	       if($errflag) {
		     $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		     session_write_close();
		     header("location: Track_Package_online.php");
		     exit();
	       }			
		}
	}else {
		die("Query failed");
	}
?>