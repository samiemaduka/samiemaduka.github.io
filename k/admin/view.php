<?php
session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if($_SESSION['USER_ADMIN_ID'] == '') {
		header("location: index.php");
		exit();
	}
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
	font-size: 14px;
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
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><fieldset><legend>Tracking Information</legend>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><form id="form1" name="form1" method="post" action="view.php">
                <table width="100%" border="0" cellspacing="3" cellpadding="0">
                  <tr>
                    <td width="12%">&nbsp;</td>
                    <td width="19%"><a href="view.php?admin">
                      <input name="admin" type="submit" id="addbtn3" value="Add Administrator" />
                    </a></td>
                    <td width="16%"><a href="view.php?addbtn">
                      <input name="addbtn" type="submit" id="addbtn2" value="Add Number" />
                    </a></td>
                    <td width="20%"><a href="view.php?viewbtn">
                      <input name="viewbtn" type="submit" id="addbtn" value="View Number" />
                    </a></td>
                    <td width="33%"><a href="index.php">
                      Log out
                    </a></td>
                  </tr>
                </table>
                            </form>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><?php


           $name = $_SESSION['USER_ADMIN_ID'];
	
           //Include database connection details
           require_once('connection/conn.php');

           // Query the database and get the count

           $result = mysql_query("SELECT id FROM tracking");
           $num_rows = mysql_num_rows($result);



				
				
				
				
                if(isset($_REQUEST['addbtn'])){
				// including the add account information page to the database
				include('addtrack.php');
				}else if(isset($_REQUEST['viewbtn'])){
				// including the viewacc page
				include('viewtrack.php');
				}else if(isset($_REQUEST['addnumbtn'])){
				// including the viewacc page
				include('addtrack.php');
				}else if(isset($_REQUEST['edit'])){
				// including the viewacc page
				include('edittrack.php');
				}else if(isset($_REQUEST['delete'])){
				// including the viewacc page
				include('deletetrack.php');
				}else if(isset($_REQUEST['updatebtn'])){
				// including the viewacc page
				include('updateid.php');
				}else if(isset($_REQUEST['admin'])){
				// including the viewacc page
				include('addadmin.php');
				}else if(isset($_REQUEST['adminbtn'])){
				// including the viewacc page
				include('addadmin.php');
				}
				else {
				
				echo("<center>($num_rows) Tracking Numbers Entered into the database</center><br/>");
				echo("<center>" . $_SESSION['USER_ADMIN_ID'] . ", Welcome to the Tracking CMD</center>");
				
				}
				
				?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
      </fieldset></td>
    </tr>
</table>

</body>
</html>
