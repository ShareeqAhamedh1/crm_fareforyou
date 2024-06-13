<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>CRM Admin panel</title>
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
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start page Label Plugins 
         =====================================================================-->
      <!-- flag icon css -->
      <link href="assets/flag-icon/css/flag-icon.min.css" rel="stylesheet" />
      <!-- End page Label Plugins 
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="assets/dist/css/stylecrm.css" rel="stylesheet" />
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" />-->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>
   <body class="hold-transition sidebar-mini">
   <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
            <header class="main-header">
                  <a href="index.html" class="logo">
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
                         <li class="nav-item dropdown messages-menu">
                           <a class="nav-link admin-notification" href="#"  role="button" data-toggle="dropdown">
                              <i class="pe-7s-cart"></i>
                              <span class="label bg-primary">5</span>
                           </a>
                           <div class="dropdown-menu drop_drop custom_drop_scroll" >
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
                         </li>
                        <!-- Messages -->
                         <li class="nav-item dropdown messages-menu">
                           <a class="nav-link admin-notification" href="#"  role="button" data-toggle="dropdown">
                              <i class="pe-7s-mail"></i>
                              <span class="label bg-success">5</span>
                           </a>
                           <div class="dropdown-menu drop_drop custom_drop_scroll" >
                             <a class="dropdown-item" href="#">
                                <div class="menue">
                                   <div class="left_item">
                                       <img src="assets/dist/img/avatar.png"  class="rounded-circle" alt="User Image"/>
                                   </div>
                                   <div class="right_item">
                                       <h4>Ronaldo</h4>
                                       <p>Please oreder 10 pices of kits..</p>
                                       <span class="badge badge-success badge-massege"><small>15 hours ago</small>
                                       </span>
                                   </div>
                                </div>
                             </a>
                             <a class="dropdown-item" href="#">
                                <div class="menue">
                                   <div class="left_item pull-left">
                                       <img src="assets/dist/img/avatar2.png"  class="rounded-circle" alt="User Image"/>
                                   </div>
                                   <div class="right_item">
                                       <h4>Leo messi</h4>
                                       <p>Please oreder 10 pices of Sheos..</p>
                                       <span class="badge badge-info badge-massege"><small>6 days ago</small>
                                       </span>   
                                   </div>
                                </div>
                             </a>
                             <a class="dropdown-item" href="#">
                                <div class="menue">
                                   <div class="left_item">
                                       <img src="assets/dist/img/avatar3.png"  class="rounded-circle" alt="User Image"/>
                                   </div>
                                   <div class="right_item">
                                       <h4>Modric</h4>
                                       <p>Please oreder 6 pices of bats..</p>
                                       <span class="badge badge-info badge-massege"><small>1 hour ago</small>
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
                              <span class="label bg-warning">5</span>
                           </a>
                           <div class="dropdown-menu drop_drops custom_drop_scroll" >
                             <a class="dropdown-item" href="#">
                                <div class="menues">
                                    <p>
                                    <i class="fa fa-dot-circle-o color-red"></i>
                                    Change Your font style</p>
                                </div>
                             </a>
                             <a class="dropdown-item" href="#">
                              <div class="menues">
                                 <p>
                                 <i class="fa fa-dot-circle-o color-red"></i>
                                 check the system ststus..</p>
                             </div>
                             </a>
                             <a class="dropdown-item" href="#">
                              <div class="menues">
                                 <p>
                                 <i class="fa fa-dot-circle-o color-red"></i>
                                 Add more admin...</p>
                             </div>
                             </a>
                             <a class="dropdown-item" href="#">
                              <div class="menues">
                                 <p>
                                 <i class="fa fa-dot-circle-o color-red"></i>
                                 Add more clients and order</p>
                             </div>
                             </a>
                             <a class="dropdown-item" href="#">
                              <div class="menues">
                                 <p>
                                 <i class="fa fa-dot-circle-o color-red"></i>
                                 Add more admin...</p>
                             </div>
                             </a>
                             <a class="dropdown-item" href="#">
                              <div class="menues">
                                 <p>
                                 <i class="fa fa-dot-circle-o color-red"></i>
                                 Add more clients and order</p>
                             </div>
                             </a>
                           </div>
                         </li>
                        <!-- Tasks -->
                         <li class="nav-item dropdown tasks-menu">
                           <a class="nav-link admin-notification" href="#"  role="button" data-toggle="dropdown">
                              <i class="pe-7s-note2"></i>
                              <span class="label bg-danger">5</span>
                           </a> 
                           <div class="dropdown-menu drop_dropr custom_drop_scroll" >
                             <a class="dropdown-item" href="#">
                                <div class="menuers">
                                    <div class="single_menuers_item">
                                       <h3><i class="fa fa-check-circle"></i> Theme color should be <span><span class="label label-success float-right">50%</span></span></h3>
                                    </div>
                                </div>
                             </a>
                             <a class="dropdown-item" href="#">
                                <div class="menuers">
                                    <div class="single_menuers_item">
                                       <h3><i class="fa fa-check-circle"></i> Fix Error and bugs <span><span class="label label-warning float-right">90%</span></span></h3>
                                    </div>
                                </div>
                             </a>
                             <a class="dropdown-item" href="#">
                                <div class="menuers">
                                    <div class="single_menuers_item">
                                       <h3><i class="fa fa-check-circle"></i> Sidebar color change <span><span class="label label-danger float-right">80%</span></span></h3>
                                    </div>
                                </div>
                             </a>
                             <a class="dropdown-item" href="#">
                                <div class="menuers">
                                    <div class="single_menuers_item">
                                       <h3><i class="fa fa-check-circle"></i> font-family should be  <span><span class="label label-info float-right">30%</span></span></h3>
                                    </div>
                                </div>
                             </a>
                             <a class="dropdown-item" href="#">
                                <div class="menuers">
                                    <div class="single_menuers_item">
                                       <h3><i class="fa fa-check-circle"></i> Fix the database Error <span><span class="label label-success float-right">60%</span></span></h3>
                                    </div>
                                </div>
                             </a>
                             <a class="dropdown-item" href="#">
                                <div class="menuers">
                                    <div class="single_menuers_item">
                                       <h3><i class="fa fa-check-circle"></i> data table data missing <span><span class="label label-info float-right">20%</span></span></h3>
                                    </div>
                                </div>
                             </a>
                           </div>
                         </li>
                        <!-- Help -->
                         <li class="nav-item dropdown  dropdown-help">
                           <a class="nav-link hidden_hidden" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <i class="pe-7s-settings"></i></a>
                           
                           <div class="dropdown-menu drop_down" >
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
                           
                           <div class="dropdown-menu drop_down" >
                                <div class="menus">
                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> User Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-inbox"></i> Inbox</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Signout</a>
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
                     <li class="treeview">
                        <a href="index.html"><i class="fa fa-tachometer"></i><span>Dashboard</span>
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
                           <li><a href="add-customer.html">Add Customer</a></li>
                           <li><a href="clist.html">List</a></li>
                           <li><a href="group.html">Groups</a></li>
                        </ul>
                     </li>
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-shopping-basket"></i><span>Transaction</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="deposit.html">New Deposit</a></li>
                           <li><a href="expense.html">New Expense</a></li>
                           <li><a href="transfer.html">Transfer</a></li>
                           <li><a href="view-tsaction.html">View transaction</a></li>
                           <li><a href="balance.html">Balance Sheet</a></li>
                           <li><a href="treport.html">Transfer Report</a></li>
                        </ul>
                     </li>
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-shopping-cart"></i><span>Sales</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="invoice.html">Invoices</a></li>
                           <li><a href="ninvoices.html">New Invoices</a></li>
                           <li><a href="recurring.html">Recurring invoices</a></li>
                           <li><a href="nrecurring.html">New Recurring invoices</a></li>
                           <li><a href="quote.html">quotes</a></li>
                           <li><a href="nquote.html">New quote</a></li>
                           <li><a href="payment.html">Payments</a></li>
                           <li><a href="taxeport.html">Tax Rates</a></li>
                        </ul>
                     </li>
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-book"></i><span>Task</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="rtask.html">Running Task</a></li>
                           <li><a href="atask.html">Archive Task</a></li>
                        </ul>
                     </li>
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-shopping-bag"></i><span>Accounting</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="cpayment.html">Client payment</a></li>
                           <li><a href="emanage.html">Expense management</a></li>
                           <li><a href="ecategory.html">Expense Category</a></li>
                        </ul>
                     </li>
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-file-text"></i><span>Report</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="preport.html">Project Report</a></li>
                           <li><a href="creport.html">Client Report</a></li>
                           <li><a href="ereport.html">Expense Report</a></li>
                           <li><a href="incomexp.html">Income expense comparesion</a></li>
                        </ul>
                     </li>
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-bell"></i><span>Attendance</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="thistory.html">Time History</a></li>
                           <li><a href="timechange.html">Time Change Request</a></li>
                           <li><a href="atreport.html">Attendance Report</a></li>
                        </ul>
                     </li>
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-edit"></i><span>Recruitment</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="jpost.html">Jobs Posted</a></li>
                           <li><a href="japp.html">Jobs Application</a></li>
                        </ul>
                     </li>
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-shopping-basket"></i><span>payroll</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="salary.html">Salary Template</a></li>
                           <li><a href="hourly.html">Hourly</a></li>
                           <li><a href="managesal.html">Manage salary</a></li>
                           <li><a href="empsallist.html">Employee salary list</a></li>
                           <li><a href="mpayment.html">Make payment</a></li>
                           <li><a href="generatepay.html">Generate payslip</a></li>
                           <li><a href="paysum.html">Payroll summary</a></li>
                        </ul>
                     </li>
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-bitbucket-square"></i><span>Stock</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="stockcat.html">Stock category</a></li>
                           <li><a href="manstock.html">Manage Stock</a></li>
                           <li><a href="astock.html">Assign stock</a></li>
                        </ul>
                     </li>
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-ticket"></i><span>Tickets</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="ticanswer.html">Answered</a></li>
                           <li><a href="ticopen.html">Open</a></li>
                           <li><a href="iprocess.html">Inprocess</a></li>
                           <li><a href="close.html">CLosed</a></li>
                           <li><a href="allticket.html">All Tickets</a></li>
                        </ul>
                     </li>
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-list"></i>
                        <span>Utilities</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="ativitylog.html">Activity Log</a></li>
                           <li><a href="emailmes.html">Email message log</a></li>
                           <li><a href="systemsts.html">System status</a></li>
                        </ul>
                     </li>
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-bar-chart"></i><span>Charts</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li class=""><a href="charts_flot.html">Flot Chart</a></li>
                           <li><a href="charts_Js.html">Chart js</a></li>
                           <li><a href="charts_morris.html">Morris Charts</a></li>
                           <li><a href="charts_sparkline.html">Sparkline Charts</a></li>
                        </ul>
                     </li>
                     <li class="treeview active">
                        <a href="#">
                        <i class="fa fa-briefcase"></i>
                        <span>Icons</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="icons_fontawesome.html">Fontawesome Icon</a></li>
                           <li class="active"><a href="icons_flag.html">Flag Icons</a></li>
                           <li><a href="icons_material.html">Material Icons</a></li>
                           <li><a href="icons_weather.html">Weather Icons </a></li>
                           <li><a href="icons_line.html">Line Icons</a></li>
                           <li><a href="icons_pe.html">Pe Icons</a></li>
                           <li><a href="icon_socicon.html">Socicon Icons</a></li>
                        </ul>
                     </li>
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-list"></i> <span>Other page</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="login.html">Login</a></li>
                           <li><a href="register.html">Register</a></li>
                           <li><a href="profile.html">Profile</a></li>
                           <li><a href="forget_password.html">Forget password</a></li>
                           <li><a href="lockscreen.html">Lockscreen</a></li>
                           <li><a href="404.html">404 Error</a></li>
                           <li><a href="505.html">505 Error</a></li>
                           <li><a href="blank.html">Blank Page</a></li>
                        </ul>
                     </li>
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-bitbucket"></i><span>UI Elements</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="buttons.html">Buttons</a></li>
                           <li><a href="tabs.html">Tabs</a></li>
                           <li><a href="notification.html">Notification</a></li>
                           <li><a href="tree-view.html">Tree View</a></li>
                           <li><a href="progressbars.html">Progressber</a></li>
                           <li><a href="list.html">List View</a></li>
                           <li><a href="typography.html">Typography</a></li>
                           <li><a href="panels.html">Panels</a></li>
                           <li><a href="modals.html">Modals</a></li>
                           <li><a href="icheck_toggle_pagination.html">iCheck, Toggle, Pagination</a></li>
                           <li><a href="labels-badges-alerts.html">Labels, Badges, Alerts</a></li>
                        </ul>
                     </li>
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-gear"></i>
                        <span>settings</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="gsetting.html">Genaral settings</a></li>
                           <li><a href="stfsetting.html">Staff settings</a></li>
                           <li><a href="emailsetting.html">Email settings</a></li>
                           <li><a href="paysetting.html">Payment</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="company.html">
                        <i class="fa fa-home"></i> <span>Companies</span>
                        <span class="pull-right-container">
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="holiday.html">
                        <i class="fa fa-stop-circle"></i> <span>Public Holiday</span>
                        <span class="pull-right-container">
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="user.html">
                        <i class="fa fa-user-circle"></i><span>User</span>
                        <span class="pull-right-container">
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="items.html">
                        <i class="fa fa-file-o"></i><span>Items</span>
                        <span class="pull-right-container">
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="department.html">
                        <i class="fa fa-tree"></i><span>Departments</span>
                        <span class="pull-right-container">
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="document.html">
                        <i class="fa fa-file-text"></i> <span>Documents</span>
                        <span class="pull-right-container">
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="train.html">
                        <i class="fa fa-clock-o"></i><span>Training</span>
                        <span class="pull-right-container">
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="calender.html">
                        <i class="fa fa-calendar"></i> <span>Calender</span>
                        <span class="pull-right-container">
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="notice.html">
                        <i class="fa fa-file-text"></i> <span>Notice Board</span>
                        <span class="pull-right-container">
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="message.html">
                        <i class="fa fa-envelope-o"></i> <span>Message</span>
                        <span class="pull-right-container">
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="note.html">
                        <i class="fa fa-comment"></i> <span>Notes</span>
                        <span class="pull-right-container">
                        </span>
                        </a>
                     </li>
                  </ul>
               </div>
               <!-- /.sidebar -->
            </aside>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-flag-o"></i>
               </div>
               <div class="header-title">
                  <h1>Flag Icons</h1>
                  <small>A collection of all country flags in SVG — plus the CSS for easier integration.</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12 pinpin">
                           <div class="card lobicard"  data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <a href="#">
                                             <h4>Flag icon world</h4>
                                       </a>
                                   </div>
                               </div>
                               <div class="card-body">
                                    <div class="panel-body">
                                          <div class="flag-icon-inner">
                                             <ul class="icon_list">
                                                <li>
                                                   <i class="flag-icon flag-icon-ad"></i>
                                                   <span class="icon_name">flag-icon-ad</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ae"></i>
                                                   <span class="icon_name">flag-icon-ae</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-af"></i>
                                                   <span class="icon_name">flag-icon-af</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ag"></i>
                                                   <span class="icon_name">flag-icon-ag</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ai"></i>
                                                   <span class="icon_name">flag-icon-ai</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-al"></i>
                                                   <span class="icon_name">flag-icon-al</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-am"></i>
                                                   <span class="icon_name">flag-icon-am</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ao"></i>
                                                   <span class="icon_name">flag-icon-ao</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-aq"></i>
                                                   <span class="icon_name">flag-icon-aq</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ar"></i>
                                                   <span class="icon_name">flag-icon-ar</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-as"></i>
                                                   <span class="icon_name">flag-icon-as</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-at"></i>
                                                   <span class="icon_name">flag-icon-at</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-au"></i>
                                                   <span class="icon_name">flag-icon-au</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-aw"></i>
                                                   <span class="icon_name">flag-icon-aw</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ax"></i>
                                                   <span class="icon_name">flag-icon-ax</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ba"></i>
                                                   <span class="icon_name">flag-icon-ba</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bb"></i>
                                                   <span class="icon_name">flag-icon-bb</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bd"></i>
                                                   <span class="icon_name">flag-icon-bd</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-be"></i>
                                                   <span class="icon_name">flag-icon-be</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bf"></i>
                                                   <span class="icon_name">flag-icon-bf</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bg"></i>
                                                   <span class="icon_name">flag-icon-bg</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bh"></i>
                                                   <span class="icon_name">flag-icon-bh</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bi"></i>
                                                   <span class="icon_name">flag-icon-bi</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bj"></i>
                                                   <span class="icon_name">flag-icon-bj</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bl"></i>
                                                   <span class="icon_name">flag-icon-bl</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bm"></i>
                                                   <span class="icon_name">flag-icon-bm</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bn"></i>
                                                   <span class="icon_name">flag-icon-bn</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bo"></i>
                                                   <span class="icon_name">flag-icon-bo</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bq"></i>
                                                   <span class="icon_name">flag-icon-bq</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-br"></i>
                                                   <span class="icon_name">flag-icon-br</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bs"></i>
                                                   <span class="icon_name">flag-icon-bs</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bt"></i>
                                                   <span class="icon_name">flag-icon-bt</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bv"></i>
                                                   <span class="icon_name">flag-icon-bv</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bw"></i>
                                                   <span class="icon_name">flag-icon-bw</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-by"></i>
                                                   <span class="icon_name">flag-icon-by</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-bz"></i>
                                                   <span class="icon_name">flag-icon-bz</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ca"></i>
                                                   <span class="icon_name">flag-icon-ca</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-cc"></i>
                                                   <span class="icon_name">flag-icon-cc</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-cd"></i>
                                                   <span class="icon_name">flag-icon-cd</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-cf"></i>
                                                   <span class="icon_name">flag-icon-cf</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-cg"></i>
                                                   <span class="icon_name">flag-icon-cg</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ch"></i>
                                                   <span class="icon_name">flag-icon-ch</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ci"></i>
                                                   <span class="icon_name">flag-icon-ci</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ck"></i>
                                                   <span class="icon_name">flag-icon-ck</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-cl"></i>
                                                   <span class="icon_name">flag-icon-cl</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-cm"></i>
                                                   <span class="icon_name">flag-icon-cm</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-cn"></i>
                                                   <span class="icon_name">flag-icon-cn</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-co"></i>
                                                   <span class="icon_name">flag-icon-co</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-cr"></i>
                                                   <span class="icon_name">flag-icon-cr</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-cu"></i>
                                                   <span class="icon_name">flag-icon-cu</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-cv"></i>
                                                   <span class="icon_name">flag-icon-cv</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-cw"></i>
                                                   <span class="icon_name">flag-icon-cw</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-cx"></i>
                                                   <span class="icon_name">flag-icon-cx</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-cy"></i>
                                                   <span class="icon_name">flag-icon-cy</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-cz"></i>
                                                   <span class="icon_name">flag-icon-cz</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-de"></i>
                                                   <span class="icon_name">flag-icon-de</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-dj"></i>
                                                   <span class="icon_name">flag-icon-dj</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-dk"></i>
                                                   <span class="icon_name">flag-icon-dk</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-dm"></i>
                                                   <span class="icon_name">flag-icon-dm</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-do"></i>
                                                   <span class="icon_name">flag-icon-do</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-dz"></i>
                                                   <span class="icon_name">flag-icon-dz</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ec"></i>
                                                   <span class="icon_name">flag-icon-ec</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ee"></i>
                                                   <span class="icon_name">flag-icon-ee</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-eg"></i>
                                                   <span class="icon_name">flag-icon-eg</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-eh"></i>
                                                   <span class="icon_name">flag-icon-eh</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-er"></i>
                                                   <span class="icon_name">flag-icon-er</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-es"></i>
                                                   <span class="icon_name">flag-icon-es</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-et"></i>
                                                   <span class="icon_name">flag-icon-et</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-fi"></i>
                                                   <span class="icon_name">flag-icon-fi</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-fj"></i>
                                                   <span class="icon_name">flag-icon-fj</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-fk"></i>
                                                   <span class="icon_name">flag-icon-fk</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-fm"></i>
                                                   <span class="icon_name">flag-icon-fm</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-fo"></i>
                                                   <span class="icon_name">flag-icon-fo</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-fr"></i>
                                                   <span class="icon_name">flag-icon-fr</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ga"></i>
                                                   <span class="icon_name">flag-icon-ga</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gb"></i>
                                                   <span class="icon_name">flag-icon-gb</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gd"></i>
                                                   <span class="icon_name">flag-icon-gd</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ge"></i>
                                                   <span class="icon_name">flag-icon-ge</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gf"></i>
                                                   <span class="icon_name">flag-icon-gf</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gg"></i>
                                                   <span class="icon_name">flag-icon-gg</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gh"></i>
                                                   <span class="icon_name">flag-icon-gh</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gi"></i>
                                                   <span class="icon_name">flag-icon-gi</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gl"></i>
                                                   <span class="icon_name">flag-icon-gl</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gm"></i>
                                                   <span class="icon_name">flag-icon-gm</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gn"></i>
                                                   <span class="icon_name">flag-icon-gn</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gp"></i>
                                                   <span class="icon_name">flag-icon-gp</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gq"></i>
                                                   <span class="icon_name">flag-icon-gq</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gr"></i>
                                                   <span class="icon_name">flag-icon-gr</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gs"></i>
                                                   <span class="icon_name">flag-icon-gs</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gt"></i>
                                                   <span class="icon_name">flag-icon-gt</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gu"></i>
                                                   <span class="icon_name">flag-icon-gu</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gw"></i>
                                                   <span class="icon_name">flag-icon-gw</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gy"></i>
                                                   <span class="icon_name">flag-icon-gy</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-hk"></i>
                                                   <span class="icon_name">flag-icon-hk</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-hm"></i>
                                                   <span class="icon_name">flag-icon-hm</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-hn"></i>
                                                   <span class="icon_name">flag-icon-hn</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-hr"></i>
                                                   <span class="icon_name">flag-icon-hr</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ht"></i>
                                                   <span class="icon_name">flag-icon-ht</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-hu"></i>
                                                   <span class="icon_name">flag-icon-hu</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-id"></i>
                                                   <span class="icon_name">flag-icon-id</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ie"></i>
                                                   <span class="icon_name">flag-icon-ie</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-il"></i>
                                                   <span class="icon_name">flag-icon-il</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-im"></i>
                                                   <span class="icon_name">flag-icon-im</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-in"></i>
                                                   <span class="icon_name">flag-icon-in</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-io"></i>
                                                   <span class="icon_name">flag-icon-io</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-iq"></i>
                                                   <span class="icon_name">flag-icon-iq</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ir"></i>
                                                   <span class="icon_name">flag-icon-ir</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-is"></i>
                                                   <span class="icon_name">flag-icon-is</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-it"></i>
                                                   <span class="icon_name">flag-icon-it</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-je"></i>
                                                   <span class="icon_name">flag-icon-je</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-jm"></i>
                                                   <span class="icon_name">flag-icon-jm</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-jo"></i>
                                                   <span class="icon_name">flag-icon-jo</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-jp"></i>
                                                   <span class="icon_name">flag-icon-jp</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ke"></i>
                                                   <span class="icon_name">flag-icon-ke</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-kg"></i>
                                                   <span class="icon_name">flag-icon-kg</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-kh"></i>
                                                   <span class="icon_name">flag-icon-kh</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ki"></i>
                                                   <span class="icon_name">flag-icon-ki</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-km"></i>
                                                   <span class="icon_name">flag-icon-km</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-kn"></i>
                                                   <span class="icon_name">flag-icon-kn</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-kp"></i>
                                                   <span class="icon_name">flag-icon-kp</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-kr"></i>
                                                   <span class="icon_name">flag-icon-kr</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-kw"></i>
                                                   <span class="icon_name">flag-icon-kw</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ky"></i>
                                                   <span class="icon_name">flag-icon-ky</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-kz"></i>
                                                   <span class="icon_name">flag-icon-kz</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-la"></i>
                                                   <span class="icon_name">flag-icon-la</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-lb"></i>
                                                   <span class="icon_name">flag-icon-lb</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-lc"></i>
                                                   <span class="icon_name">flag-icon-lc</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-li"></i>
                                                   <span class="icon_name">flag-icon-li</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-lk"></i>
                                                   <span class="icon_name">flag-icon-lk</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-lr"></i>
                                                   <span class="icon_name">flag-icon-lr</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ls"></i>
                                                   <span class="icon_name">flag-icon-ls</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-lt"></i>
                                                   <span class="icon_name">flag-icon-lt</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-lu"></i>
                                                   <span class="icon_name">flag-icon-lu</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-lv"></i>
                                                   <span class="icon_name">flag-icon-lv</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ly"></i>
                                                   <span class="icon_name">flag-icon-ly</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ma"></i>
                                                   <span class="icon_name">flag-icon-ma</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mc"></i>
                                                   <span class="icon_name">flag-icon-mc</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-md"></i>
                                                   <span class="icon_name">flag-icon-md</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-me"></i>
                                                   <span class="icon_name">flag-icon-me</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mf"></i>
                                                   <span class="icon_name">flag-icon-mf</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mg"></i>
                                                   <span class="icon_name">flag-icon-mg</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mh"></i>
                                                   <span class="icon_name">flag-icon-mh</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mk"></i>
                                                   <span class="icon_name">flag-icon-mk</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ml"></i>
                                                   <span class="icon_name">flag-icon-ml</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mm"></i>
                                                   <span class="icon_name">flag-icon-mm</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mn"></i>
                                                   <span class="icon_name">flag-icon-mn</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mo"></i>
                                                   <span class="icon_name">flag-icon-mo</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mp"></i>
                                                   <span class="icon_name">flag-icon-mp</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mq"></i>
                                                   <span class="icon_name">flag-icon-mq</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mr"></i>
                                                   <span class="icon_name">flag-icon-mr</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ms"></i>
                                                   <span class="icon_name">flag-icon-ms</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mt"></i>
                                                   <span class="icon_name">flag-icon-mt</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mu"></i>
                                                   <span class="icon_name">flag-icon-mu</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mv"></i>
                                                   <span class="icon_name">flag-icon-mv</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mw"></i>
                                                   <span class="icon_name">flag-icon-mw</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mx"></i>
                                                   <span class="icon_name">flag-icon-mx</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-my"></i>
                                                   <span class="icon_name">flag-icon-my</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-mz"></i>
                                                   <span class="icon_name">flag-icon-mz</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-na"></i>
                                                   <span class="icon_name">flag-icon-na</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-nc"></i>
                                                   <span class="icon_name">flag-icon-nc</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ne"></i>
                                                   <span class="icon_name">flag-icon-ne</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-nf"></i>
                                                   <span class="icon_name">flag-icon-nf</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ng"></i>
                                                   <span class="icon_name">flag-icon-ng</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ni"></i>
                                                   <span class="icon_name">flag-icon-ni</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-nl"></i>
                                                   <span class="icon_name">flag-icon-nl</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-no"></i>
                                                   <span class="icon_name">flag-icon-no</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-np"></i>
                                                   <span class="icon_name">flag-icon-np</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-nr"></i>
                                                   <span class="icon_name">flag-icon-nr</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-nu"></i>
                                                   <span class="icon_name">flag-icon-nu</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-nz"></i>
                                                   <span class="icon_name">flag-icon-nz</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-om"></i>
                                                   <span class="icon_name">flag-icon-om</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-pa"></i>
                                                   <span class="icon_name">flag-icon-pa</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-pe"></i>
                                                   <span class="icon_name">flag-icon-pe</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-pf"></i>
                                                   <span class="icon_name">flag-icon-pf</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-pg"></i>
                                                   <span class="icon_name">flag-icon-pg</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ph"></i>
                                                   <span class="icon_name">flag-icon-ph</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-pk"></i>
                                                   <span class="icon_name">flag-icon-pk</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-pl"></i>
                                                   <span class="icon_name">flag-icon-pl</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-pm"></i>
                                                   <span class="icon_name">flag-icon-pm</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-pn"></i>
                                                   <span class="icon_name">flag-icon-pn</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-pr"></i>
                                                   <span class="icon_name">flag-icon-pr</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ps"></i>
                                                   <span class="icon_name">flag-icon-ps</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-pt"></i>
                                                   <span class="icon_name">flag-icon-pt</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-pw"></i>
                                                   <span class="icon_name">flag-icon-pw</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-py"></i>
                                                   <span class="icon_name">flag-icon-py</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-qa"></i>
                                                   <span class="icon_name">flag-icon-qa</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-re"></i>
                                                   <span class="icon_name">flag-icon-re</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ro"></i>
                                                   <span class="icon_name">flag-icon-ro</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-rs"></i>
                                                   <span class="icon_name">flag-icon-rs</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ru"></i>
                                                   <span class="icon_name">flag-icon-ru</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-rw"></i>
                                                   <span class="icon_name">flag-icon-rw</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-sa"></i>
                                                   <span class="icon_name">flag-icon-sa</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-sb"></i>
                                                   <span class="icon_name">flag-icon-sb</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-sc"></i>
                                                   <span class="icon_name">flag-icon-sc</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-sd"></i>
                                                   <span class="icon_name">flag-icon-sd</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-se"></i>
                                                   <span class="icon_name">flag-icon-se</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-sg"></i>
                                                   <span class="icon_name">flag-icon-sg</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-sh"></i>
                                                   <span class="icon_name">flag-icon-sh</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-si"></i>
                                                   <span class="icon_name">flag-icon-si</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-sj"></i>
                                                   <span class="icon_name">flag-icon-sj</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-sk"></i>
                                                   <span class="icon_name">flag-icon-sk</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-sl"></i>
                                                   <span class="icon_name">flag-icon-sl</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-sm"></i>
                                                   <span class="icon_name">flag-icon-sm</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-sn"></i>
                                                   <span class="icon_name">flag-icon-sn</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-so"></i>
                                                   <span class="icon_name">flag-icon-so</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-sr"></i>
                                                   <span class="icon_name">flag-icon-sr</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ss"></i>
                                                   <span class="icon_name">flag-icon-ss</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-st"></i>
                                                   <span class="icon_name">flag-icon-st</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-sv"></i>
                                                   <span class="icon_name">flag-icon-sv</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-sx"></i>
                                                   <span class="icon_name">flag-icon-sx</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-sy"></i>
                                                   <span class="icon_name">flag-icon-sy</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-sz"></i>
                                                   <span class="icon_name">flag-icon-sz</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-tc"></i>
                                                   <span class="icon_name">flag-icon-tc</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-td"></i>
                                                   <span class="icon_name">flag-icon-td</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-tf"></i>
                                                   <span class="icon_name">flag-icon-tf</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-tg"></i>
                                                   <span class="icon_name">flag-icon-tg</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-th"></i>
                                                   <span class="icon_name">flag-icon-th</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-tj"></i>
                                                   <span class="icon_name">flag-icon-tj</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-tk"></i>
                                                   <span class="icon_name">flag-icon-tk</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-tl"></i>
                                                   <span class="icon_name">flag-icon-tl</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-tm"></i>
                                                   <span class="icon_name">flag-icon-tm</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-tn"></i>
                                                   <span class="icon_name">flag-icon-tn</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-to"></i>
                                                   <span class="icon_name">flag-icon-to</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-tr"></i>
                                                   <span class="icon_name">flag-icon-tr</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-tt"></i>
                                                   <span class="icon_name">flag-icon-tt</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-tv"></i>
                                                   <span class="icon_name">flag-icon-tv</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-tw"></i>
                                                   <span class="icon_name">flag-icon-tw</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-tz"></i>
                                                   <span class="icon_name">flag-icon-tz</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ua"></i>
                                                   <span class="icon_name">flag-icon-ua</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ug"></i>
                                                   <span class="icon_name">flag-icon-ug</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-um"></i>
                                                   <span class="icon_name">flag-icon-um</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-us"></i>
                                                   <span class="icon_name">flag-icon-us</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-uy"></i>
                                                   <span class="icon_name">flag-icon-uy</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-uz"></i>
                                                   <span class="icon_name">flag-icon-uz</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-va"></i>
                                                   <span class="icon_name">flag-icon-va</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-vc"></i>
                                                   <span class="icon_name">flag-icon-vc</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ve"></i>
                                                   <span class="icon_name">flag-icon-ve</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-vg"></i>
                                                   <span class="icon_name">flag-icon-vg</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-vi"></i>
                                                   <span class="icon_name">flag-icon-vi</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-vn"></i>
                                                   <span class="icon_name">flag-icon-vn</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-vu"></i>
                                                   <span class="icon_name">flag-icon-vu</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-wf"></i>
                                                   <span class="icon_name">flag-icon-wf</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ws"></i>
                                                   <span class="icon_name">flag-icon-ws</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-ye"></i>
                                                   <span class="icon_name">flag-icon-ye</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-yt"></i>
                                                   <span class="icon_name">flag-icon-yt</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-za"></i>
                                                   <span class="icon_name">flag-icon-za</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-zm"></i>
                                                   <span class="icon_name">flag-icon-zm</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-zw"></i>
                                                   <span class="icon_name">flag-icon-zw</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-eu"></i>
                                                   <span class="icon_name">flag-icon-eu</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gb-eng"></i>
                                                   <span class="icon_name">flag-icon-gb-eng</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gb-sct"></i>
                                                   <span class="icon_name">flag-icon-gb-sct</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-gb-wls"></i>
                                                   <span class="icon_name">flag-icon-gb-wls</span>
                                                </li>
                                                <li>
                                                   <i class="flag-icon flag-icon-un"></i>
                                                   <span class="icon_name">flag-icon-un</span>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                 </div>
                           </div>
                     </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <strong>Copyright &copy; 2016-2017 <a href="#">thememinister</a>.</strong> All rights reserved.
         </footer>
      </div>
      <!-- ./wrapper -->
      <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
      <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" ></script>
      <!-- Bootstrap proper -->
      <script src="assets/bootstrap/js/popper.min.js" ></script>
      <!-- lobicard ui min js -->
      <script src="assets/plugins/lobipanel/js/jquery-ui.min.js" ></script>
      <!-- lobicard ui touch-punch-improved js -->
      <script src="assets/plugins/lobipanel/js/jquery.ui.touch-punch-improved.js"></script>
      <!-- lobicard tether min js -->
      <script src="assets/plugins/lobipanel/js/tether.min.js" ></script>
      <!-- Bootstrap -->
      <script src="assets/bootstrap/js/bootstrap.min.js" ></script>
      <!-- lobicard js -->
      <script src="assets/plugins/lobipanel/js/lobicard.js" ></script>
      <!-- lobicard highlight js -->
      <script src="assets/plugins/lobipanel/js/highlight.js" ></script>
      <!-- Pace js -->
      <script src="assets/plugins/pace/pace.min.js" ></script>
     <!-- NiceScroll -->
     <script src="assets/plugins/slimScroll/jquery.nicescroll.min.js" > </script>
      <!-- FastClick -->
      <script src="assets/plugins/fastclick/fastclick.min.js" ></script>
      <!-- CRMadmin frame -->
      <script src="assets/dist/js/custom.js" ></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" ></script>
      <!-- End Theme label Script
         =====================================================================-->
   </body>
</html>

