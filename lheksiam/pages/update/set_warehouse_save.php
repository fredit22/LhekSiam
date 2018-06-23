<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/.../loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

</head>
<body bgcolor="#dce6f5" text="#8B0000" link="#8B0000" vlink="#8B0000" alink="#8B0000">

<body>

	<?php
include("connect_db.php");  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$warehouse_id = $_REQUEST["warehouseid"];
	$warehouse_name= $_REQUEST["warehousename"];
	$strat_date = $_REQUEST["stratdatewarehouse"];
	$end_date = $_REQUEST["enddatewarehouse"];

	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO warehouse(WAREHOUSE_ID, WAREHOUSE_NAME, EFFECTIVE_START_DATE, EFFECTIVE_END_DATE)
			 VALUES('$warehouse_id', '$warehouse_name', '$strat_date', '$end_date')";
 

$result = mysql_query($sql) or die(mysql_error());
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Record Succesfuly');";
	echo "window.location = 'set_warehouse.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to record again');";
	echo "</script>";
}
?>


</body>
</html>
