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

	// for ($i=1; $i <= $count ; $i++) { 
	// 	# code...
	// }
	if ($_REQUEST['proid1']) {

		$sql = "update stock_import set PRODUCT_ID = \"".$_REQUEST['proid1']."\" , WAREHOUSE_ID  = \"".$_REQUEST['whouse1']."\" , ZONE  = \"".$_REQUEST['zone1']."\" , QTY  = \"".$_REQUEST['qty1']."\" , TOTAL_WEIGHT  = \"".$_REQUEST['tweight1']."\" , STATUS  = \"".$_REQUEST['sta1']."\" where PRODUCT_ID = \"".$_REQUEST['proid1']."\" AND RECIVE_NO = \"".$invno."\" AND STATUS = \"".$_REQUEST['sta1']."\" " ;
		$result = mysql_query($sql);

	}
	if ($_REQUEST['proid2']) {

		$sql = "update stock_import set PRODUCT_ID = \"".$_REQUEST['proid2']."\" , WAREHOUSE_ID  = \"".$_REQUEST['whouse2']."\" , ZONE  = \"".$_REQUEST['zone2']."\" , QTY  = \"".$_REQUEST['qty2']."\" , TOTAL_WEIGHT  = \"".$_REQUEST['tweight2']."\" , STATUS  = \"".$_REQUEST['sta2']."\" where PRODUCT_ID = \"".$_REQUEST['proid2']."\" AND RECIVE_NO = \"".$invno."\" AND STATUS = \"".$_REQUEST['sta2']."\" " ;
		$result = mysql_query($sql);

	}
	if ($_REQUEST['proid3']) {

		$sql = "update stock_import set PRODUCT_ID = \"".$_REQUEST['proid3']."\" , WAREHOUSE_ID  = \"".$_REQUEST['whouse3']."\" , ZONE  = \"".$_REQUEST['zone3']."\" , QTY  = \"".$_REQUEST['qty3']."\" , TOTAL_WEIGHT  = \"".$_REQUEST['tweight3']."\" , STATUS  = \"".$_REQUEST['sta3']."\" where PRODUCT_ID = \"".$_REQUEST['proid3']."\" AND RECIVE_NO = \"".$invno."\" AND STATUS = \"".$_REQUEST['sta3']."\" " ;
		$result = mysql_query($sql);

	}
	if ($_REQUEST['proid4']) {

		$sql = "update stock_import set PRODUCT_ID = \"".$_REQUEST['proid4']."\" , WAREHOUSE_ID  = \"".$_REQUEST['whouse4']."\" , ZONE  = \"".$_REQUEST['zone4']."\" , QTY  = \"".$_REQUEST['qty4']."\" , TOTAL_WEIGHT  = \"".$_REQUEST['tweight4']."\" , STATUS  = \"".$_REQUEST['sta4']."\" where PRODUCT_ID = \"".$_REQUEST['proid4']."\" AND RECIVE_NO = \"".$invno."\" AND STATUS = \"".$_REQUEST['sta4']."\" " ;
		$result = mysql_query($sql);

	}
	if ($_REQUEST['proid5']) {

		$sql = "update stock_import set PRODUCT_ID = \"".$_REQUEST['proid5']."\" , WAREHOUSE_ID  = \"".$_REQUEST['whouse5']."\" , ZONE  = \"".$_REQUEST['zone5']."\" , QTY  = \"".$_REQUEST['qty5']."\" , TOTAL_WEIGHT  = \"".$_REQUEST['tweight5']."\" , STATUS  = \"".$_REQUEST['sta5']."\" where PRODUCT_ID = \"".$_REQUEST['proid5']."\" AND RECIVE_NO = \"".$invno."\" AND STATUS = \"".$_REQUEST['sta5']."\" " ;
		$result = mysql_query($sql);

	}
	if ($_REQUEST['proid6']) {

		$sql = "update stock_import set PRODUCT_ID = \"".$_REQUEST['proid6']."\" , WAREHOUSE_ID  = \"".$_REQUEST['whouse6']."\" , ZONE  = \"".$_REQUEST['zone6']."\" , QTY  = \"".$_REQUEST['qty6']."\" , TOTAL_WEIGHT  = \"".$_REQUEST['tweight6']."\" , STATUS  = \"".$_REQUEST['sta6']."\" where PRODUCT_ID = \"".$_REQUEST['proid6']."\" AND RECIVE_NO = \"".$invno."\" AND STATUS = \"".$_REQUEST['sta6']."\" " ;
		$result = mysql_query($sql);

	}
	if ($_REQUEST['proid7']) {

		$sql = "update stock_import set PRODUCT_ID = \"".$_REQUEST['proid7']."\" , WAREHOUSE_ID  = \"".$_REQUEST['whouse7']."\" , ZONE  = \"".$_REQUEST['zone7']."\" , QTY  = \"".$_REQUEST['qty7']."\" , TOTAL_WEIGHT  = \"".$_REQUEST['tweight7']."\" , STATUS  = \"".$_REQUEST['sta7']."\" where PRODUCT_ID = \"".$_REQUEST['proid7']."\" AND RECIVE_NO = \"".$invno."\" AND STATUS = \"".$_REQUEST['sta7']."\" " ;
		$result = mysql_query($sql);

	}
	if ($_REQUEST['proid8']) {

		$sql = "update stock_import set PRODUCT_ID = \"".$_REQUEST['proid8']."\" , WAREHOUSE_ID  = \"".$_REQUEST['whouse8']."\" , ZONE  = \"".$_REQUEST['zone8']."\" , QTY  = \"".$_REQUEST['qty8']."\" , TOTAL_WEIGHT  = \"".$_REQUEST['tweight8']."\" , STATUS  = \"".$_REQUEST['sta8']."\" where PRODUCT_ID = \"".$_REQUEST['proid8']."\" AND RECIVE_NO = \"".$invno."\" AND STATUS = \"".$_REQUEST['sta8']."\" " ;
		$result = mysql_query($sql);

	}
	if ($_REQUEST['proid9']) {

		$sql = "update stock_import set PRODUCT_ID = \"".$_REQUEST['proid9']."\" , WAREHOUSE_ID  = \"".$_REQUEST['whouse9']."\" , ZONE  = \"".$_REQUEST['zone9']."\" , QTY  = \"".$_REQUEST['qty9']."\" , TOTAL_WEIGHT  = \"".$_REQUEST['tweight9']."\" , STATUS  = \"".$_REQUEST['sta9']."\" where PRODUCT_ID = \"".$_REQUEST['proid9']."\" AND RECIVE_NO = \"".$invno."\" AND STATUS = \"".$_REQUEST['sta9']."\" " ;
		$result = mysql_query($sql);

	}
	if ($_REQUEST['proid10']) {

		$sql = "update stock_import set PRODUCT_ID = \"".$_REQUEST['proid10']."\" , WAREHOUSE_ID  = \"".$_REQUEST['whouse10']."\" , ZONE  = \"".$_REQUEST['zone10']."\" , QTY  = \"".$_REQUEST['qty10']."\" , TOTAL_WEIGHT  = \"".$_REQUEST['tweight10']."\" , STATUS  = \"".$_REQUEST['sta10']."\" where PRODUCT_ID = \"".$_REQUEST['proid10']."\" AND RECIVE_NO = \"".$invno."\" AND STATUS = \"".$_REQUEST['sta10']."\" " ;
		$result = mysql_query($sql);

	}


}

if ($result) {
	echo "<script>alert('UPDATE COMPLETE');window.location='../stock_import.php';</script>";
}else{
	echo "<script>alert('UPDATE FALSE');window.location=history.back();</script>";
}



?>
</body>
</html>
