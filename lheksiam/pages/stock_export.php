<!DOCTYPE html>
<html>
<?php include("../connect_db.php"); 
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Set Customer | Leksiam</title>

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
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
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
            <div class="user-info">
                <div class="image">
                    <img src="../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                        <a href="../index.php">
                            <i class="large material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                    <li class="active">   
                        <a href="stock_import.php">
                            <i class="material-icons">text_fields</i>
                            <span>Stock Import</span>
                        </a>
                    </li>
                    <li>
                        <a href="typography.html">
                            <i class="material-icons">text_fields</i>
                            <span>Stock Export</span>
                        </a>
                    </li>
                    <li>
                        <a href="typography.html">
                            <i class="material-icons">text_fields</i>
                            <span>Set Product Master</span>
                        </a>
                    </li>
                    </li>
                    <li>
                        <a href="typography.html">
                            <i class="material-icons">text_fields</i>
                            <span>Set Customer</span>
                        </a>
                    </li>
                    <li>
                        <a href="set_warehouse.php">
                            <i class="material-icons">text_fields</i>
                            <span>Set Warehouse</span>
                        </a>
                    </li>
                    <li>
                        <a href="typography.html">
                            <i class="material-icons">text_fields</i>
                            <span>Report Balance</span>
                        </a>
                    </li>

                </ul>
            </div>
            
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 - 2018 <a href="javascript:void(0);">Leksiam</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.1
                </div>
            </div>
            <!-- #Footer -->
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
                STOCK EXPORT

            </h2> <br>
        </div>
        <form method="post" action="../pages/update/stock_import_accept.php">




        <table>
            <tr>
                
                <td><label>Shipping Day :</label><br></td>
                <td><input type="text" name="invno" id="invno" class="form-control"/><br></td>


            </tr>

            <tr>
                <td><label> Shipping Order :&nbsp;&nbsp;</label><br></td>
                <td><input type="text" name="invno" id="invno" class="form-control"/><br></td>
                <td colspan="2" align="right"><label> Customer Name :&nbsp;&nbsp;</label><br></td>
                <td><input type="text" name="invno" id="invno" class="form-control"/><br></td>
            </tr>

           <tr>
                <td><label> Search Order ID:&nbsp;&nbsp;</label><br></td>
                <td><input type="text" name="invno" id="invno" class="form-control" style="width: 200px" /><br></td>
                <td><button type="button" class="btn btn-link"><span class="glyphicon glyphicon-search"></span></button>
                </td>

                </td>
                

                <td><label> Search Order Name:&nbsp;&nbsp;</label><br></td>
                <td><input type="text" name="invno" id="invno" class="form-control" style="width: 250px" /><br></td>
                <td><button type="button" class="btn btn-link"><span class="glyphicon glyphicon-search"></span></button>
                </td>
           </tr>

        </table>

            <!-- #END# Body Copy -->
        </div><br>

         <table class="table table-bordered" >
                      <div class="row">
                        <tr class="success" >
                            
                            <div class="col-sm-1">
                                <th class="tabel-head">Req No</th>
                            </div>
                            <div class="col-sm-4" >
                                <th class="tabel-head" style="text-align: center;">Product Code</th>
                            </div>
                            <div class="col-sm-1">
                                <th class="tabel-head">Product Name</th>
                            </div>
                            <div class="col-sm-1">
                                <th class="tabel-head" style="text-align: center;">Quantity</th>
                            </div>
                            <div class="col-sm-1">
                                <th class="tabel-head" style="text-align: center;">Weight</th>
                            </div>
                            <div class="col-sm-2">
                                <th class="tabel-head" style="text-align: center;">Warehouse</th>
                            </div>
                            <div class="col-sm-2">
                                <th class="tabel-head" style="text-align: center;">Status</th>
                            </div>
                            <div class="col-sm-1">
                                <th class="tabel-head" style="text-align: center;">Customer Name</th>
                            </div>
                            <div class="col-sm-2">
                                <th class="tabel-head" style="text-align: center;">Remark</th>
                            </div>
                        </tr>
                    </div>

                    <tr>

                            <div class="col-sm-3">
                                <td><input class="form-control" style="width: 100px"></td>
                            </div>
                            <div class="col-sm-3">
                                <td><label style="width: 100px;">so.09422</label></td>
                            </div>
                            <div class="col-sm-1">
                                <td><label style="width: 100px;">SK0162355852</label></td>
                            </div>
                            <div class="col-sm-1">
                                <td><input class="form-control" style="width: 50px;"></td>
                            </div>
                            <div class="col-sm-1">
                                <td><input class="form-control" style="width: 50px;"></td>
                            </div>
                            <div class="col-sm-2">
                                <td><input class="form-control" style="width: 70px;"></td>
                            </div>
                            <div class="col-sm-2">
                                <td><input class="form-control"></td>
                            </div>
                            <div class="col-sm-1">
                                <td><label style="width: 150px;">Yingkou</td>
                            </div>
                            <div class="col-sm-2">
                                <td><input class="form-control"></td>
                            </div>
                    </tr>
                                        <tr>

                            <div class="col-sm-3">
                                <td><input class="form-control" style="width: 100px"></td>
                            </div>
                            <div class="col-sm-3">
                                <td><label style="width: 100px;">so.0936</label></td>
                            </div>
                            <div class="col-sm-1">
                                <td><label style="width: 100px;">SK025489855</label></td>
                            </div>
                            <div class="col-sm-1">
                                <td><input class="form-control" style="width: 50px;"></td>
                            </div>
                            <div class="col-sm-1">
                                <td><input class="form-control" style="width: 50px;"></td>
                            </div>
                            <div class="col-sm-2">
                                <td><input class="form-control" style="width: 70px;"></td>
                            </div>
                            <div class="col-sm-2">
                                <td><input class="form-control"></td>
                            </div>
                            <div class="col-sm-1">
                                <td><label style="width: 150px;">บริษัท โลหะไพศาลวานิช</td>
                            </div>
                            <div class="col-sm-2">
                                <td><input class="form-control"></td>
                            </div>
                    </tr>
        </table>
                   
    <br><center>
    <button class="btn btn-sm btn-primary" onclick='location.replace("set_warehouse.php")' >
        Inquiry
    </button>
    <button class="btn btn-sm btn-success" type="submit" onClick="Asubmit(this.form);">
        Submit
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

    function Asubmit(frm)
    {
    frm.action="../pages/update/stock_import_accept.php";
    frm.submit();
    }

    </script>

    <script>

    $(function () {
    $('form').bind('submit', function () {
    $.ajax({
      type: 'post',
      url: '../pages/update/customer_accept.php', 
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
 
</body>

</html>