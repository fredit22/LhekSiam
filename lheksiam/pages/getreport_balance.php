<form>
<?php
include("connect_db.php");
$output = '';
$sql = "SELECT * FROM product WHERE PRODUCT_NAME LIKE '%".$_POST["search"]."%' OR PRODUCT_ID LIKE '%".$_POST["search"]."%' ";
//echo " <BR> ".$sql." <BR> " ;
$result = mysql_query($sql);
if (mysql_num_rows($result) > 0)
{
	$output .= '<h4 align="center">Search Result</h4>';
	$output .= '<div class="table-responsive">
								<table class="table table-bordered" >
									<div class="row">
										<tr class="success">
											<th>Product Code</th>
											<th>Product Name</th>
											<th>Start Date</th>
											<th>End Date</th>
											<th>Size</th>
											<th>Weight</th>
											<th>Cost</th>
											<th>SKU</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>';
	while($row = mysql_fetch_array($result))
	{
		$output .='<tr>
			<td>'.$row["PRODUCT_ID"].'</td>
			<td>'.$row["PRODUCT_NAME"].'</td>
			<td>'.$row["EFFECTIVE_START_DATE"].'</td>
			<td>'.$row["EFFECTIVE_END_DATE"].'</td>
			<td>'.$row["UNIT_SIZE"].'</td>
			<td>'.$row["UNIT_WEIGHT"].'</td>
			<td>'.$row["COST"].'</td>
			<td>'.$row["SKU"].'</td>
			<td><a href="../pages/product_master_edit.php?prodId='.$row["PRODUCT_ID"].'"><img src="../images/edit.png" width="25" height="25" /></a></td>
			<td><a href="../pages/update/product_master_delete.php?prodId='.$row["PRODUCT_ID"].'"><img src="../images/delete.png" width="25" height="25" /></a></td>
		</tr>
		';
	}
	echo $output;
}else {
	echo "<script>";
  echo "alert('Data Not Found');";
  echo "</script>";
}
?>
</form>
