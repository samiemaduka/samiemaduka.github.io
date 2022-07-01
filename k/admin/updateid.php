
<?php
if(isset($_REQUEST['updatebtn'])){

     $id = $_POST['id'];
	 $num = $_POST['num'];
	 $shipdate = $_POST['shipdate'];
	 $estdate = $_POST['estdate'];
	 $shiptype = $_POST['shiptype'];
	 $content = $_POST['content'];
	 $recname = $_POST['recname'];
	 $address = $_POST['address'];
	 $country = $_POST['country'];
	 $tele = $_POST['tele'];
	 $status = $_POST['status'];
	 
	 
	 $enter = mysql_query("UPDATE tracking SET 
	 num='$num',
	 ship_date='$shipdate',
	 Estimated_Date='$estdate',
	 Shipment_type='$shiptype',
	 Content ='$content',
	 receiver_name = '$recname',
	 receiver_address = '$address',
	 country ='$country',
	 telephone ='$tele',
	 status ='$status' where id = '$id'");
	 
	 if(!$enter){
	 die("query error" . mysql_error());
	 }else if($enter){
	 echo("<center> Update successful </center>");
	 }
	 
}
?>