<!DOCTYPE html>
<html lang="en">
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
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start page Label Plugins 
         =====================================================================-->
      <!-- iCheck -->
      <link href="assets/plugins/icheck/skins/all.css" rel="stylesheet" />
      <!-- Bootstrap toggle css -->
      <link href="assets/plugins/bootstrap-toggle/bootstrap4-toggle.min.css" rel="stylesheet" />
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
                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-briefcase"></i>
                        <span>Icons</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left float-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="icons_fontawesome.html">Fontawesome Icon</a></li>
                           <li><a href="icons_flag.html">Flag Icons</a></li>
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
                     <li class="treeview active">
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
                           <li class="active"><a href="icheck_toggle_pagination.html">iCheck, Toggle, Pagination</a></li>
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
               <div class="header-icon"><i class="pe-7s-date"></i></div>
               <div class="header-title">
                  <h1>iCheck, Toggle</h1>
                  <small>A slideshow component for cycling through elements, like a carousel. Nested carousels are not supported.</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                     <div class="col-lg-6 pinpin">
                           <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <h4>Minimal skin</h4>
                                   </div>
                               </div>
                               <div class="card-body custom_lebel">
                                    <div class="skin-minimal">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="i-check">
                                                <input tabindex="5" type="checkbox" id="minimal-checkbox-1">
                                                <label for="minimal-checkbox-1">Checkbox 1</label>
                                             </div>
                                             <div class="i-check">
                                                <input tabindex="6" type="checkbox" id="minimal-checkbox-2" checked>
                                                <label for="minimal-checkbox-2">Checkbox 2</label>
                                             </div>
                                             <div class="i-check">
                                                <input type="checkbox" id="minimal-checkbox-disabled" disabled>
                                                <label for="minimal-checkbox-disabled">Disabled</label>
                                             </div>
                                             <div class="i-check">
                                                <input type="checkbox" id="minimal-checkbox-disabled-checked" checked disabled>
                                                <label for="minimal-checkbox-disabled-checked">Disabled &amp; checked</label>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="i-check">
                                                <input tabindex="7" type="radio" id="minimal-radio-1" name="minimal-radio">
                                                <label for="minimal-radio-1">Radio button 1</label>
                                             </div>
                                             <div class="i-check">
                                                <input tabindex="8" type="radio" id="minimal-radio-2" name="minimal-radio" checked>
                                                <label for="minimal-radio-2">Radio button 2</label>
                                             </div>
                                             <div class="i-check">
                                                <input type="radio" id="minimal-radio-disabled" disabled>
                                                <label for="minimal-radio-disabled">Disabled</label>
                                             </div>
                                             <div class="i-check">
                                                <input type="radio" id="minimal-radio-disabled-checked" checked disabled>
                                                <label for="minimal-radio-disabled-checked">Disabled &amp; checked</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                       </div>
                       <div class="col-lg-6 pinpin">
                           <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <h4>Square skin</h4>
                                   </div>
                               </div>
                               <div class="card-body">
                                    <div class="skin-square">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="i-check">
                                                <input tabindex="9" type="checkbox" id="square-checkbox-1">
                                                <label for="square-checkbox-1">Checkbox 1</label>
                                             </div>
                                             <div class="i-check">
                                                <input tabindex="10" type="checkbox" id="square-checkbox-2" checked>
                                                <label for="square-checkbox-2">Checkbox 2</label>
                                             </div>
                                             <div class="i-check">
                                                <input type="checkbox" id="square-checkbox-disabled" disabled>
                                                <label for="square-checkbox-disabled">Disabled</label>
                                             </div>
                                             <div class="i-check">
                                                <input type="checkbox" id="square-checkbox-disabled-checked" checked disabled>
                                                <label for="square-checkbox-disabled-checked">Disabled &amp; checked</label>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="i-check">
                                                <input tabindex="11" type="radio" id="square-radio-1" name="square-radio">
                                                <label for="square-radio-1">Radio button 1</label>
                                             </div>
                                             <div class="i-check">
                                                <input tabindex="12" type="radio" id="square-radio-2" name="square-radio" checked>
                                                <label for="square-radio-2">Radio button 2</label>
                                             </div>
                                             <div class="i-check">
                                                <input type="radio" id="square-radio-disabled" disabled>
                                                <label for="square-radio-disabled">Disabled</label>
                                             </div>
                                             <div class="i-check">
                                                <input type="radio" id="square-radio-disabled-checked" checked disabled>
                                                <label for="square-radio-disabled-checked">Disabled &amp; checked</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                       </div>
               </div>
               <div class="row">
                     <div class="col-lg-6 pinpin">
                           <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <h4>Flat skin</h4>
                                   </div>
                               </div>
                               <div class="card-body">
                                    <div class="skin-flat">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="i-check">
                                                <input tabindex="13" type="checkbox" id="flat-checkbox-1">
                                                <label for="flat-checkbox-1">Checkbox 1</label>
                                             </div>
                                             <div class="i-check">
                                                <input tabindex="14" type="checkbox" id="flat-checkbox-2" checked>
                                                <label for="flat-checkbox-2">Checkbox 2</label>
                                             </div>
                                             <div class="i-check">
                                                <input type="checkbox" id="flat-checkbox-disabled" disabled>
                                                <label for="flat-checkbox-disabled">Disabled</label>
                                             </div>
                                             <div class="i-check">
                                                <input type="checkbox" id="flat-checkbox-disabled-checked" checked disabled>
                                                <label for="flat-checkbox-disabled-checked">Disabled &amp; checked</label>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="i-check">
                                                <input tabindex="15" type="radio" id="flat-radio-1" name="flat-radio">
                                                <label for="flat-radio-1">Radio button 1</label>
                                             </div>
                                             <div class="i-check">
                                                <input tabindex="16" type="radio" id="flat-radio-2" name="flat-radio" checked>
                                                <label for="flat-radio-2">Radio button 2</label>
                                             </div>
                                             <div class="i-check">
                                                <input type="radio" id="flat-radio-disabled" disabled>
                                                <label for="flat-radio-disabled">Disabled</label>
                                             </div>
                                             <div class="i-check">
                                                <input type="radio" id="flat-radio-disabled-checked" checked disabled>
                                                <label for="flat-radio-disabled-checked">Disabled &amp; checked</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                       </div>
                       <div class="col-lg-6 pinpin">
                           <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <h4>Line skin</h4>
                                   </div>
                               </div>
                               <div class="card-body">
                                    <div class="skin-line">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="i-check">
                                                <input tabindex="17" type="checkbox" id="line-checkbox-1">
                                                <label for="line-checkbox-1">Checkbox 1</label>
                                             </div>
                                             <div class="i-check">
                                                <input tabindex="18" type="checkbox" id="line-checkbox-2" checked>
                                                <label for="line-checkbox-2">Checkbox 2</label>
                                             </div>
                                             <div class="i-check">
                                                <input type="checkbox" id="line-checkbox-disabled" disabled>
                                                <label for="line-checkbox-disabled">Disabled</label>
                                             </div>
                                             <div class="i-check">
                                                <input type="checkbox" id="line-checkbox-disabled-checked" checked disabled>
                                                <label for="line-checkbox-disabled-checked">Disabled &amp; checked</label>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="i-check">
                                                <input tabindex="19" type="radio" id="line-radio-1" name="line-radio">
                                                <label for="line-radio-1">Radio button 1</label>
                                             </div>
                                             <div class="i-check">
                                                <input tabindex="20" type="radio" id="line-radio-2" name="line-radio" checked>
                                                <label for="line-radio-2">Radio button 2</label>
                                             </div>
                                             <div class="i-check">
                                                <input type="radio" id="line-radio-disabled" disabled>
                                                <label for="line-radio-disabled">Disabled</label>
                                             </div>
                                             <div class="i-check">
                                                <input type="radio" id="line-radio-disabled-checked" checked disabled>
                                                <label for="line-radio-disabled-checked">Disabled &amp; checked</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                       </div>
               </div>
               <div class="row">
                     <div class="col-lg-12 pinpin">
                           <div class="card lobicard lobicard-custom-control"  data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <h4>Toggle demo</h4>
                                   </div>
                               </div>
                               <div class="card-body custom_btn_class">
                                    <div class="row">
                                       <div class="col-lg-6 col-md-12 col-sm-12">
                                          <h4 class="m-t-0">Basic example</h4>
                                          <p>Simply add <code>data-toggle="toggle"</code> to convert checkboxes into toggles.</p>
                                          <input type="checkbox" checked data-toggle="toggle">
                                          <hr>
                                          <h4 class="m-t-0">Inline Checkboxes</h4>
                                          <p>Refer to Bootstrap <a href="http://getbootstrap.com/css/#forms-controls" target="_blank">Form 
                                             Controls</a> documentation to create inline checkboxes. Simply add <code>data-toggle="toggle"</code> to
                                             a convert checkboxes into toggles.
                                          </p>
                                          <div class="inline_check">
                                             <label class="checkbox-inline">First</label>
                                             <input type="checkbox" checked data-toggle="toggle"> 
                                            
                                             <label class="checkbox-inline">Second</label>
                                             <input type="checkbox" data-toggle="toggle"> 
                                             
                                             <label class="checkbox-inline">Third</label>
                                             <input type="checkbox" data-toggle="toggle"> 
                                             
                                          </div>
                                          <hr>
                                          <h4 class="m-t-0">Size</h4>
                                          <p>Bootstrap toggle is available in different sizes. Refer to Bootstrap <a href="http://getbootstrap.com/css/#buttons-sizes" target="_blank">Button Sizes</a> documentation for more information.</p>
                                          <div class="toggle-example">
                                             <input type="checkbox" checked data-toggle="toggle" data-size="large">
                                             <input type="checkbox" checked data-toggle="toggle" data-size="normal">
                                             <input type="checkbox" checked data-toggle="toggle" data-size="small">
                                             <input type="checkbox" checked data-toggle="toggle" data-size="mini">
                                          </div>
                                       </div>
                                       <div class="col-lg-6 col-md-12 col-sm-6">
                                          <h4 class="m-t-0">Custom Sizes</h4>
                                          <p>Bootstrap toggle can handle custom sizes by <code>data-width</code> and <code>data-height</code> options.</p>
                                          <div class="toggle-example">
                                             <input type="checkbox" checked data-toggle="toggle" data-width="100" data-height="75">
                                             <input type="checkbox" checked data-toggle="toggle" data-height="75">
                                             <input type="checkbox" checked data-toggle="toggle" data-width="100">
                                          </div>
                                          <hr>
                                          <h4 class="m-t-0">Colors</h4>
                                          <div class="toggle-example">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-offstyle="secondary">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="secondary" data-offstyle="success">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="danger" data-offstyle="warning">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="warning" data-offstyle="info">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="info" data-offstyle="light">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="light" data-offstyle="dark" data-style="border">
                                                <input type="checkbox" checked data-toggle="toggle" data-onstyle="dark" data-offstyle="light" data-style="border">
                                          </div>
                                          <hr>
                                          <h4 class="m-t-0">Colors Mix</h4>
                                          <p>You can style on state as well as the off state.</p>
                                          <div class="toggle-example">
                                             <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                                             <input type="checkbox" checked data-toggle="toggle" data-onstyle="warning" data-offstyle="info">
                                          </div>
                                       </div>
                                    </div>
                                    <hr>
                                    <div class="row custom-checkbox-btn">
                                       <div class="col-lg-6 col-md-6 col-sm-6">
                                          <h4 class="m-t-0">Custom Style</h4>
                                          <div class="toggle-example">
                                            <span> <input type="checkbox" checked data-toggle="toggle" data-style="ios"></span>
                                             <span><input type="checkbox" checked data-toggle="toggle" data-style="android" data-onstyle="info"></span>
                                          </div>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-sm-6">
                                          <h4 class="m-t-0">Custom Text</h4>
                                          <div class="toggle-example">
                                             <input type="checkbox" checked data-toggle="toggle" data-on="Ready" data-off="Not Ready" data-onstyle="success" data-offstyle="danger">
                                          </div>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-sm-6">
                                          <h4 class="m-t-0">Icons/Html Text</h4>
                                          <div class="toggle-example">
                                             <input type="checkbox" checked data-toggle="toggle" data-on="<i class='fa fa-play'></i> Play" data-off="<i class='fa fa-pause'></i> Pause">
                                          </div>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-sm-6">
                                          <h4 class="m-t-0">Multiple Lines of Text</h4>
                                          <div class="toggle-example">
                                             <input type="checkbox" checked data-toggle="toggle" data-on="Hello<br>World" data-off="Goodbye<br>World">
                                          </div>
                                       </div>
                                       <div class="col-lg-6 col-md-6 col-sm-6">
                                          <h4 class="m-t-0">Animation Speed</h4>
                                          <div class="toggle-example">
                                             <input type="checkbox" checked data-toggle="toggle" data-style="slow">
                                             <input type="checkbox" checked data-toggle="toggle" data-class="fast">
                                             <input type="checkbox" checked data-toggle="toggle" data-style="quick">
                                          </div>
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
      <!-- Start Page Lavel Plugins
         =====================================================================-->
      <!-- iCheck js -->
      <script src="assets/plugins/icheck/icheck.min.js" ></script>
      <!-- Bootstrap toggle -->
      <script src="assets/plugins/bootstrap-toggle/bootstrap4-toggle.min.js" ></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" ></script>
      <!-- End Theme label Script
         =====================================================================-->
      <script>
         $('.skin-minimal .i-check input').iCheck({
             checkboxClass: 'icheckbox_minimal',
             radioClass: 'iradio_minimal',
             increaseArea: '20%'
         });
         
         $('.skin-square .i-check input').iCheck({
             checkboxClass: 'icheckbox_square-green',
             radioClass: 'iradio_square-green'
         });
         
         
         $('.skin-flat .i-check input').iCheck({
             checkboxClass: 'icheckbox_flat-red',
             radioClass: 'iradio_flat-red'
         });
         
         $('.skin-line .i-check input').each(function () {
             var self = $(this),
                     label = self.next(),
                     label_text = label.text();
         
             label.remove();
             self.iCheck({
                 checkboxClass: 'icheckbox_line-blue',
                 radioClass: 'iradio_line-blue',
                 insert: '<div class="icheck_line-icon"></div>' + label_text
             });
         });
         
      </script>
   </body>
</html>

