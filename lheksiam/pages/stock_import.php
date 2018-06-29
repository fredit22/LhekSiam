<!DOCTYPE html>
<html>
<?php include("../connect_db.php"); ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Recive Order | Leksiam</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />




  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>

</head>

<body class="theme-red">


    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" >Welcome To | Leksiam</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
 
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
          
            <!-- #User Info -->
            <!-- Menu -->
      <?php 
        $resultpage = "import";
        include("../menu_01.php"); 

      ?>
            <!-- #Menu -->

        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Body Copy -->
        <div class="header">
            <h2>
                RECIVE ORDER

            </h2> <br>
        </div>
        <form method="post" action="../pages/update/stock_import_accept.php">
        <table>
            <tr>
                <td><label>Receive Date :</label><br></td>
                <td width="10"><input type="date" class="form-control date" name="recdate" id="recdate"  /><br></td>

                <td colspan="3" align="right" width="20%"><label> Receive No :&nbsp;&nbsp;</label></td>
                <td><input type="text" name="invno" id="invno" class="form-control" /><br></td>
                
            </tr>
           <!--  ======================================= -->
            <tr>
                <td><label>Supplier Name :&nbsp;&nbsp;</label></td>
                <td><select class="form-control" id="customer" name="customer" style=" width: 300px;">
                        <option value="0">--- Select Supplier ---</option>
                        <?php
                            $sqlcustomer="SELECT * FROM `supplier`";
                            $i=0;
                            $record = mysql_query($sqlcustomer);
                            while($data = mysql_fetch_assoc($record)){

                        ?>
                        <option value="<?php echo $data['SUPPLIER_ID']; ?>"><?php echo $data['SUPPLIER_NAME']; ?></option>
                                        <?php } ?>
                    </select>
                </td>
                <td><button onclick="document.getElementById('id01').style.display='block'" class="btn btn-warning">Add Supplier</button></td>
                <td align="right" colspan="2"><label><br>Remark :&nbsp;&nbsp;</label></td>
                <td>
                    <input class="form-control" name="Remark" id="Remark">
                    <!-- <input type="text" name="cusName" id="cusName" class="form-control"/> --></td>

                <div id="id01" class="w3-modal">
                                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:500px">
                                <div class="w3-center"><br>
                                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
                                    <img src="../images/addcustomer.png" alt="Avatar" style="width:20%" class="w3-circle w3-margin-top">
                                </div>


                                <div class="w3-container">
                                    <div class="w3-section">
                                      <label><b>Supplier ID</b></label>
                                      <input class="w3-input w3-border" type="text" placeholder="Enter ID" name="ID" id="ID" value="" required>
                                      <label><b>Supplier Name</b></label>
                                      <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Name" name="name" id="name" value="" required>
                                                        <label><b>Start Date</b></label>
                                      <input class="w3-input w3-border" type="date" placeholder="Effective Start Date" name="startdate" id="startdate" value="" required> <br>
                                                        <label><b>End Date</b></label>
                                      <input class="w3-input w3-border" type="date" placeholder="Effective End Date" name="enddate" id="enddate" value="" required> <br>
                                      <label><b>Address 1</b></label>
                                      <input class="w3-input w3-border" type="text" placeholder="Enter Address 1" name="add1" id="add1" value="" required>
                                      <label><b>Address 2</b></label>
                                      <input class="w3-input w3-border" type="text" placeholder="Enter Address 2" name="add2" id="add2" value="" required> <br>
                                      <center><input type="submit" onclick="document.getElementById('id01').style.display='none'" class="btn btn-sm btn-success"  value="  SAVE  " >


                                      </div>

                                </div>
                            </div>
                            </div>
                <td></td>
            </tr>
            <!--  ======================================= -->
            <tr>
                <td> <label ><br><br>Carrier :&nbsp;&nbsp;</label></td>
                <td><br><input type="text" class="form-control" name="liplate" id="liplate"></td>
                <td width="20%"></td>
                <td align="right" colspan="2"><!-- <label><br><br>Carrier :&nbsp;&nbsp;</label> --></td>
                <td><br><!-- <input type="text" class="form-control" name="pckno" id="pckno"> --></td> 
            </tr>
        </table>

            <!-- #END# Body Copy -->
        </div><br>
                   <table class="table table-bordered" >
                      <div class="row">
                        <tr class="success" >
                            <div class="col-sm-3">
                                <th class="tabel-head">Product Code</th>
                            </div>
                 <!--            <div class="col-sm-3">
                                <th class="tabel-head">Product Name</th>
                            </div> -->
                            <div class="col-sm-1">
                                <th class="tabel-head">Quantity</th>
                            </div>
                            <div class="col-sm-1">
                                <th class="tabel-head">Weight</th>
                            </div>
                            <div class="col-sm-1">
                                <th class="tabel-head">Warehouse</th>
                            </div>
                            <div class="col-sm-2">
                                <th class="tabel-head">Location</th>
                            </div>
                            <div class="col-sm-2">
                                <th class="tabel-head">Status</th>
                            </div>
                            <!-- <div class="col-sm-1">
                                <th class="tabel-head">Remark</th>
                            </div> -->
                        </tr>
                    </div>

                  <?php for ($j=1; $j <= 10; $j++) { ?>

                    <tr>
                        <div class="col-sm-3">
                            <td> 
<!-- class="selectpicker" data-live-search="true" -->
<!-- <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="product11" title="Select Product Code" onchange="Prdsubmit1(this.value,<?php echo $j ?>)"><span class="filter-option pull-left">Select Product Code</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button> -->

                                <select class="selectpicker" data-live-search="true" id="product<?php echo $j ?>" name="product<?php echo $j ?>" onchange="Prdsubmit1(this.value,<?php echo $j ?>)">
                                <option value="0">Select Product Code</option>
                                <?php
                                $sqlproduct="SELECT * FROM `product`";
                                $i=0;
                                $record = mysql_query($sqlproduct);
                                while($data = mysql_fetch_assoc($record)){

                                    ?>
                                    <option value="<?php echo $data['PRODUCT_ID']; ?>"><?php echo  $data['PRODUCT_ID'].' - '.$data['PRODUCT_NAME']; ?></option>
                                    <?php } ?>
                                </select>
                                <!-- <input name="product<?php echo $j ?>" id="product<?php echo $j ?>"> -->
                            </td>
                        </div>
                        <input id="proid<?php echo $j ?>" name="proid<?php echo $j ?>" value="" hidden>

<!--                         <div class="col-sm-3">
 
                            <td>
 
                                <input class="form-control" id="prd_name<?php echo $j ?>" name="prd_name<?php echo $j ?>" value="" disabled >
                                <input id="proid<?php echo $j ?>" name="proid<?php echo $j ?>" value="" hidden>
                                
                            </td>
                        </div> -->



                        <div class="col-sm-1">
                            <td><input class="form-control" name="Quantity<?php echo $j ?>" id="Quantity<?php echo $j ?>" ></td>
                        </div>

                        <div class="col-sm-1">
                            <td>
                                <input class="form-control" name="Weight2<?php echo $j ?>" id="Weight2<?php echo $j ?>" ="disabled" >
                                <input name="Weight<?php echo $j ?>" id="Weight<?php echo $j ?>" hidden>
                                <input name="Weight1<?php echo $j ?>" id="Weight1<?php echo $j ?>" hidden>
                            </td>
                        </div>

                        <div class="col-sm-1">
                        <td>
                            <select class="form-control" id="warehouse<?php echo $j ?>" name="warehouse<?php echo $j ?>" >
                            <option value="0">-Select Warehouse-</option>
                            <?php
                            $sqlwarehouse="SELECT * FROM `warehouse`";
                            $i=0;
                            $record = mysql_query($sqlwarehouse);
                            while($data = mysql_fetch_assoc($record)){

                                ?>
                                <option value="<?php echo $data['WAREHOUSE_ID']; ?>"><?php echo $data['WAREHOUSE_NAME']; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        </div>

                        <div class="col-sm-2">
                            <td><input class="form-control" name="zone<?php echo $j ?>" id="zone<?php echo $j ?>" ></td>
                        </div>

                        <div class="col-sm-1">
                            <td>
                            <select class="form-control" id="status<?php echo $j ?>" name="status<?php echo $j ?>" >
                            <option value="0">-Select Status-</option>
                            <option value="Stock">Stock</option>
                            <option value="Scrap">Scrap</option>
                            <option value="รอรับผลิต">รอรับผลิต</option>
                            <option value="งานติดจอง">งานติดจอง</option>
                            <option value="สินค้ารับคืน">สินค้ารับคืน</option>
                            </select>
                            </td>
                        </div>
                        <!-- <div class="col-sm-1">
                            <td>
                                <input class="form-control" name="Remark<?php echo $j ?>" id="Remark<?php echo $j ?>">
                            </td>
                        </div> -->
                    </tr>
                   <?php } ?>


          </table>
    <br><center>
    <button class="btn btn-sm btn-primary" onClick="Bsubmit(this.form);" >
        Edit
    </button>
    <button class="btn btn-sm btn-success" type="submit" onClick="Asubmit(this.form);">
        Confirm
    </button>

</center><br>
</form>
    </section>


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
        <!-- Page Loader -->



    <script type="text/javascript">

    function Bsubmit(frm)
    {
    frm.action="../pages/stock_inquiry.php";
    frm.submit();
    }

    function Asubmit(frm)
    {
    frm.action="../pages/update/stock_import_accept.php";
    frm.submit();
    }

    </script>

    <script >

    $(function () {
    $('form').bind('submit', function () {
    $.ajax({
      type: 'post',
      url: '../pages/update/AddSupplier_accept.php',
      data: $('form').serialize(),
      success: function(data) {

          var CUSTOMER_ID = $("#ID").val();
          var CUSTOMER_NAME = $("#name").val();
      $('#customer').append('<option value="'+CUSTOMER_ID+'" selected="selected">'+CUSTOMER_NAME+'</option>');

      //alert('<option value="'+CUSTOMER_ID+'" selected="selected">'+CUSTOMER_NAME+'</option>');
      //alert(CUSTOMER_NAME);
      }

    });
    return false;

    });

    });

    </script>

    <script>
        
        $('#Quantity1').change(function(){

            anw1 = $('#Quantity1').val() * $('#Weight11').val() ;
            $('#Weight1').val(anw1);
            $('#Weight21').val(anw1);
        });
        
        $('#Quantity2').change(function(){

            anw2 = $('#Quantity2').val() * $('#Weight12').val() ;
            $('#Weight2').val(anw2);
            $('#Weight22').val(anw2);
        });

        $('#Quantity3').change(function(){

            anw3 = $('#Quantity3').val() * $('#Weight13').val() ;
            $('#Weight3').val(anw3);
            $('#Weight23').val(anw3);
        });
        
        $('#Quantity4').change(function(){

            anw4 = $('#Quantity4').val() * $('#Weight14').val() ;
            $('#Weight4').val(anw4);
            $('#Weight24').val(anw4);
        });

        $('#Quantity5').change(function(){

            anw5 = $('#Quantity5').val() * $('#Weight15').val() ;
            $('#Weight5').val(anw5);
            $('#Weight25').val(anw5);
        });
        
        $('#Quantity6').change(function(){

            anw6 = $('#Quantity6').val() * $('#Weight16').val() ;
            $('#Weight6').val(anw6);
            $('#Weight26').val(anw6);
        });

        $('#Quantity7').change(function(){

            anw7 = $('#Quantity7').val() * $('#Weight17').val() ;
            $('#Weight7').val(anw7);
            $('#Weight27').val(anw7);
        });
        
        $('#Quantity8').change(function(){

            anw8 = $('#Quantity8').val() * $('#Weight18').val() ;
            $('#Weight8').val(anw8);
            $('#Weight28').val(anw8);
        });

        $('#Quantity9').change(function(){

            anw9 = $('#Quantity9').val() * $('#Weight19').val() ;
            $('#Weight9').val(anw9);
            $('#Weight29').val(anw9);
        });
        
        $('#Quantity10').change(function(){

            anw10 = $('#Quantity10').val() * $('#Weight110').val() ;
            $('#Weight10').val(anw10);
            $('#Weight210').val(anw10);
        });


        function Prdsubmit1(val,idbox) {

            $.ajax({
                type: "post",
                url: "getdata.php",
                data: {prdid:val,id:'Fweight'},
                success: function(data) {

                    if (idbox == '1') {

                        $('#Weight1').val(" ");
                        $('#Quantity1').val(" ");
                        $('#Weight11').val(data);
                    }
                    if (idbox == '2') {

                        $('#Weight2').val(" ");
                        $('#Quantity2').val(" ");
                        $('#Weight12').val(data);
                    }
                    if (idbox == '3') {

                        $('#Weight3').val(" ");
                        $('#Quantity3').val(" ");
                        $('#Weight13').val(data);
                    }
                    if (idbox == '4') {

                        $('#Weight4').val(" ");
                        $('#Quantity4').val(" ");
                        $('#Weight14').val(data);
                    }
                    if (idbox == '5') {

                        $('#Weight5').val(" ");
                        $('#Quantity5').val(" ");
                        $('#Weight15').val(data);
                    }
                    if (idbox == '6') {

                        $('#Weight6').val(" ");
                        $('#Quantity6').val(" ");
                        $('#Weight16').val(data);
                    }
                    if (idbox == '7') {

                        $('#Weight7').val(" ");
                        $('#Quantity7').val(" ");
                        $('#Weight17').val(data);
                    }
                    if (idbox == '8') {

                        $('#Weight8').val(" ");
                        $('#Quantity8').val(" ");
                        $('#Weight18').val(data);
                    }
                    if (idbox == '9') {

                        $('#Weight9').val(" ");
                        $('#Quantity9').val(" ");
                        $('#Weight19').val(data);
                    }
                    if (idbox == '10') {

                        $('#Weight10').val(" ");
                        $('#Quantity10').val(" ");
                        $('#Weight110').val(data);
                    }

                }
             });


            $.ajax({
                type: "post",
                url: "getdata.php",
                data: {prdid:val,id:'1'},
                success: function(data) {

                    if (idbox == '1') {

                        // <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="product11" title="Select Product Code"><span class="filter-option pull-left">Select Product Code</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>
                        //$('#product1').val(data);
                        // $('.prd_name1').append('<button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" data-id="product11" title="Select Product Code"><span class="filter-option pull-left">'+data+'</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button>');
                        $('#proid1').val(val);
                        $('#prd_name1').val(data);
                        //$('#prd_name1').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '2') {

                        $('#proid2').val(val);
                        $('#prd_name2').val(data);
                        //$('#prd_name2').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '3') {

                        $('#proid3').val(val);
                        $('#prd_name3').val(data);
                        //$('#prd_name3').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '4') {

                        $('#proid4').val(val);
                        $('#prd_name4').val(data);
                        //$('#prd_name4').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '5') {

                        $('#proid5').val(val);
                        $('#prd_name5').val(data);
                        //$('#prd_name5').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '6') {

                        $('#proid6').val(val);
                        $('#prd_name6').val(data);
                        //$('#prd_name6').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '7') {

                        $('#proid7').val(val);
                        $('#prd_name7').val(data);
                        //$('#prd_name7').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '8') {

                        $('#proid8').val(val);
                        $('#prd_name8').val(data);
                        //$('#prd_name8').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '9') {

                        $('#proid9').val(val);
                        $('#prd_name9').val(data);
                        //$('#prd_name9').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '10') {

                        $('#proid10').val(val);
                        $('#prd_name10').val(data);
                        //$('#prd_name10').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }

                }
             });
          //  console.log(val);

        }

        function Prdsubmit2(val,idbox) {

            $.ajax({
                type: "post",
                url: "getdata.php",
                data: {prdname:val,id:'Fweight'},
                success: function(data) {

                     if (idbox == '1') {

                        $('#Weight1').val(" ");
                        $('#Quantity1').val(" ");
                        $('#Weight11').val(data);
                    }
                    if (idbox == '2') {

                        $('#Weight2').val(" ");
                        $('#Quantity2').val(" ");
                        $('#Weight12').val(data);
                    }
                    if (idbox == '3') {

                        $('#Weight3').val(" ");
                        $('#Quantity3').val(" ");
                        $('#Weight13').val(data);
                    }
                    if (idbox == '4') {

                        $('#Weight4').val(" ");
                        $('#Quantity4').val(" ");
                        $('#Weight14').val(data);
                    }
                    if (idbox == '5') {

                        $('#Weight5').val(" ");
                        $('#Quantity5').val(" ");
                        $('#Weight15').val(data);
                    }
                    if (idbox == '6') {

                        $('#Weight6').val(" ");
                        $('#Quantity6').val(" ");
                        $('#Weight16').val(data);
                    }
                    if (idbox == '7') {

                        $('#Weight7').val(" ");
                        $('#Quantity7').val(" ");
                        $('#Weight17').val(data);
                    }
                    if (idbox == '8') {

                        $('#Weight8').val(" ");
                        $('#Quantity8').val(" ");
                        $('#Weight18').val(data);
                    }
                    if (idbox == '9') {

                        $('#Weight9').val(" ");
                        $('#Quantity9').val(" ");
                        $('#Weight19').val(data);
                    }
                    if (idbox == '10') {

                        $('#Weight10').val(" ");
                        $('#Quantity10').val(" ");
                        $('#Weight110').val(data);
                    }

                }
             });

            $.ajax({
                type: "post",
                url: "getdata.php",
                data: {prdname:val,id:'2'},
                success: function(data) {

                    if (idbox == '1') {

                        //$('#prd_name1').val(data);
                        $('#product1').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '2') {

                        $('#product2').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '3') {

                        $('#product3').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '4') {

                        $('#product4').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '5') {

                        $('#product5').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '6') {

                        $('#product6').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '7') {

                        $('#product7').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '8') {

                        $('#product8').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '9') {

                        $('#product9').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }
                    if (idbox == '10') {

                        $('#product10').append('<option value="'+data+'" selected="selected">'+data+'</option>');
                    }

                }
             });
        }

    </script>

</body>

</html>
