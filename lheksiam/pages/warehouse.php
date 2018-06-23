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
                    <li>   
                        <a href="stock_import.php">
                            <i class="material-icons">text_fields</i>
                            <span>Stock Import</span>
                        </a>
                    </li>
                    <li>
                        <a href="stock_export.php">
                            <i class="material-icons">text_fields</i>
                            <span>Stock Export</span>
                        </a>
                    </li>
                    <li>
                        <a href="product_master.php">
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
                <li class="active">
                    <a href="warehouse.php">
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
                SET WAREHOUSE

            </h2> <br>
        </div>
        <div  class="alert alert-warning alert-dismissible fade show" role="alert" id="bsalert" aria-hidden="true" style="width: 300px;">    
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Duplicate For ID</strong> 
        </div>

        <form method="post" name="Warehouseform" id="Warehouseform" action="">


          <div class="jumbotron">


            <div class="row">
             <div class="col-md-2">
               <label>Warehouse ID </label>      
           </div>

           <div class="col-md-3"> 
            <a data-toggle="popover" data-placement="top" data-content="กรุณาระบุID"  id="popoverid"></a>
            <input type="text" name="warehouseid" id="warehouseid" class="form-control" onchange="FunctionCheckID(this.value)" value="" maxlength ="10" required>



        </div>
        <div class="col-md-2"> 
         <label>Warehouse Name </label>   
     </div>
     <div class="col-md-3">
        <a data-toggle="popover" data-placement="top" data-content="กรุณาระบุName"  id="popovername"></a>
        <input type="text" name="warehousename" id="warehousename" class="form-control">
    </div>
    <div class="col-md-2"></div>
</div>
<br>


<div class="row">

 <div class="col-md-2">
   <label>Effective Strat Date </label>      
</div>

<div class="col-md-3">
   <a data-toggle="popover" data-placement="top" data-content="กรุณาระบุStrat Date"  id="popoverstrat"></a>       
   <input type="date" class="form-control date" name="stratdatewarehouse" id="stratdatewarehouse">           
</div>
<div class="col-md-2"> 
 <label>Effective End Date </label>   
</div>
<div class="col-md-3">
   <a data-toggle="popover" data-placement="top" data-content="กรุณาระบุEnd Date"  id="popoverend"></a>
   <input type="date" class="form-control date" name="enddatewarehouse" id="enddatewarehouse" >
</div>
<div class="col-md-2"></div>

</div>

<br>
<div class="row">

 <div class="col-md-2">
   <label>Zone </label>      
</div>

<div class="col-md-3"> 
   <a data-toggle="popover" data-placement="top" data-content="กรุณาระบุZone"  id="popoverzone"></a>        
   <input type="text" name="zonewarehouse" id="zonewarehouse" class="form-control" >          
</div>
<div class="col-md-2"> 
 <label>Maximumn Size</label>   
</div>
<div class="col-md-3"> 
 <a data-toggle="popover" data-placement="top" data-content="กรุณาระบุSize"  id="popoversize"></a> 
 <input type="text" name="sizewarehouse" id="sizewarehouse" class="form-control" >
</div>
<div class="col-md-2"></div>

</div>


</div>
<!-- #END# Body Copy -->
</div>


<br><center>
    <button class="btn btn-sm btn-info" type="submit"  id="Edit"  >
        Edit
    </button>
    <button class="btn btn-sm btn-success" type="submit" id="Confrim">
        Confrim
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


<script src="../plugins/jquery-validation/jquery.validate.js"></script>

<script type="text/javascript">






    $( "#Edit" ).click(function() {

        var frm = document.getElementById('Warehouseform');

        if(document.getElementById('warehouseid').value == "")
        {
            $('#popoverid').popover('show');

            $("#warehouseid").mouseover(function() { 

               $('#popoverid').popover('hide');

           });

            return false;
        }

        else
        {
           frm.action="../pages/warehouse_inquiry.php";
           frm.submit();

       }


   });


    function FunctionCheckID(val) {

      $.ajax({
          type: 'post',
          url: 'checkdatawarehouse.php',
          data: {warehouseid:val},
          success: function(data) {
              if (data == 0) {

                alert('This ID is in the system');           

            }

            if (data == 1) {

                alert('Data Not Found');           

            }

        }

    });
  }




  $( "#Confrim" ).click(function(frm) { 

    var frm = document.getElementById('Warehouseform');


    if(document.getElementById('warehouseid').value == "")
    {
        $('#popoverid').popover('show');

        $("#warehouseid").mouseover(function() { 

           $('#popoverid').popover('hide');

       });

        return false;
    }
    if(document.getElementById('warehousename').value == "")
    {
        $('#popovername').popover('show');

        $("#warehousename").mouseover(function() { 

           $('#popovername').popover('hide');

       });

        return false;
    } 
    if(document.getElementById('stratdatewarehouse').value == "")
    {
        $('#popoverstrat').popover('show');

        $("#stratdatewarehouse").mouseover(function() { 

           $('#popoverstrat').popover('hide');

       });

        return false;
    } 
    if(document.getElementById('enddatewarehouse').value == "")
    {
        $('#popoverend').popover('show');

        $("#enddatewarehouse").mouseover(function() { 

           $('#popoverend').popover('hide');

       });

        return false;
    } 
    if(document.getElementById('zonewarehouse').value == "")
    {
        $('#popoverzone').popover('show');

        $("#zonewarehouse").mouseover(function() { 

           $('#popoverzone').popover('hide');

       });

        return false;
    }  

    if(document.getElementById('sizewarehouse').value == "")
    {
        $('#popoversize').popover('show');

        $("#sizewarehouse").mouseover(function() { 

           $('#popoversize').popover('hide');

       });

        return false;
    }  
    else
    {

        frm.action="../pages/update/warehouse_save.php";
        frm.submit();

    }
});








</script>


</body>

</html>
