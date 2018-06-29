
<?php
  
include("../connect_db.php"); 
// check username

if (!empty($_POST["warehouseID"])) {
	
	$chk = "SELECT WAREHOUSE_ID FROM warehouse WHERE WAREHOUSE_ID = '".$_POST["warehouseID"]."'";
	$query = mysql_query($chk);

	while($data = mysql_fetch_assoc($query)){

		if (!empty($data['WAREHOUSE_ID'])) {
			echo '1' ;
		}else
			echo '0' ;
		
	}


}
