<?php require_once('Connections/login.php'); ?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['tracknumber'])) {
  $loginUsername=$_POST['tracknumber'];
  $password=$_POST['tracknumber'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "Tracking-infos.php";
  $MM_redirectLoginFailed = "Tracking-failed.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_login, $login);
  
  $LoginRS__query=sprintf("SELECT num, num FROM tracking WHERE num='%s' AND num='%s'",
    get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password)); 
   
  $LoginRS = mysql_query($LoginRS__query, $login) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<html>
<head>

<link rel="shortcut icon"  href="images/logoicon_16.gif">
<title>Track Package Online</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-image: url(images/background_01.gif);
	background-repeat: repeat-x;
}
.style7 {font-family: Arial; font-size: 10px; color: #4a4a4a; font-weight: bold; }
a:link {
	text-decoration: none;
	color: 0857ae;
}
a:visited {
	text-decoration: none;
	color: #0857AE;
}
a:hover {
	text-decoration: none;
	color: #4A4A4A;
}
a:active {
	text-decoration: none;
	color: #0857AE;
}
.style10 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style11 {color: #FF0000}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/linkrolloverimages_11.gif','images/linkrolloverimages_12.gif','images/linkrolloverimages_13.gif','images/linkrolloverimages_14.gif','images/linkrolloverimages_15.gif')">
<!-- ImageReady Slices (New Pger.psd) -->
<table width="981" height="357" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
	<tr>
		<td colspan="12">
			<img src="images/logistics_01.gif" width="980" height="22" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="22" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/logistics_02.gif" width="127" height="167" alt=""></td>
		<td colspan="2">
			<img src="images/logistics_03.gif" width="216" height="77" alt=""></td>
		<td colspan="3" rowspan="3">
			<img src="images/logistics_04.gif" width="236" height="167" alt=""></td>
		<td colspan="5" rowspan="2">
			<img src="images/logistics_05.gif" width="376" height="155" alt=""></td>
		<td rowspan="6">
			<img src="images/logistics_06.gif" width="25" height="324" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="77" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="2">
			<img src="images/logistics_07.gif" width="216" height="90" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="78" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="images/logistics_08.gif" width="376" height="12" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="12" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="2">
			<img src="images/logistics_09.gif" width="220" height="99" alt=""></td>
		<td colspan="2" rowspan="2">
			<img src="images/logistics_10.gif" width="259" height="99" alt=""></td>
		<td><a href="index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image40','','images/linkrolloverimages_11.gif',1)"><img src="images/logistics_11.gif" name="Image40" width="66" height="46" border="0"></a></td>
		<td colspan="2"><a href="About_The_Company.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image41','','images/linkrolloverimages_12.gif',1)"><img src="images/logistics_12.gif" name="Image41" width="85" height="46" border="0"></a></td>
		<td><a href="Our_Services.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image42','','images/linkrolloverimages_13.gif',1)"><img src="images/logistics_13.gif" name="Image42" width="88" height="46" border="0"></a></td>
		<td><a href="Track_Package_online.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image43','','images/linkrolloverimages_14.gif',1)"><img src="images/logistics_14.gif" name="Image43" width="100" height="46" border="0"></a></td>
		<td><a href="Contact_Us.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image44','','images/linkrolloverimages_15.gif',1)"><img src="images/logistics_15.gif" name="Image44" width="94" height="46" border="0"></a></td>
		<td rowspan="3">
			<img src="images/logistics_16.gif" width="43" height="157" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="46" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<img src="images/logistics_17.gif" width="151" height="111" alt=""></td>
		<td colspan="3" rowspan="2">
			<img src="images/logistics_18.gif" width="282" height="111" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="53" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/logistics_19.gif" width="479" height="58" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="58" alt=""></td>
	</tr>
	<tr>
		<td colspan="12"><table width="100%" border="0">
          
          
          
          <tr>
            <td height="284"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="bottom"><img src="images/trackpackageonline_03.gif" width="150" height="16"></td>
              </tr>
              <tr>
                <td height="263" valign="top">
				
				<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><fieldset><legend><span class="style10">Tracking Information</span></legend>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><form action="<?php echo $loginFormAction; ?>" method="POST" name="tracking" id="tracking">
                <table width="100%" border="0" cellspacing="3" cellpadding="0">
                  <tr>
                    <td width="12%">&nbsp;</td>
                    <td width="24%"><span class="style10">Enter tracking number </span></td>
                    <td width="64%"><label>
                      <input name="tracknumber" type="text" id="tracknumber" size="34">
                    </label></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><label>
                      <input name="trackbtn" type="submit" id="trackbtn" value="Enter">
                    </label></td>
                  </tr>
                </table>
                                          </form>
              </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td align="center"><span class="style11">tracking number you entered is incorrect </span></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
      </fieldset></td>
    </tr>
</table>
				</td>
              </tr>
            </table></td>
          </tr>
          
        </table></td>
		<td>
			<img src="images/spacer.gif" width="1" height="10" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="127" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="93" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="123" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="136" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="66" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="34" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="51" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="88" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="100" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="94" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="43" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="25" height="1" alt=""></td>
		<td></td>
	</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#E0DEDE">
  <tr>
    <td width="7%" height="19">&nbsp;</td>
    <td width="87%">&nbsp;</td>
    <td width="6%">&nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td align="center"><span class="style7">Update Express Courier Services &copy; All rights reserved</span></td>
    <td>&nbsp;</td>
  </tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>