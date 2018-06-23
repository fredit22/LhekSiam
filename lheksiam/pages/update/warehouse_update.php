<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/.../loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

</head>
<body bgcolor="#FFFFFF" text="#8B0000" link="#8B0000" vlink="#8B0000" alink="#8B0000">
<?php
error_reporting(~E_NOTICE);
include("connect_db.php");

	$warehouse_id = $_REQUEST["warehouseidtoupdate"];
	$warehouse_name= $_REQUEST["warehousename"];
	$strat_date = $_REQUEST["stratdatewarehouse"];
	$end_date = $_REQUEST["enddatewarehouse"];
	$warehouse_zone = $_REQUEST["zonewarehouse"];
	$warehouse_size= $_REQUEST["sizewarehouse"];

if ($warehouse_id) {

		$sql = "update `warehouse` set WAREHOUSE_ID = \"".$warehouse_id."\" , WAREHOUSE_NAME  = \"".$warehouse_name."\" , 
		EFFECTIVE_START_DATE  = \"".$strat_date."\" ,
		EFFECTIVE_END_DATE  = \"".$end_date."\" , 
		ZONE  = \"".$warehouse_zone."\" , 
		MAXIMUMN_SIZE  = \"".$warehouse_size."\" WHERE WAREHOUSE_ID = \"".$warehouse_id."\" " ;

	          $result = mysql_query($sql) or die(mysql_error());
      }    


 if ($result) {
	echo "<script>alert('UPDATE COMPLETE');window.location='../warehouse.php';</script>";
}else{
	echo "<script>alert('DELETE FALSE');window.location=history.back();</script>";
}

	


?>
</body>
</html>
