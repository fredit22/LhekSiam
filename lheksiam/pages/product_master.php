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
                <a class="navbar-brand" href="widgets/../../index.html">Welcome To | Leksiam</a>
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
      <?php 
        $resultpage = "product_master";
        include("../menu_01.php"); 

      ?>
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
                PRODUCT MASTER

            </h2> <br>
        </div>
        <!--<div class="w3-center">
          <img src="../images/icons8-box-128.png" alt="Avatar" style="width:15%">
        </div><br><br>-->
        <form method="post" action="../pages/update/product_master_accept.php">
        <center><table>
          <div class="search-container">
            <tr>
                <td><label>PRODUCT CODE :</label><br></td>
                <td><input type="text" name="id" id="id" class="form-control" style=" width : 200px" maxlength="20" /></td>
                <td></td>
                <td colspan="4" align="right"><label> PRODUCT NAME :&nbsp;&nbsp;</label></td>
                <td><input type="text" class="form-control date" name="name" id="name" style=" width : 200px"/></td>

            </tr>
			</div>
           <!--  ======================================= -->
            <tr>
                <td><label><br>MAIN UNIT :&nbsp;&nbsp;</label></td>
                <td><select class="form-control" id="mainunt" name="mainunt" style=" width: 200px;">
                        <option value="0">--- Select Weight ---</option>
                        <option value="กก.">กก.</option>
                        <option value="แผ่น">แผ่น</option>
                        <option value="วง">วง</option>
						<option value="มัด">มัด</option>
                        <option value="เส้น">เส้น</option>
                    </select>
                </td>

                <td></td>

                <td colspan="4" align="right"><label><br>PARALLEL UNIT :&nbsp;&nbsp;</label></td>
                <td><select class="form-control" id="prlunt" name="prlunt" style=" width: 200px;">
                        <option value="0">--- Select Size ---</option>
                        <option value="กก.">กก.</option>
                        <option value="แผ่น">แผ่น</option>
                        <option value="ม้วน">ม้วน</option>
						<option value="วง">วง</option>
                        <option value="เส้น">เส้น</option>
                    </select>
                </td>
            </tr>
            <!--  ======================================= -->
            <tr>
                <td><label><br>UNIT WEIGHT :</label><br></td>
                <td><br><input type="text" name="untweight" id="untweight" class="form-control" style=" width : 200px"/><br></td>

                <td></td>

                <td colspan="4" align="right"><label><br>GRADE :&nbsp;&nbsp;</label></td>
                <td><select class="form-control" id="grade" name="grade" style=" width: 200px;">
                        <option value="0">--- Select Grade ---</option>
                        <option value="AA">AA</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                </td>
            </tr>
           <!--  ======================================= -->
           <tr>
               <td><label>UNIT COST :</label><br></td>
               <td><input type="number" name="untcost" id="untcost" class="form-control" style=" width : 200px"/><br></td>

               <td></td>

               <td colspan="4" align="right"><label>&nbsp;&nbsp;UNIT QUANTITY :&nbsp;&nbsp;</label><br></td>
               <td><input type="number" name="untqntt" id="untqntt" class="form-control" style=" width : 200px"/><br></td>
           </tr>
          <!--  ======================================= -->

		  <!--  ======================================= -->
           <tr>
               <td><label>SKU :</label><br></td>
               <td><input type="text" name="sku" id="sku" class="form-control" style=" width : 200px"/><br></td>

               <td></td>
           </tr>
          <!--  ======================================= -->

          <tr>
              <td><label>EFFECTIVE START DATE :&nbsp;&nbsp;</label><br></td>
              <td><input type="date" name="ef_start_date" id="ef_start_date" class="form-control" style=" width : 200px"/><br></td>

              <td></td>

              <td colspan="4" align="right"><label>&nbsp;&nbsp;EFFECTIVE END DATE :&nbsp;&nbsp;</label><br></td>
              <td><input type="date" name="ef_end_date" id="ef_end_date" class="form-control" style=" width : 200px"/><br></td>
          </tr>
         <!--  ======================================= -->
          </table>
    <br><center>
    <!--<button class="btn btn-sm btn-primary" onclick='location.replace("stock_inquiry.php")' >
        Edit
    </button>-->
    <button class="btn btn-sm btn-success" type="submit" onClick="Asubmit(this.form);">
        Confirm
    </button><br><br>
    </form>

    <div class="container">
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon">Search</span>
          <input type="text" name="search_txt" id="search_txt" placeholder="  Search  By  Product Code  |  Product Name . . .  " class="form-control"/>
        </div>
      </div>
      <br>
      <div id="result"></div>
    </div>


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

    function Asubmit(frm)
    {
    frm.action="../pages/update/product_master_accept.php";
    frm.submit();
    }

    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('#search_txt').keyup(function(){
          var txt = $(this).val();
          if (txt !='') {
            $.ajax({
              url:"getproduct.php",
              method:"post",
              data:{search:txt},
              dataType:"text",
              success:function(data)
              {
                $('#result').html(data);
              }
            });
          }else {
            $('#result').html('');
          }
        });
      });

    </script>

</body>

</html>
