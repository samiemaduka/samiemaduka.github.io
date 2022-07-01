<?php
session_start();
?>
<?php
unset($_SESSION['USER_ADMIN_ID']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>tracking information</title>
<style type="text/css">
<!--
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
body {
	background-image: url();
	background-repeat: repeat-x;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	color: #009933;
}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.fails {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 11px;
	color: #F00;
}
-->
</style></head>

<body>
<table width="100%" height="50" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#EAE9E9">&nbsp;</td>
  </tr>
</table>
<hr color="#0957AE"/>
<p>&nbsp;</p>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><fieldset>
      <legend><span class="style1">Login Administrator</span> </legend>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td width="38%">&nbsp;</td>
              <td width="62%"><?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<table width="100%" class="fails">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<tr><td>',$msg . '</td></tr>'; 
		}
		echo '</table>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2"><form id="login" name="login" method="POST" action="login-exec.php">
                <label></label>
                <table width="100%" border="0" cellspacing="3" cellpadding="0">
                  <tr>
                    <td width="27%">&nbsp;</td>
                    <td width="17%"><span class="style4">Username</span></td>
                    <td width="56%"><label>
                      <input name="username" type="text" id="username" />
                    </label></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><span class="style4">Password</span></td>
                    <td><input name="pass" type="password" id="pass" /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><label>
                      <input name="loginbtn" type="submit" id="loginbtn" value="Login" />
                    </label></td>
                  </tr>
                </table>
              </form>
              </td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2">&nbsp;</td>
            </tr>
          </table>
      </fieldset></td>
    </tr>
</table>
</body>
</html>
