<?php
 include './backend/website/conn.php';

 if(!isset($_SESSION['u_id'])){
   header('location:login.php');
   exit();
 }


 $u_type=$_SESSION['u_type'];

 ?>
<!DOCTYPE html>
<php lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>CRM Admin Panel</title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->

      <!-- lobicard tather css -->
      <link rel="stylesheet" href="assets/plugins/lobipanel/css/tether.min.css" />
      <!-- Bootstrap -->
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
       <!-- lobicard tather css -->
      <link rel="stylesheet" href="assets/plugins/lobipanel/css/jquery-ui.min.css" />
      <!-- lobicard min css -->
      <link href="assets/plugins/lobipanel/css/lobicard.min.css" rel="stylesheet" />
      <!-- lobicard github css -->
      <link href="assets/plugins/lobipanel/css/github.css" rel="stylesheet" />
      <!-- Pace css -->
      <link href="assets/plugins/pace/flash.css" rel="stylesheet" />
      <!-- Font Awesome -->
      <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Pe-icon -->
      <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" />
      <!-- Themify icons -->
      <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" />
      <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" />
      <!-- Monthly css -->
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

      <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" />
      <link href="assets/dist/css/stylecrm.css" rel="stylesheet" />
      <link rel="stylesheet" href="assets/my.css?v=01">
   </head>
   <body class="hold-transition sidebar-mini">
      <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
         <header class="main-header">
            <a href="index.php" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               <img src="assets/dist/img/mini-logo.png" alt="">
               </span>
               <span class="logo-lg">
               <img src="assets/dist/img/logo.png" alt="">
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-expand py-0">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="pe-7s-angle-left-circle"></span>
               </a>
               <!-- searchbar-->
               <a href="#search"><span class="pe-7s-search"></span></a>
               <div id="search">
                  <button type="button" class="close">×</button>
                  <form>
                     <input type="search" value="" placeholder="Search.." />
                     <button type="submit" class="btn btn-add">Search...</button>
                  </form>
               </div>
               <div class="collapse navbar-collapse navbar-custom-menu" >
                 <ul class="navbar-nav ml-auto">
                  <!-- Orders -->
                   <!-- <li class="nav-item dropdown messages-menu">
                     <a class="nav-link admin-notification" href="#"  role="button" data-toggle="dropdown">
                        <i class="pe-7s-cart"></i>
                        <span class="label bg-primary">5</span>
                     </a>
                     <div class="dropdown-menu drop_drop custom_drop_scroll">
                       <a class="dropdown-item" href="#">
                          <div class="menue">
                             <div class="left_item">
                                 <img src="assets/dist/img/basketball-jersey.png" class="img-thumbnail" alt="User Image">
                             </div>
                             <div class="right_item">
                                 <h4>polo shirt</h4>
                                 <p><strong>total item:</strong> 21
                                 </p>
                             </div>
                          </div>
                       </a>
                       <a class="dropdown-item" href="#">
                          <div class="menue">
                             <div class="left_item">
                                 <img src="assets/dist/img/shirt.png" class="img-thumbnail" alt="User Image"/>
                             </div>
                             <div class="right_item">
                                 <h4>Kits</h4>
                                 <p><strong>total item:</strong> 11
                                 </p>
                             </div>
                          </div>
                       </a>
                       <a class="dropdown-item" href="#">
                          <div class="menue">
                             <div class="left_item">
                                 <img src="assets/dist/img/football.png" class="img-thumbnail" alt="User Image"/>
                             </div>
                             <div class="right_item">
                                 <h4>Football</h4>
                                 <p><strong>total item:</strong> 16
                                 </p>
                             </div>
                          </div>
                       </a>
                       <a class="dropdown-item" href="#">
                          <div class="menue">
                             <div class="left_item">
                                 <img src="assets/dist/img/shoe.png" class="img-thumbnail" alt="User Image"/>
                             </div>
                             <div class="right_item">
                                 <h4>Sports sheos</h4>
                                 <p><strong>total item:</strong> 10
                                 </p>
                             </div>
                          </div>
                       </a>
                     </div>
                   </li> -->
                  <!-- Messages -->
                   <li class="nav-item dropdown messages-menu">
                     <a class="nav-link admin-notification" href="#"  role="button" data-toggle="dropdown">
                        <i class="pe-7s-mail"></i>
                        <span class="label bg-success">0</span>
                     </a>
                     <div class="dropdown-menu drop_drop custom_drop_scroll">
                       <a class="dropdown-item" href="#">
                          <div class="menue">
                             <div class="left_item">
                                 <img src="assets/dist/img/avatar.png"  class="rounded-circle" alt="User Image"/>
                             </div>
                             <div class="right_item">
                                 <h4>Admin</h4>
                                 <p>Please complete your works</p>
                                 <span class="badge badge-success badge-massege"><small>15 hours ago</small>
                                 </span>
                             </div>
                          </div>
                       </a>
                     </div>
                   </li>
                  <!-- Notifications -->
                   <li class="nav-item dropdown notifications-menu">
                     <a class="nav-link admin-notification" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="pe-7s-bell"></i>
                        <span class="label bg-warning">0</span>
                     </a>
                     <div class="dropdown-menu drop_drops custom_drop_scroll">
                       <a class="dropdown-item" href="#">
                          <div class="menues">
                              <p>
                              <i class="fa fa-dot-circle-o color-red"></i>
                              Change Your font style</p>
                          </div>
                       </a>
                     </div>
                   </li>

                  <!-- Help -->
                   <li class="nav-item dropdown  dropdown-help">
                     <a class="nav-link hidden_hidden" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="pe-7s-settings"></i></a>

                     <div class="dropdown-menu drop_down">
                        <div class="menus">
                           <a class="dropdown-item" href="#"> <i class="fa fa-line-chart"></i> Networking</a>
                           <a class="dropdown-item" href="#"><i class="fa fa fa-bullhorn"></i> Lan settings</a>
                           <a class="dropdown-item" href="#"><i class="fa fa-bar-chart"></i> Settings</a>
                           <a class="dropdown-item" href="#"><i class="fa fa-wifi"></i> wifi</a>
                        </div>
                     </div>
                   </li>
                  <!-- User -->
                   <li class="nav-item dropdown dropdown-user">
                     <a class="nav-link" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <img src="assets/dist/img/avatar5.png" class="rounded-circle" width="50" height="50" alt="user"></a>

                     <div class="dropdown-menu drop_down">
                          <div class="menus">
                              <a class="dropdown-item" href="profile.php"><i class="fa fa-user"></i> User Profile</a>
                              <a class="dropdown-item" href="#"><i class="fa fa-inbox"></i> Inbox</a>
                              <a class="dropdown-item" href="backend/website/logout.php"><i class="fa fa-sign-out"></i> Signout</a>
                          </div>
                     </div>
                   </li>
                 </ul>
               </div>
             </nav>
            </header>
         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">

                  <li class="">
                     <a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i><span>Customers</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left float-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="add-customer.php">Add Customer</a></li>
                        <li><a href="clist.php">List</a></li>
                        <li><a href="group.php">Groups</a></li>
                     </ul>
                  </li>
                  <?php
                     if ($u_type!=4) {
                        ?>

                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-shopping-basket"></i><span>Transaction</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left float-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="deposit.php">New Deposit</a></li>
                        <li><a href="expense.php">New Expense</a></li>
                        <li><a href="transfer.php">Transfer</a></li>
                        <li><a href="view-tsaction.php">View transaction</a></li>
                        <li><a href="balance.php">Balance Sheet</a></li>
                        <li><a href="treport.php">Transfer Report</a></li>
                     </ul>
                  </li>
                  <?php
                     }
                  ?>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-shopping-cart"></i><span>Sales</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left float-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="invoice.php">Invoices</a></li>
                        <li><a href="void_invoice.php">Voided Invoices</a></li>
                        <li><a href="ninvoices.php">New Invoices</a></li>
                        <li><a href="add_s_packages.php">Tour Packages</a></li>
                        <li><a href="add_s_hotel_v.php">Vendors</a></li>
                        <li><a href="add_s_flights_v.php">Flights Vendors</a></li>
                        <li><a href="add_s_leads_v.php">Add Leads</a></li>
                        <!-- <li><a href="payment.php">Payments</a></li> -->
                        <!-- <li><a href="taxeport.php">Tax Rates</a></li> -->
                     </ul>
                  </li>
                  <!-- <li class="treeview">
                     <a href="#">
                     <i class="fa fa-book"></i><span>Task</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left float-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="rtask.php">Running Task</a></li>
                        <li><a href="atask.php">Archive Task</a></li>
                     </ul>
                  </li> -->
                  <?php
                     if ($u_type!=4) {
                        ?>

                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-shopping-bag"></i><span>Payments & Recipts</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left float-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="paynow_multiple.php">Quick Recipt</a></li>
                        <li><a href="view_recipts.php">View Recipts</a></li>
                        <li><a href="payment_method.php">Payment Method</a></li>
                        <li><a href="payments_to_vendor.php">Payment To Vendor</a></li>
                     </ul>
                  </li>

                  <?php
                     }
                  ?>
                  <?php
                     if ($u_type == 1) {
                        ?>

                                          <li class="treeview">
                                             <a href="#">
                                             <i class="fa fa-file-text"></i><span>Report</span>
                                             <span class="pull-right-container">
                                             <i class="fa fa-angle-left float-right"></i>
                                             </span>
                                             </a>
                                             <ul class="treeview-menu">
                                                <li><a href="payment_plan.php">Customer Report</a></li>
                                             </ul>
                                          </li>
                  <li>
                     <a href="user.php">
                     <i class="fa fa-user-circle"></i><span>User</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>

                  <?php
                     }
                  ?>
                  <!-- <li>
                     <a href="items.php">
                     <i class="fa fa-file-o"></i><span>Items</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="department.php">
                     <i class="fa fa-tree"></i><span>Departments</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="document.php">
                     <i class="fa fa-file-text"></i> <span>Documents</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="train.php">
                     <i class="fa fa-clock-o"></i><span>Training</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="calender.php">
                     <i class="fa fa-calendar"></i> <span>Calender</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li> -->
                  <li>
                     <a href="notice.php">
                     <i class="fa fa-file-text"></i> <span>Notice Board</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>

                  <?php
                     if ($u_type!=4) {
                        ?>

                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-shopping-basket"></i><span>Website</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left float-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="add_packages.php">Add packages</a></li>
                        <li><a href="add_packages_cat.php">Add packages Category</a></li>
                        <li><a href="add_airline.php">Add Airline</a></li>
                        <li><a href="add_flight.php">Add Flights</a></li>
                        <li><a href="pack_list.php">Package list</a></li>
                        <li><a href="add_continent.php">Add Continent</a></li>
                        <li><a href="add_country.php">Add Country</a></li>
                        <li><a href="flight_list.php">Flight list</a></li>
                        <!-- <li><a href="continent_list.php">Continent list</a></li>
                        <li><a href="country_list.php">Country list</a></li> -->
                     </ul>
                  </li>

                  <?php
                     }
                  ?>

                  <!-- <li>
                     <a href="message.php">
                     <i class="fa fa-envelope-o"></i> <span>Message</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="note.php">
                     <i class="fa fa-comment"></i> <span>Notes</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li> -->
               </ul>
            </div>
            <!-- /.sidebar -->
         </aside>
