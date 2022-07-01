<?PHP
 session_start();
 
 if($_SESSION['USER_NUM']==""){
	 header("location: Track_Package_online.php");
		exit();
	 }
?>
<style type="text/css">
.style10 {font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #006633;
}
.style13 {font-family: Arial, "Arial Black", "Times New Roman";
	font-size: 12px;
}
</style>
<table width="600" border="0" align="center">
  <tr>
    <td><?php
					
					
					
					 $num=$_SESSION['USER_NUM'];
					 
					 
					
					
					   	//Include database connection details
	              require_once('connection/conn.php');
				  $addadmin = mysql_query("select * from tracking where num = '$num'");
				if(!$addadmin){
					echo("error accur in performating the query" . mysql_error());
					}
                     while($row=mysql_fetch_array($addadmin)) {
						
					 $id = $row['id'];
					 $num= $row['num'];
					 $shipdat= $row['ship_date'];
					 $estimate_dat=$row['Estimated_Date'];
					 $ship_type=$row['Shipment_type'];
					 $content=$row['Content'];
					 $receive=$row['receiver_name'];
					 $address=$row['receiver_address'];
					 $country=$row['country'];
					 $phone=$row['telephone'];
					 $status=$row['status']; 
					 
					}
					
?></td>
  </tr>
  <tr>
    <td><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><fieldset>
          <legend><span class="style10">Tracking Information</span></legend>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><table width="400" border="0" align="center" cellpadding="0" cellspacing="3">
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td width="47%"><span class="style13">Tracking Number </span></td>
                  <td width="53%"><?php echo $num;?></td>
                </tr>
                <tr>
                  <td><span class="style13">Ship date :</span></td>
                  <td><?php echo $shipdat;?></td>
                </tr>
                <tr>
                  <td><span class="style13">Estimated Date for Delivery</span></td>
                  <td><?php echo $estimate_dat;?></td>
                </tr>
                <tr>
                  <td><span class="style13">Shipment type</span>:</td>
                  <td><?php echo $ship_type;?></td>
                </tr>
                <tr>
                  <td><span class="style13">Content:</span></td>
                  <td><?php echo $content;?></td>
                </tr>
                <tr>
                  <td><span class="style13">Receiver Name:</span></td>
                  <td><?php echo $receive;?></td>
                </tr>
                <tr>
                  <td valign="top"><span class="style13">Receiver Address:</span></td>
                  <td><?php echo $address;?></td>
                </tr>
                <tr>
                  <td><span class="style13">Country:</span></td>
                  <td><?php echo $country;?></td>
                </tr>
                <tr>
                  <td><span class="style13">Telephone</span></td>
                  <td><?php echo $phone;?></td>
                </tr>
                <tr>
                  <td><span class="style13">Status:</span></td>
                  <td><?php echo $status;?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label></label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
            </tr>
          </table>
        </fieldset></td>
      </tr>
    </table></td>
  </tr>
</table>

