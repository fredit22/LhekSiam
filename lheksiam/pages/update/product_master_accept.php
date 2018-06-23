<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/.../loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

</head>
<body bgcolor="#dce6f5" text="#8B0000" link="#8B0000" vlink="#8B0000" alink="#8B0000">

<body>
<?php
include("connect_db.php");

$prdid=$_REQUEST['id'];
$prdname=$_REQUEST['name'];
$mainunit=$_REQUEST['mainunt'];
$prlunt=$_REQUEST['prlunt'];
$unitweight=$_REQUEST['untweight'];
$grade=$_REQUEST['grade'];
$unitcost=$_REQUEST['untcost'];
$unitqntt=$_REQUEST['untqntt'];
$startdate=$_REQUEST['ef_start_date'];
$enddate=$_REQUEST['ef_end_date'];
$sku=$_REQUEST['sku'];


$chk = "SELECT * FROM product WHERE PRODUCT_ID = '".$prdid."'";
$query = mysql_query($chk);
if($prdid && $prdname && $mainunit && $prlunt && $unitweight && $grade && $unitcost && $unitqntt && $startdate && $enddate && $sku)
{
  $sql = "INSERT INTO product " ;
  $sql = $sql." (PRODUCT_ID,PRODUCT_NAME,EFFECTIVE_START_DATE,EFFECTIVE_END_DATE,UNIT_SIZE,UNIT_WEIGHT,UNIT_PARALLEL,UNIT_QTY,GRADE,COST,SKU) " ;
  $sql = $sql." VALUES " ;
  $sql = $sql." ( \"".$prdid."\",\"".$prdname."\",\"".$startdate."\",\"".$enddate."\",\"".$mainunit."\",\"".$unitweight."\",\"".$prlunt."\",\"".$unitqntt."\",\"".$grade."\",\"".$unitcost."\",\"".$sku."\") ";
  $result = mysql_query($sql);
  //echo " <BR> ".$sql." <BR> " ;
  echo "<script>";
  echo "alert('Sucess !!!');";
  echo "window.location='../product_master.php';";
  echo "</script>";
}else if(mysql_num_rows($query) != 0)
{
  echo "<script>;";
  echo "alert('Already filled out !!!');";
  echo "window.location='../product_master.php';";
  echo "</script>";
}
?>
</body>
</html>
