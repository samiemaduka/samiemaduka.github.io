<?php

 
//Include database connection details


  $id = $_REQUEST['delete'];
  
   require_once('connection/conn.php');
   
   $del=@mysql_query("Delete from tracking where id='$id'");
   if(!$del){
   die("query error" . mysql_error());
   }else if($del){
   echo("<center>deleting successful</center>");
   }




?>