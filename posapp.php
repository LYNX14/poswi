<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>POSAPP</title>
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
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-full-width">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.html">
                            <img src="../assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN MEGA MENU -->
                    <!-- DOC: Remove "hor-menu-light" class to have a horizontal menu with theme background instead of white background -->
                    <!-- DOC: This is desktop version of the horizontal menu. The mobile version is defined(duplicated) in the responsive menu below along with sidebar menu. So the horizontal menu has 2 seperate versions -->
                    <div class="hor-menu   hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                           
                        </ul>
                    </div>
                 
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
                                    <img alt="" class="img-circle" src="../assets/layouts/layout/img/avatar3_small.jpg" />
                                    <span class="username username-hide-on-mobile"> Nick </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    
                                    <li class="divider"> </li>
                                
                                    <li>
                                        <a href="logout.php">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-quick-sidebar-toggler">
                                <a href="javascript:;" class="dropdown-toggle">
                                    <i class="icon-logout"></i>
                                </a>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
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
                        <!-- END SIDEBAR MENU -->
                        <div class="page-sidebar-wrapper">
                            <!-- BEGIN RESPONSIVE MENU FOR HORIZONTAL & SIDEBAR MENU -->
                            <ul class="page-sidebar-menu visible-sm visible-xs  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                               
                                <li class="nav-item start active open">
                                    <a href="#"> Users information
                                        
                                    </a>
                                    <ul class="sub-menu">
                                        <img src="assets/images/userimage.png" style="width: 100%;height: auto;">
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-credit-card"></i> EmpID : 12321213
                                       
                                    </a>
                                    
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-user"></i> Name: John Doe
                                      
                                    </a>
                                 
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"> <i class="icon-pointer"></i> Address : Cebu City
                                       
                                    </a>
                                
                                </li>
                                 <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"> <i class="icon-docs"></i> Contact #: 09238213
                                       
                                    </a>
                                
                                </li>
                                 <li class="nav-item">
                                    <a href="javascript:;" class="nav-link nav-toggle"> <i class="icon-pointer"></i> Branch Assign
                                       
                                    </a>
                                
                                </li>
                            </ul>
                            <!-- END RESPONSIVE MENU FOR HORIZONTAL & SIDEBAR MENU -->
                        </div>
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                      
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                           

                         
                        </div>
                        <!-- END PAGE BAR -->
                        <ul></ul>
                        <!-- END PAGE HEADER-->
                        <div class="note note-info">
                           <input type="text" name="search" class="form-control" placeholder="Search products">
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tabbable-line boxless tabbable-reversed">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_0" data-toggle="tab" aria-expanded="true"> All </a>
                                        </li>
                                        <li class="">
                                            <a href="#tab_1" data-toggle="tab" aria-expanded="false">Food </a>
                                        </li>
                                        <li class="">
                                            <a href="#tab_2" data-toggle="tab" aria-expanded="false"> Drinks </a>
                                        </li>
                                        
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_0">
                                           
                                            <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light portlet-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">All Products</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="mt-element-card mt-element-overlay">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Squid Ball $3.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Squid Roll $4.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Tempura $6.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Longanisa $2.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Ngohiong $3.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">V.Lumpia $6.20</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Lupia Shanghai $1.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Meat Balls $1.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Chicken Pop $3.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Rice $1.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Shrimp $3.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/drinks.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Mineral Water $3.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/drinks.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Soft Drinks in Can $2.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/drinks.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">C2 $2.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/drinks.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Real Leaf $2.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                          
                                        </div>
                                        <div class="tab-pane" id="tab_1">
                                            <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light portlet-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">Food Products</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="mt-element-card mt-element-overlay">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Squid Ball $3.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Squid Roll $4.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Tempura $6.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Longanisa $2.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Ngohiong $3.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">V.Lumpia $6.20</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Lupia Shanghai $1.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Meat Balls $1.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Chicken Pop $3.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Rice $1.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/product.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Shrimp $3.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        </div>
                                        <div class="tab-pane" id="tab_2">
                                            
                                             <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light portlet-fit bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-green"></i>
                                            <span class="caption-subject font-green bold uppercase">Drinks Products</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="mt-element-card mt-element-overlay">
                                            <div class="row">
                                           

                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/drinks.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Soft Drinks in Can $2.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/drinks.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">C2 $2.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                        <div class="mt-card-avatar mt-overlay-1">
                                                            <img src="assets/images/drinks.png">
                                                            <div class="mt-overlay">
                                                                <ul class="mt-info">
                                                                    <li>
                                                                        
                                                                        <button class="btn btn-primary btn-lg">
                                                                             <i class="icon-basket"></i> Add to Cart
                                                                        </button>
                                                                    </li>
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mt-card-content">
                                                            <h3 class="mt-card-name">Real Leaf $2.40</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            
                                        </div>
                                       
                                      
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
                <a href="javascript:;" class="page-quick-sidebar-toggler">
                    <i class="icon-login"></i>
                </a>
                <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                    <div class="page-quick-sidebar">
                         <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#" data-target="#quick_sidebar_tab_1" data-toggle="tab"><i class="icon-basket"></i> Carts
                                    <span class="badge badge-danger">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-target="#quick_sidebar_tab_2" data-toggle="tab"><i class="icon-credit-card"></i> Payment
                                    <span class="badge badge-success">7</span>
                                </a>
                            </li>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                                <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd">
                                    <h3 class="list-heading" style="color: white;font-size:18px;">Order List</h3>
                                    <ul class="media-list list-items">
                                       
                                        <li class="media">
                                            <div class="media-status">
                                               
                                                <a href="#" class="btn red-haze btn-circle btn-sm">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </div>
                                            <img class="media-object" src="assets/images/product.png" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading" style="color: white;font-size:18px;">Apple Shrimp  <a class="btn green-haze btn-circle btn-sm" style="font-size: 16px;">
                                                   2
                                                </a></h4>
                                                <div class="media-heading-sub" style="color: white;font-size:16px;" >$2.50 </div>
                                            </div>
                                            
                                        </li>
                                          <li class="media">
                                            <div class="media-status">
                                               
                                                <a href="#" class="btn red-haze btn-circle btn-sm">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </div>
                                            <img class="media-object" src="assets/images/product.png" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading" style="color: white;font-size:18px;">Orange <a class="btn green-haze btn-circle btn-sm" style="font-size: 16px;">
                                                   3
                                                </a></h4>
                                                <div class="media-heading-sub" style="color: white;font-size:16px;" >$1.50 </div>
                                            </div>
                                            
                                        </li>

                                         <li class="media">
                                            <div class="media-status">
                                               
                                                <a href="#" class="btn red-haze btn-circle btn-sm">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </div>
                                            <img class="media-object" src="assets/images/product.png" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading" style="color: white;font-size:18px;">Grapes <a class="btn green-haze btn-circle btn-sm" style="font-size: 16px;">
                                                   1
                                                </a></h4>
                                                <div class="media-heading-sub" style="color: white;font-size:16px;" >$3.50 </div>
                                            </div>
                                            
                                        </li>

                                         <li class="media">
                                            <div class="media-status">
                                               
                                                <a href="#" class="btn red-haze btn-circle btn-sm">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </div>
                                            <img class="media-object" src="assets/images/product.png" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading" style="color: white;font-size:18px;">Manggo <a class="btn green-haze btn-circle btn-sm" style="font-size: 16px;">
                                                   4
                                                </a></h4>
                                                <div class="media-heading-sub" style="color: white;font-size:16px;" >$3.00 </div>
                                            </div>
                                            
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                               
                                                <a href="#" class="btn red-haze btn-circle btn-sm">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </div>
                                            <img class="media-object" src="assets/images/product.png" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading" style="color: white;font-size:18px;">Papaya <a class="btn green-haze btn-circle btn-sm" style="font-size: 16px;">
                                                   3
                                                </a></h4>
                                                <div class="media-heading-sub" style="color: white;font-size:16px;" >$3.81 </div>
                                            </div>
                                            
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                               
                                                <a href="#" class="btn red-haze btn-circle btn-sm">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </div>
                                            <img class="media-object" src="assets/images/product.png" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading" style="color: white;font-size:18px;">Squash <a class="btn green-haze btn-circle btn-sm" style="font-size: 16px;">
                                                   5
                                                </a></h4>
                                                <div class="media-heading-sub" style="color: white;font-size:16px;" >$2.30 </div>
                                            </div>
                                            
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                               
                                                <a href="#" class="btn red-haze btn-circle btn-sm">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </div>
                                            <img class="media-object" src="assets/images/product.png" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading" style="color: white;font-size:18px;">Pumpkin <a class="btn green-haze btn-circle btn-sm" style="font-size: 16px;">
                                                   7
                                                </a></h4>
                                                <div class="media-heading-sub" style="color: white;font-size:16px;" >$3.00 </div>
                                            </div>
                                            
                                        </li>
                                        <li class="media">
                                            <div class="media-status">
                                               
                                                <a href="#" class="btn red-haze btn-circle btn-sm">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </div>
                                            <img class="media-object" src="assets/images/product.png" alt="...">
                                            <div class="media-body">
                                                <h4 class="media-heading" style="color: white;font-size:18px;">Berry <a class="btn green-haze btn-circle btn-sm" style="font-size: 16px;">
                                                   2
                                                </a></h4>
                                                <div class="media-heading-sub" style="color: white;font-size:16px;" >$5.00 </div>
                                            </div>
                                            
                                        </li>
                                         
                                    </ul>
                                 
                                </div>
                                
                            </div>
                          <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                                <div class="page-quick-sidebar-alerts-list">
                                  
                                    <ul class="feeds list-items">

                                       
                                       <div class="portlet box purple">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Order Summary </div>
                                       
                                    </div>
                                    <div class="portlet-body form" style="display: block;">
                                        <form role="form" class="form-horizontal">
                                            <div class="form-body">
                                               
                                                <div class="form-group has-default">
                                                    <label class="col-md-4" style="color: black;">Sub total</label>
                                                    <div class="col-md-8">
                                                        <div class="input-icon right">
                                                          
                                                            <input type="text" class="form-control"> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group has-default">
                                                    <label class="col-md-4 "  style="color: black;">Discount</label>
                                                    <div class="col-md-8">
                                                        <div class="input-icon right">
                                                         
                                                            <input type="text" class="form-control"> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group has-default">
                                                    <label class="col-md-4"  style="color: black;">Cash</label>
                                                    <div class="col-md-8">
                                                        <div class="input-icon right">
                                                           
                                                            <input type="text" class="form-control"> </div>
                                                    </div>
                                                </div>
                                                   
                                                <div class="form-group has-default">
                                                    <label class="col-md-4"  style="color: black;">Total</label>
                                                    <div class="col-md-8">
                                                        <div class="input-icon right">
                                                           
                                                            <input type="text" class="form-control"> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group has-default">
                                                    <label class="col-md-4"  style="color: black;">Change</label>
                                                    <div class="col-md-8">
                                                        <div class="input-icon right">
                                                           
                                                            <input type="text" class="form-control"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-4 col-md-8">
                                                        <button type="button" class="btn default">Cancel</button>
                                                        <button type="submit" class="btn blue">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                    </ul>
                                </div>
                            </div>
                      
                        </div>
                    </div>
                </div>
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner">&copy; ScriptDev 2019
                    
                </div>
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
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/js/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/js/layout.min.js" type="text/javascript"></script>
        <script src="assets/js/demo.min.js" type="text/javascript"></script>
        <script src="assets/js/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="assets/js/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>