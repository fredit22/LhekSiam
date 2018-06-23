
<?php

include("../connect_db.php"); 





$chk = "SELECT * FROM warehouse WHERE WAREHOUSE_ID LIKE '".$_POST["warehouseid"];."'";
$query = mysql_query($chk);


if(mysql_num_rows($query) >= 1)
{
   echo "Not";
}
else{
   echo "OK";
}


?>