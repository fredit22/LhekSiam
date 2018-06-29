<!DOCTYPE html>
<html>
<?php include("../connect_db.php"); ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Product Master | Leksiam</title>

    <style>
      #td1{
            width:100px;
            border:solid 1px red;
          }
 #div-text{
            width:100%;
            width:inherit !important; /* hack firefox , chrome ,safari*/
            overflow:hidden
          }
</style>

    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- DataTable Css -->
    <link href="../assets/css/datatable/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- search-bar Css -->
    <link href="../css/search_bar.css" rel="stylesheet" />

    <!-- fas fa-cog Css -->
    <!--<link rel="stylesheet" href="..css/fa-solid.css" charset="utf-8">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- fontawesome Css -->
    <link rel="stylesheet" href="../css/fontawesome.css" charset="utf-8">

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />
</head>
<body>
	<form method="post" action="inventory_detail.php">
	<?php
	include("connect_db.php");
	$output = '';
	$sql = "SELECT stock_import.RECIVE_NO, stock_import.PRODUCT_ID, stock_import.QTY,stock_import.TOTAL_WEIGHT, supplier.SUPPLIER_NAME, stock_import.REMARK , product.PRODUCT_NAME , warehouse.WAREHOUSE_NAME , stock_import.STATUS
        FROM stock_import, supplier, product, warehouse
        WHERE supplier.SUPPLIER_ID = stock_import.SUPPLIER_ID
        AND product.PRODUCT_ID = stock_import.PRODUCT_ID
        AND warehouse.WAREHOUSE_ID = stock_import.WAREHOUSE_ID
        AND stock_import.RECIVE_NO = '".$_POST['search']."'";
	//  $sql = $sql."FROM ((stock_import s INNER JOIN product p ON s.PRODUCT_ID = p.PRODUCT_ID)INNER JOIN warehouse w ON s.WAREHOUSE_ID = w.WAREHOUSE_ID)";
	// $sql = $sql."WHERE s.RECIVE_NO LIKE '%".$_POST["search"]."%' OR p.PRODUCT_NAME LIKE '%".$_POST["search"]."%' ";
	// $sql = $sql."ORDER BY s.RECIVE_NO";
	//echo " <BR> ".$sql." <BR> " ;
	$result = mysql_query($sql);
	if (mysql_num_rows($result) > 0)
	{
		$output .= '<h4 align="center">Search Result</h4>';
		$output .= '<div class="table-responsive">
									<table class="table table-bordered" >
										<div class="row">
											<tr class="primary">
												<th></th>
												<th>Reccipt</th>
												<th>Product Code</th>
												<th>Product Name</th>
												<th>Quantity</th>
												<th>Weight</th>
												<th>Warehouse</th>
												<th>Status</th>
												<th>Customer Name</th>
												<th>Remark</th>
											</tr>';
		while($row = mysql_fetch_array($result))
		{
			$output .='<tr>
				<td>
					<div>
						<input type="checkbox" name="chkid[]" id="chkid[]" value="1">
						<label for="chkid[]"> </label>
					</div>
				</td>
				<td>'.$row["RECIVE_NO"].'</td>
				<td>'.$row["PRODUCT_ID"].'</td>
				<td>'.$row["PRODUCT_NAME"].'</td>
				<td>'.$row["QTY"].'</td>
				<td>'.$row["TOTAL_WEIGHT"].'</td>
				<td>'.$row["WAREHOUSE_NAME"].'</td>
				<td>'.$row["STATUS"].'</td>
				<td>'.$row["SUPPLIER_NAME"].'</td>
				<td>'.$row["REMARK"].'</td>
			</tr><br><br>
			';
		}
		echo $output;
		echo $row['RECEIVE_DATE'];
	}else {
		echo "<script>";
	 // echo "alert('Data Not Found');";
	  echo "</script>";
	}
	?>
	</form>
	<!-- Jquery Core Js -->
	<script src="../plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core Js -->
	<script src="../plugins/bootstrap/js/bootstrap.js"></script>

	<!-- Select Plugin Js -->
<!--     <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script> -->

	<!-- Slimscroll Plugin Js -->
	<script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="../plugins/node-waves/waves.js"></script>

	<!-- Custom Js -->
	<script src="../js/admin.js"></script>

	<!-- Demo Js -->
	<script src="../js/demo.js"></script>

	<!-- DataTable Js -->
	<script src="../assets/js/datatable/dataTables.bootstrap.js"></script>

	<!-- Js DataTable Js -->
	<script src="../assets/js/datatable/jquery.dataTables.js"></script>
</body>
</html>
