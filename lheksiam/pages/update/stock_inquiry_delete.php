<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/.../loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

</head>
<body bgcolor="#FFFFFF" text="#8B0000" link="#8B0000" vlink="#8B0000" alink="#8B0000">

<body>
<?php
error_reporting(~E_NOTICE);
include("connect_db.php");
$invno=$_REQUEST['rec'];
$count=$_REQUEST['count'];

//$sql = "update customer
//set cusfName = "." \"".$cusfName."\" , cusAddress = "." \"".$cusAddress."\" , cusIDcard = "." \"".$cusIDcard."\" , 
//cusTel = "." \"".$cusTel."\" where cusID = "." \"".$cusID."\" ;"  ;


if ($invno) {


	
	$sqldel = " DELETE FROM `stock_import` WHERE `RECIVE_NO` = \"".$invno."\" " ;
	$result = mysql_query($sqldel);

}

if ($result) {
	echo "<script>alert('DELETE COMPLETE');window.location='../stock_import.php';</script>";
}else{
	echo "<script>alert('DELETE FALSE');window.location=history.back();</script>";
}



?>
</body>
</html>
