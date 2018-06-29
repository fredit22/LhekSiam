<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/.../loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >

</head>
<body bgcolor="#FFFFFF" text="#8B0000" link="#8B0000" vlink="#8B0000" alink="#8B0000">

<body>
<?php
include("connect_db.php");
$invno=$_REQUEST['invno']; // Receive No
$rec_date=$_REQUEST['recdate']; //Receive Date
$sup_id=$_REQUEST['customer']; //Supplier Name
//$pck_no=$_REQUEST['pckno']; //
$li_plate=$_REQUEST['liplate']; //Carrier
$remark=$_REQUEST['Remark'];
//$cusName=$_REQUEST['cusName'];


// $prd_id=$_REQUEST['product1'];
// $prd_name=$_REQUEST['P_Name1'];
// $Quantity=$_REQUEST['Quantity'];
// $wrhouse=$_REQUEST['warehouse'];
// $weight=$_REQUEST['Weight'];
// $remark=$_REQUEST['Remark'];
// $zone=$_REQUEST['zone'];



if ($invno && $rec_date && $sup_id && $li_plate) {

	if ($_REQUEST['product1'] && $_REQUEST['Quantity1'] && $_REQUEST['warehouse1'] && $_REQUEST['Weight1'] && $_REQUEST['zone1'])
	{
		// $sqlcheck="SELECT * FROM `stock` Where WAREHOUSE_ID = '".$_REQUEST['Weight1']."' AND ZONE = '".$_REQUEST['zone1']."' AND PRODUCT_ID = '".$_REQUEST['product1']."' ";
		// $resqlcheck = mysql_query($sqlcheck);

		$sql = "INSERT INTO stock_import " ;
		$sql = $sql." (RECIVE_NO,RECEIVE_DATE,PRODUCT_ID,SUPPLIER_ID,WAREHOUSE_ID,ZONE,CARRIER,QTY,TOTAL_WEIGHT,STATUS,REMARK) " ;
		$sql = $sql." VALUES " ;
		$sql = $sql." ( \"".$invno."\",\"".$rec_date."\",\"".$_REQUEST['proid1']."\",\"".$sup_id."\",\"".$_REQUEST['warehouse1']."\",\"".$_REQUEST['zone1']."\",\"".$li_plate."\",\"".$_REQUEST['Quantity1']."\",\"".$_REQUEST['Weight1']."\",\"".$_REQUEST['status1']."\",\"".$remark."\") ";
		$result = mysql_query($sql);

		if ($_REQUEST['product2'] && $_REQUEST['Quantity2'] && $_REQUEST['warehouse2'] && $_REQUEST['Weight2'] && $_REQUEST['zone2'])
		{

			$sql = "INSERT INTO stock_import " ;
			$sql = $sql." (RECIVE_NO,RECEIVE_DATE,PRODUCT_ID,SUPPLIER_ID,WAREHOUSE_ID,ZONE,CARRIER,QTY,TOTAL_WEIGHT,STATUS,REMARK) " ;
			$sql = $sql." VALUES " ;
			$sql = $sql." ( \"".$invno."\",\"".$rec_date."\",\"".$_REQUEST['proid2']."\",\"".$sup_id."\",\"".$_REQUEST['warehouse2']."\",\"".$_REQUEST['zone2']."\",\"".$li_plate."\",\"".$_REQUEST['Quantity2']."\",\"".$_REQUEST['Weight2']."\",\"".$_REQUEST['status2']."\",\"".$remark."\") ";
			$result = mysql_query($sql);

			if ($_REQUEST['product3'] && $_REQUEST['Quantity3'] && $_REQUEST['warehouse3'] && $_REQUEST['Weight3'] && $_REQUEST['zone3'])
			{

				$sql = "INSERT INTO stock_import " ;
				$sql = $sql." (RECIVE_NO,RECEIVE_DATE,PRODUCT_ID,SUPPLIER_ID,WAREHOUSE_ID,ZONE,CARRIER,QTY,TOTAL_WEIGHT,STATUS,REMARK) " ;
				$sql = $sql." VALUES " ;
				$sql = $sql." ( \"".$invno."\",\"".$rec_date."\",\"".$_REQUEST['proid3']."\",\"".$sup_id."\",\"".$_REQUEST['warehouse3']."\",\"".$_REQUEST['zone3']."\",\"".$li_plate."\",\"".$_REQUEST['Quantity3']."\",\"".$_REQUEST['Weight3']."\",\"".$_REQUEST['status3']."\",\"".$remark."\") ";
				$result = mysql_query($sql);

				if ($_REQUEST['product4'] && $_REQUEST['Quantity4'] && $_REQUEST['warehouse4'] && $_REQUEST['Weight4'] && $_REQUEST['zone4'])
				{

					$sql = "INSERT INTO stock_import " ;
					$sql = $sql." (RECIVE_NO,RECEIVE_DATE,PRODUCT_ID,SUPPLIER_ID,WAREHOUSE_ID,ZONE,CARRIER,QTY,TOTAL_WEIGHT,STATUS,REMARK) " ;
					$sql = $sql." VALUES " ;
					$sql = $sql." ( \"".$invno."\",\"".$rec_date."\",\"".$_REQUEST['proid4']."\",\"".$sup_id."\",\"".$_REQUEST['warehouse4']."\",\"".$_REQUEST['zone4']."\",\"".$li_plate."\",\"".$_REQUEST['Quantity4']."\",\"".$_REQUEST['Weight4']."\",\"".$_REQUEST['status4']."\",\"".$remark."\") ";
					$result = mysql_query($sql);

					if ($_REQUEST['product5'] && $_REQUEST['Quantity5'] && $_REQUEST['warehouse5'] && $_REQUEST['Weight5'] && $_REQUEST['zone5'])
					{

						$sql = "INSERT INTO stock_import " ;
						$sql = $sql." (RECIVE_NO,RECEIVE_DATE,PRODUCT_ID,SUPPLIER_ID,WAREHOUSE_ID,ZONE,CARRIER,QTY,TOTAL_WEIGHT,STATUS,REMARK) " ;
						$sql = $sql." VALUES " ;
						$sql = $sql." ( \"".$invno."\",\"".$rec_date."\",\"".$_REQUEST['proid5']."\",\"".$sup_id."\",\"".$_REQUEST['warehouse5']."\",\"".$_REQUEST['zone5']."\",\"".$li_plate."\",\"".$_REQUEST['Quantity5']."\",\"".$_REQUEST['Weight5']."\",\"".$_REQUEST['status5']."\",\"".$remark."\") ";
						$result = mysql_query($sql);

						if ($_REQUEST['product6'] && $_REQUEST['Quantity6'] && $_REQUEST['warehouse6'] && $_REQUEST['Weight6'] && $_REQUEST['zone6'])
						{

							$sql = "INSERT INTO stock_import " ;
							$sql = $sql." (RECIVE_NO,RECEIVE_DATE,PRODUCT_ID,SUPPLIER_ID,WAREHOUSE_ID,ZONE,CARRIER,QTY,TOTAL_WEIGHT,STATUS,REMARK) " ;
							$sql = $sql." VALUES " ;
							$sql = $sql." ( \"".$invno."\",\"".$rec_date."\",\"".$_REQUEST['proid6']."\",\"".$sup_id."\",\"".$_REQUEST['warehouse6']."\",\"".$_REQUEST['zone6']."\",\"".$li_plate."\",\"".$_REQUEST['Quantity6']."\",\"".$_REQUEST['Weight6']."\",\"".$_REQUEST['status6']."\",\"".$remark."\") ";
							$result = mysql_query($sql);

							if ($_REQUEST['product7'] && $_REQUEST['Quantity7'] && $_REQUEST['warehouse7'] && $_REQUEST['Weight7'] && $_REQUEST['zone7'])
							{

								$sql = "INSERT INTO stock_import " ;
								$sql = $sql." (RECIVE_NO,RECEIVE_DATE,PRODUCT_ID,SUPPLIER_ID,WAREHOUSE_ID,ZONE,CARRIER,QTY,TOTAL_WEIGHT,STATUS,REMARK) " ;
								$sql = $sql." VALUES " ;
								$sql = $sql." ( \"".$invno."\",\"".$rec_date."\",\"".$_REQUEST['proid7']."\",\"".$sup_id."\",\"".$_REQUEST['warehouse7']."\",\"".$_REQUEST['zone7']."\",\"".$li_plate."\",\"".$_REQUEST['Quantity7']."\",\"".$_REQUEST['Weight7']."\",\"".$_REQUEST['status7']."\",\"".$remark."\") ";
								$result = mysql_query($sql);

								if ($_REQUEST['product8'] && $_REQUEST['Quantity8'] && $_REQUEST['warehouse8'] && $_REQUEST['Weight8'] && $_REQUEST['zone8'])
								{

									$sql = "INSERT INTO stock_import " ;
									$sql = $sql." (RECIVE_NO,RECEIVE_DATE,PRODUCT_ID,SUPPLIER_ID,WAREHOUSE_ID,ZONE,CARRIER,QTY,TOTAL_WEIGHT,STATUS,REMARK) " ;
									$sql = $sql." VALUES " ;
									$sql = $sql." ( \"".$invno."\",\"".$rec_date."\",\"".$_REQUEST['proid8']."\",\"".$sup_id."\",\"".$_REQUEST['warehouse8']."\",\"".$_REQUEST['zone8']."\",\"".$li_plate."\",\"".$_REQUEST['Quantity8']."\",\"".$_REQUEST['Weight8']."\",\"".$_REQUEST['status8']."\",\"".$remark."\") ";
									$result = mysql_query($sql);

									if ($_REQUEST['product9'] && $_REQUEST['Quantity9'] && $_REQUEST['warehouse9'] && $_REQUEST['Weight9'] && $_REQUEST['zone9'])
									{

										$sql = "INSERT INTO stock_import " ;
										$sql = $sql." (RECIVE_NO,RECEIVE_DATE,PRODUCT_ID,SUPPLIER_ID,WAREHOUSE_ID,ZONE,CARRIER,QTY,TOTAL_WEIGHT,STATUS,REMARK) " ;
										$sql = $sql." VALUES " ;
										$sql = $sql." ( \"".$invno."\",\"".$rec_date."\",\"".$_REQUEST['proid9']."\",\"".$sup_id."\",\"".$_REQUEST['warehouse9']."\",\"".$_REQUEST['zone9']."\",\"".$li_plate."\",\"".$_REQUEST['Quantity9']."\",\"".$_REQUEST['Weight9']."\",\"".$_REQUEST['status9']."\",\"".$remark."\") ";
										$result = mysql_query($sql);

										if ($_REQUEST['product10'] && $_REQUEST['Quantity10'] && $_REQUEST['warehouse10'] && $_REQUEST['Weight10'] && $_REQUEST['zone10'])
										{

											$sql = "INSERT INTO stock_import " ;
											$sql = $sql." (RECIVE_NO,RECEIVE_DATE,PRODUCT_ID,SUPPLIER_ID,WAREHOUSE_ID,ZONE,CARRIER,QTY,TOTAL_WEIGHT,STATUS,REMARK) " ;
											$sql = $sql." VALUES " ;
											$sql = $sql." ( \"".$invno."\",\"".$rec_date."\",\"".$_REQUEST['proid10']."\",\"".$sup_id."\",\"".$_REQUEST['warehouse10']."\",\"".$_REQUEST['zone10']."\",\"".$li_plate."\",\"".$_REQUEST['Quantity10']."\",\"".$_REQUEST['Weight10']."\",\"".$_REQUEST['status10']."\",\"".$remark."\") ";
											$result = mysql_query($sql);

										}

									}

								}

							}

						}

					}

				}

			}

		}

	}




	if ($result) 
	{
		echo "<script>alert('IMPORT COMPLETE');window.location='../stock_import.php';</script>";
	}else
	{
		echo "<script>alert('IMPORT FALSE');window.history.back();</script>";
	}
}

//echo "<script>window.location='../stock_import.php';</script>";
//if($result)
//{ echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');window.location='stock_import.php';</script>"; }
//else
//{ echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ');history.back();</script>"; }
?>
</body>
</html>
