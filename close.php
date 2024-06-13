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
      <!-- dataTables css -->
      <link href="assets/plugins/datatables/dataTables.min.css" rel="stylesheet" />
      <!-- End Global Mandatory Style
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
                     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" >
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
                           <a class="nav-link admin-notification" href="#"   data-toggle="dropdown">
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
                           <a class="nav-link admin-notification" href="#"   data-toggle="dropdown">
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
                           <a class="nav-link admin-notification" href="#"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                           <a class="nav-link admin-notification" href="#"   data-toggle="dropdown">
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
                           <a class="nav-link hidden_hidden" href="#"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                           <a class="nav-link" href="#"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                     <li class="treeview active">
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
                           <li class="active"><a href="close.html">CLosed</a></li>
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
                  <i class="fa fa-ticket"></i>
               </div>
               <div class="header-title">
                  <h1>Close Tickets</h1>
                  <small>List of Close Tickets</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-lg-12 pinpin">
                        <div class="card lobicard"  data-sortable="true">
                            <div class="card-header">
                                <div class="card-title custom_title">
                                    <a href="#">
                                       <h4>Close Tickets</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                 <div class="table-responsive">
                                    <table class="table table-bordered">
                                       <thead class="back_table_color">
                                          <tr class="info">
                                             <th>Answered Tickets</th>
                                             <th>In Progress Tickets</th>
                                             <th>Open Tickets</th>
                                             <th>Close Tickets</th>
                                             <th>Last 30 Days</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>N/A</td>
                                             <td>N/A</td>
                                             <td>N/A</td>
                                             <td>N/A</td>
                                             <td>N/A</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                        </div>
                     </div>
            </div>
            <div class="row">
                  <div class="col-lg-12 pinpin">
                        <div class="card lobicard"  data-sortable="true">
                            <div class="card-header">
                                <div class="card-title custom_title">
                                    <a href="#">
                                       <h4> Add Tickets</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                 <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                    <div class="btn-group">
                                       <button class="btn btn-exp btn-sm" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button>
                                       <ul class="dropdown-menu exp-drop" role="menu">
                                          <li>
                                             <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false'});"> 
                                             <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON</a>
                                          </li>
                                          <li>
                                             <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});">
                                             <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON (ignoreColumn)</a>
                                          </li>
                                          <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'true'});">
                                             <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON (with Escape)</a>
                                          </li>
                                           <li class="dropdown-divider"></li>
                                          <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'xml',escape:'false'});">
                                             <img src="assets/dist/img/xml.png" width="24" alt="logo"> XML</a>
                                          </li>
                                          <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'sql'});"> 
                                             <img src="assets/dist/img/sql.png" width="24" alt="logo"> SQL</a>
                                          </li>
                                          <li class="dropdown-divider"></li>
                                          <li>
                                             <a href="#" onclick="$('#dataTableExample1').tableExport({type:'csv',escape:'false'});"> 
                                             <img src="assets/dist/img/csv.png" width="24" alt="logo"> CSV</a>
                                          </li>
                                          <li>
                                             <a href="#" onclick="$('#dataTableExample1').tableExport({type:'txt',escape:'false'});"> 
                                             <img src="assets/dist/img/txt.png" width="24" alt="logo"> TXT</a>
                                          </li>
                                           <li class="dropdown-divider"></li>
                                          <li>
                                             <a href="#" onclick="$('#dataTableExample1').tableExport({type:'excel',escape:'false'});"> 
                                             <img src="assets/dist/img/xls.png" width="24" alt="logo"> XLS</a>
                                          </li>
                                          <li>
                                             <a href="#" onclick="$('#dataTableExample1').tableExport({type:'doc',escape:'false'});">
                                             <img src="assets/dist/img/word.png" width="24" alt="logo"> Word</a>
                                          </li>
                                          <li>
                                             <a href="#" onclick="$('#dataTableExample1').tableExport({type:'powerpoint',escape:'false'});"> 
                                             <img src="assets/dist/img/ppt.png" width="24" alt="logo"> PowerPoint</a>
                                          </li>
                                           <li class="dropdown-divider"></li>
                                          <li>
                                             <a href="#" onclick="$('#dataTableExample1').tableExport({type:'png',escape:'false'});"> 
                                             <img src="assets/dist/img/png.png" width="24" alt="logo"> PNG</a>
                                          </li>
                                          <li>
                                             <a href="#" onclick="$('#dataTableExample1').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> 
                                             <img src="assets/dist/img/pdf.png" width="24" alt="logo"> PDF</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                    <div class="table-responsive">
                                       <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                          <thead class="back_table_color">
                                             <tr class="info">
                                                <th>Serial No.</th>
                                                <th>Ticket Code</th>
                                                <th>Subject</th>
                                                <th>Date</th>
                                                <th>Report</th>
                                                <th>Department</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <div class="checkbox checkbox-info">
                                                      <input id="checkbox1" type="checkbox">
                                                      <label for="checkbox1">01</label>
                                                   </div>
                                                </td>
                                                <td>TRC 45654</td>
                                                <td>Fly Biman</td>
                                                <td>05/06/2017</td>
                                                <td>Day shifts</td>
                                                <td>First class</td>
                                                <td><span class="label-custom label label-default">Booked</span>
                                                </td>
                                                <td>
                                                   <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#update"><i class="fa fa-pencil"></i></button>
                                                   <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="checkbox checkbox-info">
                                                      <input id="checkbox2" type="checkbox">
                                                      <label for="checkbox2">02</label>
                                                   </div>
                                                </td>
                                                <td>TRC 45654</td>
                                                <td>Fly Emeters</td>
                                                <td>05/02/2017</td>
                                                <td>Day shifts</td>
                                                <td>First class</td>
                                                <td><span class="label-custom label label-default">Booked</span>
                                                </td>
                                                <td>
                                                   <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#update"><i class="fa fa-pencil"></i></button>
                                                   <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="checkbox checkbox-info">
                                                      <input id="checkbox3" type="checkbox">
                                                      <label for="checkbox3">03</label>
                                                   </div>
                                                </td>
                                                <td>TRC 5423</td>
                                                <td>Air India</td>
                                                <td>05/08/2017</td>
                                                <td>Night shifts</td>
                                                <td>First class</td>
                                                <td><span class="label-danger label label-default">cancel</span>
                                                </td>
                                                <td>
                                                   <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#update"><i class="fa fa-pencil"></i></button>
                                                   <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                        </div>
                     </div>
            </div>
               <!-- User Modal1 -->
               <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-plus m-r-5"></i> Add new ticket</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <div class="row">
                                         <!-- Text input-->
                                         <div class="col-md-6 form-group">
                                          <label class="control-label">Ticket Code</label>
                                          <input type="text" placeholder="Ticket Code" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Subject</label>
                                          <input type="text" placeholder="Subject" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Date</label>
                                          <input type="text" placeholder="Date" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Report</label>
                                          <input type="text" placeholder="Report" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Department</label>
                                          <input type="text" placeholder="Department" class="form-control">
                                       </div>
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Update</button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
               <!-- Modal -->    
               <!-- delete user Modal2 -->
               <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Delete Ticket</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <div class="col-md-12 form-group user-form-group">
                                          <label class="control-label">Delete Ticket</label>
                                          <div class="float-right">
                                             <button type="button" class="btn btn-danger btn-sm">NO</button>
                                             <button type="submit" class="btn btn-add btn-sm">YES</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
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
      <!-- table-export js -->
      <script src="assets/plugins/table-export/tableExport.js" ></script>
      <script src="assets/plugins/table-export/jquery.base64.js" ></script>
      <script src="assets/plugins/table-export/html2canvas.js" ></script>
      <script src="assets/plugins/table-export/sprintf.js" ></script>
      <script src="assets/plugins/table-export/jspdf.js" ></script>
      <script src="assets/plugins/table-export/base64.js" ></script>
      <!-- dataTables js -->
      <script src="assets/plugins/datatables/dataTables.min.js" ></script>
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

