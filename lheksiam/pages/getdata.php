<?php 
include("../connect_db.php"); 

if ($_POST['id'] == '1') {

	 if(!empty($_POST['prdid'])){

		  $q="SELECT PRODUCT_NAME FROM `product` WHERE PRODUCT_ID = '".$_POST['prdid']."'" ;
		  
		  $data=mysql_query($q);
		  while($objResult = mysql_fetch_array($data))
		  {
		  	echo $objResult['PRODUCT_NAME'];
		  }



	 } 
}elseif ($_POST['id'] == 'Fweight') {

	 if(!empty($_POST['prdid'])){

		  $q="SELECT UNIT_WEIGHT FROM `product` WHERE PRODUCT_ID = '".$_POST['prdid']."'" ;
		  
		  $data=mysql_query($q);
		  while($objResult = mysql_fetch_array($data))
		  {
		  	echo $objResult['UNIT_WEIGHT'];
		  }
	 }

	 if (!empty($_POST['prdname'])) {

		  $q="SELECT UNIT_WEIGHT FROM `product` WHERE PRODUCT_NAME = '".$_POST['prdname']."'" ;
		  
		  $data=mysql_query($q);
		  while($objResult = mysql_fetch_array($data))
		  {
		  	echo $objResult['UNIT_WEIGHT'];
		  }
	 }
	
}elseif ($_POST['id'] == '2') {

	 if(!empty($_POST['prdname'])){

		  $q1="SELECT PRODUCT_ID FROM `product` WHERE PRODUCT_NAME = '".$_POST['prdname']."'" ;
		  
		  $data1=mysql_query($q1);
		  while($objResult1 = mysql_fetch_array($data1))
		  {
		  	echo $objResult1['PRODUCT_ID'];
		  }



	 } 
	
}

 ?>