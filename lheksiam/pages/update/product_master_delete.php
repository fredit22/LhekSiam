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
$prodId=$_REQUEST['prodId'];

if ($prodId) {
	
	$sqldel = " DELETE FROM `product` WHERE `PRODUCT_ID` = \"".$prodId."\" " ;
	$result = mysql_query($sqldel);

}

if ($result) {
	echo "<script>alert('DELETE COMPLETE');window.location='../product_master.php';</script>";
}else{
	echo "<script>alert('DELETE FALSE');window.location=history.back();</script>";
}



?>
</body>
</html>
