<?php require_once 'ti.php' ?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
  

    <head>
        <meta charset="utf-8" />
        <title>POSWI</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/bootstrap/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/bootstrap/css/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/morris.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <link href="assets/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />

         </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.php">
                            <img src="assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                         
                           
                           
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="assets/layouts/layout/img/avatar3_small.jpg" />
                                    <span class="username username-hide-on-mobile"> Nick </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                   <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-settings"></i> Settings </a>
                                    </li>
                                    <li>
                                        <a href="login.php">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                           
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 0px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                         
                          
                            <li class="nav-item start active open">
                                <a href="index.php" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                   
                                </a>
                             
                            </li>
                          
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-users"></i>
                                    <span class="title">Users</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="useradd.php" class="nav-link ">
                                            <span class="title"><i class="icon-user"></i> Add users</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        
                                        <a href="userinfo.php" class="nav-link ">
                                            <span class="title"> <i class="icon-docs"></i> Users Informations</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="useraccnt.php" class="nav-link ">
                                            <span class="title"><i class="icon-settings"></i> Manage Accounts</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-pointer"></i>
                                    <span class="title">Branch</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="branchadd.php" class="nav-link ">
                                            <span class="title"><i class="icon-plus"></i> Add Branch</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="branchinfo.php" class="nav-link ">
                                            <span class="title"><i class="icon-docs"></i> Branch Information</span>
                                           
                                        </a>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-basket"></i>
                                    <span class="title">Products</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="productadd.php" class="nav-link ">
                                            <span class="title"><i class="icon-plus"></i> Add products</span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="productinfo.php" class="nav-link ">
                                            <span class="title"><i class="icon-docs"></i> Product information</span>
                                        </a>
                                    </li>
                                    

                                </ul>
                            </li>
                             <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-docs"></i>
                                    <span class="title">Inventory</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    
                                    <li class="nav-item  ">
                                        <a href="inventoryinfo.php" class="nav-link ">
                                            <span class="title"><i class="icon-docs"></i> Items information</span>
                                        </a>
                                    </li>
                                    

                                </ul>
                            </li>
                            <li class="nav-item  ">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">Reports</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="elements_steps.html" class="nav-link ">
                                            <span class="title"><i class="icon-basket"></i> Orders</span>
                                        </a>
                                    </li>
                                   
                                    <li class="nav-item  ">
                                        <a href="elements_steps.html" class="nav-link ">
                                            <span class="title"><i class="icon-bar-chart"></i> Revenue</span>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                         
                       
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                          
                           <div id='dashboard'>
                              <?php startblock('dashboard') ?>
                              <?php endblock() ?>
                            </div> 
                     <!-- Users Start -->
                            <div id='useradd'>
                              <?php startblock('useradd') ?>
                              <?php endblock() ?>
                            </div>    

                            <div id='userinfo'>
                              <?php startblock('userinfo') ?>
                              <?php endblock() ?>
                            </div> 

                            <div id='useraccnt'>
                              <?php startblock('useraccnt') ?>
                              <?php endblock() ?>
                            </div>   
                       <!-- Users End -->

                       <!-- Branch Start -->

                       <div id='branchadd'>
                              <?php startblock('branchadd') ?>
                              <?php endblock() ?>
                       </div> 

                          <div id='branchinfo'>
                              <?php startblock('branchinfo') ?>
                              <?php endblock() ?>
                         </div>  
 
                       <!-- Branch End -->

                       <!-- Products Start -->
                         
                         <div id='productadd'>
                              <?php startblock('productadd') ?>
                              <?php endblock() ?>
                         </div> 
                        
                        <div id='productinfo'>
                              <?php startblock('productinfo') ?>
                              <?php endblock() ?>
                         </div> 
                        

                       <!-- Products End -->

                       <!-- Inventory Start -->

                        <div id='inventoryinfo'>
                              <?php startblock('inventoryinfo') ?>
                              <?php endblock() ?>
                         </div> 

                       <!-- Inventory END -->

                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
               
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
           
                
           
            <div class="page-footer">
                <center>
                <div class="page-footer-inner"> &copy; ScriptDev 2019 </div>
                  </center>
               
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            
            <!-- END FOOTER -->
        </div>
       
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/bootstrap/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/js/moment.min.js" type="text/javascript"></script>
        <script src="assets/bootstrap/js/daterangepicker.min.js" type="text/javascript"></script>
        <script src="assets/js/morris.min.js" type="text/javascript"></script>
        <script src="assets/js/raphael-min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="assets/js/amcharts.js" type="text/javascript"></script>
        <script src="assets/js/serial.js" type="text/javascript"></script>
        <script src="assets/js/pie.js" type="text/javascript"></script>
        <script src="assets/js/radar.js" type="text/javascript"></script>
        <script src="assets/js/light.js" type="text/javascript"></script>
        <script src="assets/js/patterns.js" type="text/javascript"></script>
        <script src="assets/js/chalk.js" type="text/javascript"></script>
        <script src="assets/js/ammap.js" type="text/javascript"></script>
        <script src="assets/js/worldLow.js" type="text/javascript"></script>
        <script src="assets/js/amstock.js" type="text/javascript"></script>
        <script src="assets/js/fullcalendar.min.js" type="text/javascript"></script>
        <script src="assets/js/horizontal-timeline.js" type="text/javascript"></script>
        <script src="assets/js/jquery.flot.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.vmap.js" type="text/javascript"></script>
        <script src="assets/js/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="assets/js/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="assets/js/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="assets/js/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="assets/js/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="assets/js/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/js/select2.full.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="assets/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/datatables/datatable.js" type="text/javascript"></script>
        <script src="assets/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="assets/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
         
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/js/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <script src="assets/datatables/table-datatables-managed.min.js" type="text/javascript"></script>
           <!-- BEGIN USERS ADD FORM SCRIPTS -->
         <script src="assets/js/form-wizard.min.js" type="text/javascript"></script>
         <!-- END USERS ADD FORM SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/js/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/js/layout.min.js" type="text/javascript"></script>
        <script src="assets/js/demo.min.js" type="text/javascript"></script>
        <script src="assets/js/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="assets/js/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
     
    </body>

</html>