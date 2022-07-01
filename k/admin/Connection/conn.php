<?php


# FileName="Connection_php_mysqli.htm"
# Type="mysqli"
# HTTP="true"
$hostname_login = "localhost";
$database_login = "database_test";
$username_login = "database_test";
$password_login = "password_test";
$login = mysqli_connect($hostname_login, $username_login, $password_login) or trigger_error(mysqli_error(),E_USER_ERROR); 


$data = mysqli_select_db($login, $database_login);
if(!$data){
die("No database Selected");
}
?>