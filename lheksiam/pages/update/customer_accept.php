<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/.../loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

</head>
<body bgcolor="#dce6f5" text="#8B0000" link="#8B0000" vlink="#8B0000" alink="#8B0000">

<body>
<?php
include("connect_db.php");

$CusName=$_REQUEST['name'];
$Number=$_REQUEST['ID'];
$startdate=$_REQUEST['startdate'];
$enddate=$_REQUEST['enddate'];
$add1=$_REQUEST['add1'];
$add2=$_REQUEST['add2'];

if($_REQUEST['name'] && $_REQUEST['ID'] && $_REQUEST['startdate'] && $_REQUEST['enddate'] && $_REQUEST['add1'] && $_REQUEST['add2']) {
$sql = "INSERT INTO customer " ;
$sql = $sql." (CUSTOMER_ID,CUSTOMER_NAME,EFFECTIVE_START_DATE,EFFECTIVE_END_DATE,ADDRESS_1,ADDRESS_2) " ;
$sql = $sql." VALUES " ;
$sql = $sql." ( \"".$Number."\",\"".$CusName."\",\"".$startdate."\",\"".$enddate."\",\"".$add1."\",\"".$add2."\") ";
echo " <BR> ".$sql." <BR> " ;
}



$result = mysql_query($sql);

// if($result)
// { echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');</script>"; }
// else
// { echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ');history.back();</script>"; }
?>
</body>
</html>
