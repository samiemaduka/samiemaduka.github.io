<style type="text/css">
<!--
.style13 {font-family: Arial, "Arial Black", "Times New Roman";
	font-size: 12px;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<form action="view.php" method="post" name="addtrack">
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="3">
    <tr>
      <td width="47%" class="style13">Username</td>
      <td width="53%"><label>
        <input name="user" type="text" id="user" size="25">
      </label></td>
    </tr>
    <tr>
      <td class="style13"><span class="style13">Password :</span></td>
      <td><input name="pass" type="text" id="pass" size="25"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="adminbtn" type="submit" id="adminbtn" onclick="MM_validateForm('user','','R','pass','','R');return document.MM_returnValue" value="Add Administrator">
      </label></td>
    </tr>
  </table>
</form>

<?php
     if(isset($_REQUEST['adminbtn'])){
	 //Include database connection details
     require_once('connection/conn.php');

     $user = $_POST['user'];
	 $pass = $_POST['pass'];

	 
	 
	 $enter = mysql_query("INSERT INTO admin SET 
	 username='$pass',
	 password='$user'");
	 
	 if(!$enter){
	 die("query error" . mysql_error());
	 }else if($enter){
	 echo("<center> New Administrator Added successful </center>");
	 }
	 
     }
?>