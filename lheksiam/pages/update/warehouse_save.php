  <?php

 
  error_reporting(~E_NOTICE);
include("../connect_db.php");  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม

  $warehouse_id = $_REQUEST["warehouseid"];
  $warehouse_name= $_REQUEST["warehousename"];
  $strat_date = $_REQUEST["stratdatewarehouse"];
  $end_date = $_REQUEST["enddatewarehouse"];
  $warehouse_zone = $_REQUEST["zonewarehouse"];
  $warehouse_size= $_REQUEST["sizewarehouse"];

  //เพิ่มเข้าไปในฐานข้อมูล

$chk = "SELECT * FROM warehouse WHERE WAREHOUSE_ID = '".$warehouse_id."'";
$query = mysql_query($chk);



if(mysql_num_rows($query) != 0)
{
  echo "<script>";
  echo "alert('ID Dup!!!');";
  echo "history.back();";
  echo "</script>";
}

else if  ($warehouse_id && $warehouse_name && $strat_date && $end_date && $warehouse_zone && $warehouse_size){
    
  $sql = "INSERT INTO warehouse " ;
  $sql = $sql." (WAREHOUSE_ID,WAREHOUSE_NAME,EFFECTIVE_START_DATE,EFFECTIVE_END_DATE,ZONE,MAXIMUMN_SIZE) " ;
  $sql = $sql." VALUES " ;
  $sql = $sql." ( \"".$warehouse_id."\",\"".$warehouse_name."\",\"".$strat_date."\",\"".$end_date."\",\"".$warehouse_zone."\",\"".$warehouse_size."\") ";


  $result = mysql_query($sql);

  echo "<script>";
  echo "alert('Save Data Complete!!!');";
  echo "window.location='../warehouse.php';";
  echo "</script>";

}


  ?>