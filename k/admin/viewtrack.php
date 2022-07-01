<script type="text/JavaScript">

function show_confirm()
      {
      var r=confirm("Are you sure you want to Delete this Number ?");
       if (r==true)
        {
        return true;
          }
       else
       {
        return false;
         }
       }
		
</script>
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
-->
</style><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
	
	<?php
 
 //Include database connection details
require_once('connection/conn.php');



$query=@mysql_query("SELECT id,num FROM tracking");
if(!$query){
die("error performing query" . mysql_error());
}
if (mysql_num_rows($query) <> 0){	
echo("<table border='0' width='500' align='center' bordercolor='#000000' class='mytable'><td> Tracking Number</td><td></td><td></td>");
while($row=mysql_fetch_array($query)) {
						
$id = $row['id'];		
$name = $row['num'];

echo  (" <tr><td colspan='4'></td></tr><tr><td width='400' bgcolor='#EEEEEE'> " . $name . "</td><td width='50' bgcolor='#EEEEEE'> <a href='view.php?edit=$id'>Edit </a></td></td><td width='50' bgcolor='#EEEEEE'><a href='view.php?delete=$id' onClick='show_confirm()'>Delete</a></td></td></tr>" );
}
						
echo("</table>");

}else if (mysql_num_rows($query) == 0){
echo("<center>No Record in the Database</center>");
}
?>
	
	
	
	</td>
  </tr>
  
</table>
<p>&nbsp;</p>
