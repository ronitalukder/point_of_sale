<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <!--=== Bootstrap ===-->
        <link rel="stylesheet" href="<?php echo base_url();?>template/assets/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/assets/css/datatables.min.css">
        <!--=== Fontawesome icon ===-->
        <link rel="stylesheet" href="<?php echo base_url();?>template/assets/css/font-awesome.min.css">
        <!--=== Main Css ===-->
        <link rel="stylesheet" href="<?php echo base_url();?>template/assets/css/style.css">
        <!--=== Responsive Css ===-->
        <link rel="stylesheet" href="<?php echo base_url();?>template/assets/css/responsive.css">
    </head>
    <body id="body" class="sellboard-body">

        <!--========================= START HEADER PART ================================-->
        <header>
            <!---- Start Header Nav Menu ----->
            <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
                <!---- Start Brand Name ----->
                <a class="navbar-brand brand-name" href="<?php echo base_url('dashboard');?>">
                    metr<span>o</span>
                </a>
                <!---- End Brand Name ----->

                <!-- Sidebar control button -->
                <button class="navbar-toggler sidebar-responsive-control-btn" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-right" aria-hidden="true"></i></button>

                 <!-- Header Left Menu control button -->
                <button class="navbar-toggler header-left-responsive-control-btn" type="button" data-toggle="collapse" data-target="#LeftMenu" aria-controls="LeftMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-right" aria-hidden="true"></i></button>


                <!---- Start Header Menu  ----->
                <div class="navbar-collapse" id="navbarNavDropdown">
                    <div class="collapse navbar-collapse header-responsive-right-menu" id="LeftMenu">
                        <!---- Start Left Menu Responsive Cross Button   ----->
                        <button class="navbar-toggler left-menu-responsive-cross-btn" type="button" data-toggle="collapse" data-target="#LeftMenu" aria-controls="LeftMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                        <!---- End Left Menu Responsive Cross Button ----->
                        
                        <!---- Start Left Menu ----->
                        <ul id="accordion2" class="navbar-nav header-left-menu navbar-nav-menu">
                            <!---- Start Sidebar hide show button ----->
                            <li class="nav-item">
                                <a href="<?php echo base_url('dashboard');?>"><button class="show-hide-sidebar-button" ><i class="fa fa-home" aria-hidden="true"></i></button>
                            </li>
                            <!---- End Sidebar hide show button ----->

                             <!---- Start Dropdown Menu ----->
                            <li class="card nav-item dropdown dropdown-link-hover">
                                <a class="card-link nav-link dropdown-nav-link data-toggle-target" href="#dropdownOne" >
                                    <i class="fa fa-plus-square nav-link-left-icon"></i><span class="nav-link-title">actions</span><i class="fa fa-angle-down nav-link-right-icon"></i>
                                </a>
                                <ul class="dropdown-menu-item collapse" id="dropdownOne"  data-parent="#accordion2">
                                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-plus-square"></i>create new post</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-line-chart"></i>general reports <span class="dropdown-item-count">2</span></a></li>
                                    <!---- Start Dropdown Sub Menu ----->
                                    <li class="nav-item dropdown-submenu dropdown-toggle-menu"><a class="nav-link data-toggle-target" href="#dropdownSubOne"><i class="fa fa-shopping-bag"></i>manage order <i class="fa fa-angle-right dropdown-submenu-icon"></i></a>
                                        <ul class="dropdown-menu dropdown-submenu-item dropdown-submenu-item-show drop-sub-menu-toggle" id="dropdownSubOne">
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Latest order</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Pending order</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Processed order</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Deliver Report</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>payment</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>customer</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown-submenu dropdown-toggle-menu"><a d href="#dropdownSubTwo" class="nav-link data-toggle-target" ><i class="fa fa-shopping-bag"></i>manage order <i class="fa fa-angle-right dropdown-submenu-icon"></i></a>
                                        <ul class="dropdown-menu dropdown-submenu-item dropdown-submenu-item-show  drop-sub-menu-toggle dropdown-menu " id="dropdownSubTwo">
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Latest order</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Pending order</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Processed order</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Deliver Report</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>payment</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>customer</a></li>
                                        </ul>
                                    </li>
                                    <!---- End Dropdown Sub Menu ----->
                                    <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-line-chart"></i>Sale Report</a></li>
                                    <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-user"></i>register memmber</a></li>
                                </ul>
                            </li> 
                           <!-- menu two -->
                            <li class="card nav-item dropdown dropdown-link-hover">
                                <a class="card-link nav-link dropdown-nav-link data-toggle-target" href="#dropdownTow" >
                                    <i class="fa fa-plus-square nav-link-left-icon"></i><span class="nav-link-title">Apps</span><i class="fa fa-angle-down nav-link-right-icon"></i>
                                </a>
                                <ul class="dropdown-menu-item collapse" id="dropdownTow" data-parent="#accordion2">
                                    <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-plus-square"></i>create new post</a></li>
                                    <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-line-chart"></i>general reports <span class="dropdown-item-count">2</span></a></li>
                                    <!---- Start Dropdown Sub Menu ----->
                                    <li class="nav-item dropdown-submenu dropdown-toggle-menu"><a  class="nav-link data-toggle-target" href="#dropdownSubThree"  ><i class="fa fa-shopping-bag"></i>manage order <i class="fa fa-angle-right dropdown-submenu-icon"></i></a>
                                        <ul class="dropdown-menu dropdown-submenu-item dropdown-submenu-item-show drop-sub-menu-toggle" id="dropdownSubThree">
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Latest order</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Pending order</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Processed order</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Deliver Report</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>payment</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>customer</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown-submenu dropdown-toggle-menu"><a class="nav-link data-toggle-target" href="#dropdownSubFour"  ><i class="fa fa-shopping-bag"></i>Sale order <i class="fa fa-angle-right dropdown-submenu-icon"></i></a>
                                        <ul class="dropdown-menu dropdown-submenu-item dropdown-submenu-item-show drop-sub-menu-toggle" id="dropdownSubFour">
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Latest order</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Pending order</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Processed order</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Deliver Report</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>payment</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>customer</a></li>
                                        </ul>
                                    </li>
                                    <!---- End Dropdown Sub Menu ----->
                                    <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-line-chart"></i>Sale Report</a></li>
                                    <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-user"></i>register memmber</a></li>
                                </ul>
                            </li>
                            <!---- End Dropdown Menu Field ----->
                           <!-- menu two -->
                            <li class="card nav-item dropdown dropdown-link-hover">
                                <a class="card-link nav-link dropdown-nav-link data-toggle-target" href="#dropdownThree" >
                                    <i class="fa fa-plus-square nav-link-left-icon"></i><span class="nav-link-title">Report</span><i class="fa fa-angle-down nav-link-right-icon"></i>
                                </a>
                                <ul class="dropdown-menu-item collapse" id="dropdownThree" data-parent="#accordion2">
                                    <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-plus-square"></i>create new post</a></li>
                                    <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-line-chart"></i>general reports <span class="dropdown-item-count">2</span></a></li>
                                    <!---- Start Dropdown Sub Menu ----->
                                    <li class="nav-item dropdown-submenu dropdown-toggle-menu"><a  class="nav-link data-toggle-target" href="#dropdownSubFive"  ><i class="fa fa-shopping-bag"></i>manage order <i class="fa fa-angle-right dropdown-submenu-icon"></i></a>
                                        <ul class="dropdown-menu dropdown-submenu-item dropdown-submenu-item-show drop-sub-menu-toggle" id="dropdownSubFive">
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Latest order</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Pending order</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Processed order</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Deliver Report</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>payment</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>customer</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown-submenu dropdown-toggle-menu"><a class="nav-link data-toggle-target" href="#dropdownSubSix"  ><i class="fa fa-shopping-bag"></i>Sale order <i class="fa fa-angle-right dropdown-submenu-icon"></i></a>
                                        <ul class="dropdown-menu dropdown-submenu-item dropdown-submenu-item-show drop-sub-menu-toggle" id="dropdownSubSix">
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Latest order</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Pending order</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Processed order</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>Deliver Report</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>payment</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-arrow-circle-o-right"></i>customer</a></li>
                                        </ul>
                                    </li>
                                    <!---- End Dropdown Sub Menu ----->
                                    <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-line-chart"></i>Sale Report</a></li>
                                    <li class="nav-item"><a  class="nav-link" href="#"><i class="fa fa-user"></i>register memmber</a></li>
                                </ul>
                            </li>
                            <!---- End Dropdown Menu Field ----->
                        </ul>
                    </div>
                    <!---- End Left widget Menu Field ----->


                    <!---- Start right widget Menu Field ----->
                     <div class="navbar-collapse" id="rightMenu">
                        <ul class="nav justify-content-end right-dropdown-nav">
                           

                           
                            <!---- Start Profile widget ----->
                            <li class="nav-item dropdown dropdown-link-hover">
                                <a class="nav-link dropdown-img" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo base_url();?>template/assets/img/own.png">
                                </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <div class="profile-info">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="profile-img">
                                                    <img src="<?php echo base_url();?>template/assets/img/own.png" alt="profile">
                                                </div>
                                            </div>
                                            <div class="profile-detail">
                                                <h3>Mokbul hussain</h3>
                                                <p>mokbulhussain2@gmail.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-activity">
                                        <a class="dropdown-item" href="#">
                                            <i class="fa fa-user-circle"></i>my Profile
                                            <span class="profile-msg-total">2</span>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fa fa-cog"></i>activity 
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fa fa-envelope"></i>message 
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fa fa-question-circle"></i>FAQ</a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fa fa-life-ring"></i>support 
                                        </a>
                                        <a class="dropdown-item logout-btn" href="#">
                                            <i class="fa fa-sign-out"></i>logout
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!---- End Profile widget ----->

                           
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--=================End header part==================================-->

        <div class="container-fluid invoiceboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="invoiceboard-heading">
                    <h3>SellBoard</h3>
                    </div>
                </div>
            </div>
        </div>


	



		
		<!--============================= END CONTENT BODY PART ===================================-->


        <!--==================================================================-->
        <!--=== jquery js ===-->
        <script type="text/javascript" src="<?php echo base_url();?>template/assets/js/jquery.min.js"></script>
        <!--=== Bootstrap js ===-->
        <script type="text/javascript" src="<?php echo base_url();?>template/assets/js/bootstrap.min.js"></script>
        <!--=== Main js ===-->
        <script type="text/javascript" src="<?php echo base_url();?>template/assets/js/datatables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>template/assets/js/main.js"></script>

        
        </body>
</html>

