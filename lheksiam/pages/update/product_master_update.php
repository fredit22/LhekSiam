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
$prdId=$_REQUEST['prdId1'];
$prdName=$_REQUEST['prdName'];
$mainunt=$_REQUEST['mainunt'];
$prlunt=$_REQUEST['prlunt'];
$untweight=$_REQUEST['untweight'];
$grade=$_REQUEST['grade'];
$untcost=$_REQUEST['untcost'];
$untqntt=$_REQUEST['untqntt'];
$sku=$_REQUEST['sku'];
$ef_start_date=$_REQUEST['ef_start_date'];
$ef_end_date=$_REQUEST['ef_end_date'];


if ($prdId) {

		$sql = "update `product` set PRODUCT_ID = \"".$prdId."\" , PRODUCT_NAME  = \"".$prdName."\" , UNIT_SIZE  = \"".$mainunt."\" ,
		UNIT_PARALLEL  = \"".$prlunt."\" , UNIT_WEIGHT  = \"".$untweight."\" , GRADE  = \"".$grade."\",
		COST  = \"".$untcost."\" , UNIT_QTY  = \"".$untqntt."\" , SKU  = \"".$sku."\",
		EFFECTIVE_START_DATE  = \"".$ef_start_date."\" , EFFECTIVE_END_DATE  = \"".$ef_end_date."\" 
		WHERE PRODUCT_ID = \"".$prdId."\" " ;
		$result = mysql_query($sql);
}

if ($result) {
	echo "<script>alert('UPDATE COMPLETE');window.location='../product_master.php';</script>";
}else{
	echo "<script>alert('DELETE FALSE');window.location=history.back();</script>";
}



?>
</body>
</html>
