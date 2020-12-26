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
    <body id="body">

        <!--========================= START HEADER PART ================================-->
        <header>
            <!---- Start Header Nav Menu ----->
            <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
                <!---- Start Brand Name ----->
                <a class="navbar-brand brand-name" href="<?php echo base_url('dashboard');?>">
                    Dash<span>board</span>
                </a>

                 <a class="navbar-brand brand-name" href="<?php echo base_url('sell');?>">
                    Sell<span>board</span>
                </a>

                 <a class="navbar-brand brand-name" href="<?php echo base_url('products/item');?>">
                    Item<span>board</span>
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
                          
                             
                            <!---- End Sidebar hide show button ----->

                             <!---- Start Dropdown Menu ----->
                            <li class="card nav-item dropdown dropdown-link-hover">
                                <a class="card-link nav-link dropdown-nav-link data-toggle-target" href="#dropdownOne" >
                                    <i class="fa fa-plus-square nav-link-left-icon"></i><span class="nav-link-title">Product</span><i class="fa fa-angle-down nav-link-right-icon"></i>
                                </a>
                                <ul class="dropdown-menu-item collapse" id="dropdownOne"  data-parent="#accordion2">
                                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('products/item');?>"><i class="fa fa-plus-square"></i>Stock Item</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('purchase/itemPurchase');?>"><i class="fa fa-line-chart"></i>Purchase Item</a></li>
                                     <li class="nav-item"><a class="nav-link" href="<?php echo base_url('products/category');?>"><i class="fa fa-arrow-circle-o-right"></i>Category</a></li>
                                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('products/brand');?>"><i class="fa fa-arrow-circle-o-right"></i>Brand</a></li>
                                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('products/supply');?>"><i class="fa fa-arrow-circle-o-right"></i>Supplier</a></li>
                                            
                                    <!---- Start Dropdown Sub Menu ----->
                                
                                    <li class="nav-item dropdown-submenu dropdown-toggle-menu"><a d href="#dropdownSubTwo" class="nav-link data-toggle-target" ><i class="fa fa-shopping-bag"></i>manage Purchase <i class="fa fa-angle-right dropdown-submenu-icon"></i></a>
                                        <ul class="dropdown-menu dropdown-submenu-item dropdown-submenu-item-show  drop-sub-menu-toggle dropdown-menu " id="dropdownSubTwo">
                                            <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('purchase/showPurchase');?>"><i class="fa fa-arrow-circle-o-right"></i>Purchase Supply</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('purchase/itemshow');?>"><i class="fa fa-arrow-circle-o-right"></i>Purchase Product</a></li>
   
                                        </ul>
                                    </li>
                                 
                                </ul>
                            </li> 
                           <!-- menu two -->
                            <li class="card nav-item dropdown dropdown-link-hover">
                                <a class="card-link nav-link dropdown-nav-link data-toggle-target" href="#dropdownTow" >
                                    <i class="fa fa-plus-square nav-link-left-icon"></i><span class="nav-link-title">Sales</span><i class="fa fa-angle-down nav-link-right-icon"></i>
                                </a>
                                <ul class="dropdown-menu-item collapse" id="dropdownTow" data-parent="#accordion2">
                                    <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('sell');?>"><i class="fa fa-plus-square"></i>Sales Dashboard</a></li>
                                   
                                    <!---- Start Dropdown Sub Menu ----->
                                    <li class="nav-item dropdown-submenu dropdown-toggle-menu"><a  class="nav-link data-toggle-target" href="#dropdownSubThree"  ><i class="fa fa-shopping-bag"></i>Sales Invoice <i class="fa fa-angle-right dropdown-submenu-icon"></i></a>
                                        <ul class="dropdown-menu dropdown-submenu-item dropdown-submenu-item-show drop-sub-menu-toggle" id="dropdownSubThree">
                                            <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('invoice/todayinvoice');?>"><i class="fa fa-arrow-circle-o-right"></i>Today Invoice</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('invoice/monthinvoice');?>"><i class="fa fa-arrow-circle-o-right"></i>This Month Invoice</a></li>
                                            
                                           
                                        </ul>
                                    </li>
                                    
                                
                                </ul>
                            </li>
                            <!---- End Dropdown Menu Field ----->

                             <!-- menu two -->
                            <li class="card nav-item dropdown dropdown-link-hover">
                                <a class="card-link nav-link dropdown-nav-link data-toggle-target" href="#customer" >
                                    <i class="fa fa-plus-square nav-link-left-icon"></i><span class="nav-link-title">Customer</span><i class="fa fa-angle-down nav-link-right-icon"></i>
                                </a>
                                <ul class="dropdown-menu-item collapse" id="customer" data-parent="#accordion2">
                                    <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('customer');?>"><i class="fa fa-plus-square"></i>Add Customer</a></li>
                                     <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('customer/viewcustomer');?>"><i class="fa fa-plus-square"></i>Customer Profile</a></li>

                                     <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('customer/customeramount');?>"><i class="fa fa-plus-square"></i>Customer Amount</a></li>
                                   
                                   
                            
                                   
                                
                                </ul>
                            </li>
                            <!---- End Dropdown Menu Field ----->

                                                      <!-- menu two -->
                                                      <li class="card nav-item dropdown dropdown-link-hover">
                                <a class="card-link nav-link dropdown-nav-link data-toggle-target" href="#supply" >
                                    <i class="fa fa-plus-square nav-link-left-icon"></i><span class="nav-link-title">Supply</span><i class="fa fa-angle-down nav-link-right-icon"></i>
                                </a>
                                <ul class="dropdown-menu-item collapse" id="supply" data-parent="#accordion2">
                                    <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('products/supply');?>"><i class="fa fa-plus-square"></i>Add Supply</a></li>
                                     <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('supply/viewsupply');?>"><i class="fa fa-plus-square"></i>Supply Profile</a></li>
                                     <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('supply/supplyamount');?>"><i class="fa fa-plus-square"></i>Supply Amount</a></li>
                         
                                   
                                
                                </ul>
                            </li>
                            <!---- End Dropdown Menu Field ----->
                           <!-- menu two -->
                            <li class="card nav-item dropdown dropdown-link-hover">
                                <a class="card-link nav-link dropdown-nav-link data-toggle-target" href="#dropdownThree" >
                                    <i class="fa fa-plus-square nav-link-left-icon"></i><span class="nav-link-title">Other</span><i class="fa fa-angle-down nav-link-right-icon"></i>
                                </a>
                                <ul class="dropdown-menu-item collapse" id="dropdownThree" data-parent="#accordion2">
                                    <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('customer/warrenty');?>"><i class="fa fa-plus-square"></i>Warrenty</a></li>
                                    <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('expense');?>"><i class="fa fa-line-chart"></i>Expense</a></li>
                                    <!---- Start Dropdown Sub Menu ----->
                                    <li class="nav-item dropdown-submenu dropdown-toggle-menu"><a  class="nav-link data-toggle-target" href="#dropdownSubFive"  ><i class="fa fa-shopping-bag"></i>Service <i class="fa fa-angle-right dropdown-submenu-icon"></i></a>
                                        <ul class="dropdown-menu dropdown-submenu-item dropdown-submenu-item-show drop-sub-menu-toggle" id="dropdownSubFive">
                                            <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('Service/servicelist');?>"><i class="fa fa-arrow-circle-o-right"></i>Category</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('Service/addservice');?>"><i class="fa fa-arrow-circle-o-right"></i>Add Service</a></li>
                                            
                                            
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown-submenu dropdown-toggle-menu"><a class="nav-link data-toggle-target" href="#dropdownSubSix"  ><i class="fa fa-shopping-bag"></i>Qutation <i class="fa fa-angle-right dropdown-submenu-icon"></i></a>
                                        <ul class="dropdown-menu dropdown-submenu-item dropdown-submenu-item-show drop-sub-menu-toggle" id="dropdownSubSix">
                                            <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('qutation');?>"><i class="fa fa-arrow-circle-o-right"></i>Add Qutation</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('qutation/showqutation');?>"><i class="fa fa-arrow-circle-o-right"></i>View Qutation</a></li>
                                           
                                           
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown-submenu dropdown-toggle-menu"><a class="nav-link data-toggle-target" href="#employee"  ><i class="fa fa-shopping-bag"></i>Employee <i class="fa fa-angle-right dropdown-submenu-icon"></i></a>
                                        <ul class="dropdown-menu dropdown-submenu-item dropdown-submenu-item-show drop-sub-menu-toggle" id="employee">
                                            <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('employee/create');?>"><i class="fa fa-arrow-circle-o-right"></i>Add Employee</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('employee/loan');?>"><i class="fa fa-arrow-circle-o-right"></i>Employee Loan</a></li>
                                            <li class="nav-item"><a  class="nav-link" href="<?php echo base_url('employee/viewemployee');?>"><i class="fa fa-arrow-circle-o-right"></i>View Employee</a></li>
                                           
                                        </ul>
                                    </li>
                                    <!---- End Dropdown Sub Menu ----->
                                    
                                </ul>
                            </li>
                            <!---- End Dropdown Menu Field ----->
                                 <!---- End Dropdown Menu Field ----->
       
                        </ul>
                    </div>
                    <!---- End Left widget Menu Field ----->


                    <!---- Start right widget Menu Field ----->
                     <div class="navbar-collapse" id="rightMenu">
                        <ul class="nav justify-content-end right-dropdown-nav">
                           

                           
                            <!---- Start Profile widget ----->
                            <li class="nav-item dropdown dropdown-link-hover">
                                <a class="nav-link" style="color:#fff;" href="<?php echo base_url('login/logout');?>" >
                                Logout
                                </a>
                                
                            </li>
                            <!---- End Profile widget ----->

                           
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--=================End header part==================================-->

		<!--============================= START CONTENT BODY PART ===================================-->
	
        <div class="content">
            <div class="content-body">
