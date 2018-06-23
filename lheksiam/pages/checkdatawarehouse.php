
<?php
session_start();
header("Content-type:text/html; charset=UTF-8");              
header("Cache-Control: no-store, no-cache, must-revalidate");             
header("Cache-Control: post-check=0, pre-check=0", false);   
  
include("../connect_db.php"); 
// check username

$warehouse_id = $_POST["warehouseid"];

$chk = "SELECT * FROM warehouse WHERE WAREHOUSE_ID = '".$warehouse_id."'";
$query = mysql_query($chk);

$result = mysql_fetch_assoc($query);


if(mysql_num_rows($query) != 0){
    echo 0; // กำหนดให้ 0 คือค่าไม่ว่าง หรือมีชื่อนี้อยู่แล้ว
}else{
    echo 1;  // กำหนดให้ 1 คือค่าว่าง ยังไม่มีชื่อนี้
}
?>