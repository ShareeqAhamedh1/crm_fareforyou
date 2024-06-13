<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
      <!-- Social icon css -->
      <link href="assets/socicon/social.css" rel="stylesheet" />
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
                           <li><a href="icons_flag.html">Flag Icons</a></li>
                           <li><a href="icons_material.html">Material Icons</a></li>
                           <li><a href="icons_weather.html">Weather Icons </a></li>
                           <li><a href="icons_line.html">Line Icons</a></li>
                           <li><a href="icons_pe.html">Pe Icons</a></li>
                           <li class="active"><a href="icon_socicon.html">Socicon Icons</a></li>
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
                  <i class="fa fa-tags"></i>
               </div>
               <div class="header-title">
                  <h1>Social Icons</h1>
                  <small>Glyphs, primary colors, unicodes</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12 pinpin">
                           <div class="card lobicard" id="lobicard-custom-controls" data-sortable="true">
                               <div class="card-header">
                                   <div class="card-title custom_title">
                                       <a href="#">
                                             <h4>CSS mapping</h4>
                                       </a>
                                   </div>
                               </div>
                              <div class="card-body">
                                    <ul class="glyphs css-mapping">
                                          <li>
                                             <div class="icon socicon-modelmayhem"></div>
                                             <input type="text" readonly="readonly" value="modelmayhem">
                                          </li>
                                          <li>
                                             <div class="icon socicon-mixcloud"></div>
                                             <input type="text" readonly="readonly" value="mixcloud">
                                          </li>
                                          <li>
                                             <div class="icon socicon-drupal"></div>
                                             <input type="text" readonly="readonly" value="drupal">
                                          </li>
                                          <li>
                                             <div class="icon socicon-swarm"></div>
                                             <input type="text" readonly="readonly" value="swarm">
                                          </li>
                                          <li>
                                             <div class="icon socicon-istock"></div>
                                             <input type="text" readonly="readonly" value="istock">
                                          </li>
                                          <li>
                                             <div class="icon socicon-yammer"></div>
                                             <input type="text" readonly="readonly" value="yammer">
                                          </li>
                                          <li>
                                             <div class="icon socicon-ello"></div>
                                             <input type="text" readonly="readonly" value="ello">
                                          </li>
                                          <li>
                                             <div class="icon socicon-stackoverflow"></div>
                                             <input type="text" readonly="readonly" value="stackoverflow">
                                          </li>
                                          <li>
                                             <div class="icon socicon-persona"></div>
                                             <input type="text" readonly="readonly" value="persona">
                                          </li>
                                          <li>
                                             <div class="icon socicon-triplej"></div>
                                             <input type="text" readonly="readonly" value="triplej">
                                          </li>
                                          <li>
                                             <div class="icon socicon-houzz"></div>
                                             <input type="text" readonly="readonly" value="houzz">
                                          </li>
                                          <li>
                                             <div class="icon socicon-rss"></div>
                                             <input type="text" readonly="readonly" value="rss">
                                          </li>
                                          <li>
                                             <div class="icon socicon-paypal"></div>
                                             <input type="text" readonly="readonly" value="paypal">
                                          </li>
                                          <li>
                                             <div class="icon socicon-odnoklassniki"></div>
                                             <input type="text" readonly="readonly" value="odnoklassniki">
                                          </li>
                                          <li>
                                             <div class="icon socicon-airbnb"></div>
                                             <input type="text" readonly="readonly" value="airbnb">
                                          </li>
                                          <li>
                                             <div class="icon socicon-periscope"></div>
                                             <input type="text" readonly="readonly" value="periscope">
                                          </li>
                                          <li>
                                             <div class="icon socicon-outlook"></div>
                                             <input type="text" readonly="readonly" value="outlook">
                                          </li>
                                          <li>
                                             <div class="icon socicon-coderwall"></div>
                                             <input type="text" readonly="readonly" value="coderwall">
                                          </li>
                                          <li>
                                             <div class="icon socicon-tripadvisor"></div>
                                             <input type="text" readonly="readonly" value="tripadvisor">
                                          </li>
                                          <li>
                                             <div class="icon socicon-appnet"></div>
                                             <input type="text" readonly="readonly" value="appnet">
                                          </li>
                                          <li>
                                             <div class="icon socicon-goodreads"></div>
                                             <input type="text" readonly="readonly" value="goodreads">
                                          </li>
                                          <li>
                                             <div class="icon socicon-tripit"></div>
                                             <input type="text" readonly="readonly" value="tripit">
                                          </li>
                                          <li>
                                             <div class="icon socicon-lanyrd"></div>
                                             <input type="text" readonly="readonly" value="lanyrd">
                                          </li>
                                          <li>
                                             <div class="icon socicon-slideshare"></div>
                                             <input type="text" readonly="readonly" value="slideshare">
                                          </li>
                                          <li>
                                             <div class="icon socicon-buffer"></div>
                                             <input type="text" readonly="readonly" value="buffer">
                                          </li>
                                          <li>
                                             <div class="icon socicon-disqus"></div>
                                             <input type="text" readonly="readonly" value="disqus">
                                          </li>
                                          <li>
                                             <div class="icon socicon-vkontakte"></div>
                                             <input type="text" readonly="readonly" value="vkontakte">
                                          </li>
                                          <li>
                                             <div class="icon socicon-whatsapp"></div>
                                             <input type="text" readonly="readonly" value="whatsapp">
                                          </li>
                                          <li>
                                             <div class="icon socicon-patreon"></div>
                                             <input type="text" readonly="readonly" value="patreon">
                                          </li>
                                          <li>
                                             <div class="icon socicon-storehouse"></div>
                                             <input type="text" readonly="readonly" value="storehouse">
                                          </li>
                                          <li>
                                             <div class="icon socicon-pocket"></div>
                                             <input type="text" readonly="readonly" value="pocket">
                                          </li>
                                          <li>
                                             <div class="icon socicon-mail"></div>
                                             <input type="text" readonly="readonly" value="mail">
                                          </li>
                                          <li>
                                             <div class="icon socicon-blogger"></div>
                                             <input type="text" readonly="readonly" value="blogger">
                                          </li>
                                          <li>
                                             <div class="icon socicon-technorati"></div>
                                             <input type="text" readonly="readonly" value="technorati">
                                          </li>
                                          <li>
                                             <div class="icon socicon-reddit"></div>
                                             <input type="text" readonly="readonly" value="reddit">
                                          </li>
                                          <li>
                                             <div class="icon socicon-dribbble"></div>
                                             <input type="text" readonly="readonly" value="dribbble">
                                          </li>
                                          <li>
                                             <div class="icon socicon-stumbleupon"></div>
                                             <input type="text" readonly="readonly" value="stumbleupon">
                                          </li>
                                          <li>
                                             <div class="icon socicon-digg"></div>
                                             <input type="text" readonly="readonly" value="digg">
                                          </li>
                                          <li>
                                             <div class="icon socicon-envato"></div>
                                             <input type="text" readonly="readonly" value="envato">
                                          </li>
                                          <li>
                                             <div class="icon socicon-behance"></div>
                                             <input type="text" readonly="readonly" value="behance">
                                          </li>
                                          <li>
                                             <div class="icon socicon-delicious"></div>
                                             <input type="text" readonly="readonly" value="delicious">
                                          </li>
                                          <li>
                                             <div class="icon socicon-deviantart"></div>
                                             <input type="text" readonly="readonly" value="deviantart">
                                          </li>
                                          <li>
                                             <div class="icon socicon-forrst"></div>
                                             <input type="text" readonly="readonly" value="forrst">
                                          </li>
                                          <li>
                                             <div class="icon socicon-play"></div>
                                             <input type="text" readonly="readonly" value="play">
                                          </li>
                                          <li>
                                             <div class="icon socicon-zerply"></div>
                                             <input type="text" readonly="readonly" value="zerply">
                                          </li>
                                          <li>
                                             <div class="icon socicon-wikipedia"></div>
                                             <input type="text" readonly="readonly" value="wikipedia">
                                          </li>
                                          <li>
                                             <div class="icon socicon-apple"></div>
                                             <input type="text" readonly="readonly" value="apple">
                                          </li>
                                          <li>
                                             <div class="icon socicon-flattr"></div>
                                             <input type="text" readonly="readonly" value="flattr">
                                          </li>
                                          <li>
                                             <div class="icon socicon-github"></div>
                                             <input type="text" readonly="readonly" value="github">
                                          </li>
                                          <li>
                                             <div class="icon socicon-renren"></div>
                                             <input type="text" readonly="readonly" value="renren">
                                          </li>
                                          <li>
                                             <div class="icon socicon-friendfeed"></div>
                                             <input type="text" readonly="readonly" value="friendfeed">
                                          </li>
                                          <li>
                                             <div class="icon socicon-newsvine"></div>
                                             <input type="text" readonly="readonly" value="newsvine">
                                          </li>
                                          <li>
                                             <div class="icon socicon-identica"></div>
                                             <input type="text" readonly="readonly" value="identica">
                                          </li>
                                          <li>
                                             <div class="icon socicon-bebo"></div>
                                             <input type="text" readonly="readonly" value="bebo">
                                          </li>
                                          <li>
                                             <div class="icon socicon-zynga"></div>
                                             <input type="text" readonly="readonly" value="zynga">
                                          </li>
                                          <li>
                                             <div class="icon socicon-steam"></div>
                                             <input type="text" readonly="readonly" value="steam">
                                          </li>
                                          <li>
                                             <div class="icon socicon-xbox"></div>
                                             <input type="text" readonly="readonly" value="xbox">
                                          </li>
                                          <li>
                                             <div class="icon socicon-windows"></div>
                                             <input type="text" readonly="readonly" value="windows">
                                          </li>
                                          <li>
                                             <div class="icon socicon-qq"></div>
                                             <input type="text" readonly="readonly" value="qq">
                                          </li>
                                          <li>
                                             <div class="icon socicon-douban"></div>
                                             <input type="text" readonly="readonly" value="douban">
                                          </li>
                                          <li>
                                             <div class="icon socicon-meetup"></div>
                                             <input type="text" readonly="readonly" value="meetup">
                                          </li>
                                          <li>
                                             <div class="icon socicon-playstation"></div>
                                             <input type="text" readonly="readonly" value="playstation">
                                          </li>
                                          <li>
                                             <div class="icon socicon-android"></div>
                                             <input type="text" readonly="readonly" value="android">
                                          </li>
                                          <li>
                                             <div class="icon socicon-snapchat"></div>
                                             <input type="text" readonly="readonly" value="snapchat">
                                          </li>
                                          <li>
                                             <div class="icon socicon-twitter"></div>
                                             <input type="text" readonly="readonly" value="twitter">
                                          </li>
                                          <li>
                                             <div class="icon socicon-facebook"></div>
                                             <input type="text" readonly="readonly" value="facebook">
                                          </li>
                                          <li>
                                             <div class="icon socicon-googleplus"></div>
                                             <input type="text" readonly="readonly" value="googleplus">
                                          </li>
                                          <li>
                                             <div class="icon socicon-pinterest"></div>
                                             <input type="text" readonly="readonly" value="pinterest">
                                          </li>
                                          <li>
                                             <div class="icon socicon-foursquare"></div>
                                             <input type="text" readonly="readonly" value="foursquare">
                                          </li>
                                          <li>
                                             <div class="icon socicon-yahoo"></div>
                                             <input type="text" readonly="readonly" value="yahoo">
                                          </li>
                                          <li>
                                             <div class="icon socicon-skype"></div>
                                             <input type="text" readonly="readonly" value="skype">
                                          </li>
                                          <li>
                                             <div class="icon socicon-yelp"></div>
                                             <input type="text" readonly="readonly" value="yelp">
                                          </li>
                                          <li>
                                             <div class="icon socicon-feedburner"></div>
                                             <input type="text" readonly="readonly" value="feedburner">
                                          </li>
                                          <li>
                                             <div class="icon socicon-linkedin"></div>
                                             <input type="text" readonly="readonly" value="linkedin">
                                          </li>
                                          <li>
                                             <div class="icon socicon-viadeo"></div>
                                             <input type="text" readonly="readonly" value="viadeo">
                                          </li>
                                          <li>
                                             <div class="icon socicon-xing"></div>
                                             <input type="text" readonly="readonly" value="xing">
                                          </li>
                                          <li>
                                             <div class="icon socicon-myspace"></div>
                                             <input type="text" readonly="readonly" value="myspace">
                                          </li>
                                          <li>
                                             <div class="icon socicon-soundcloud"></div>
                                             <input type="text" readonly="readonly" value="soundcloud">
                                          </li>
                                          <li>
                                             <div class="icon socicon-spotify"></div>
                                             <input type="text" readonly="readonly" value="spotify">
                                          </li>
                                          <li>
                                             <div class="icon socicon-grooveshark"></div>
                                             <input type="text" readonly="readonly" value="grooveshark">
                                          </li>
                                          <li>
                                             <div class="icon socicon-lastfm"></div>
                                             <input type="text" readonly="readonly" value="lastfm">
                                          </li>
                                          <li>
                                             <div class="icon socicon-youtube"></div>
                                             <input type="text" readonly="readonly" value="youtube">
                                          </li>
                                          <li>
                                             <div class="icon socicon-vimeo"></div>
                                             <input type="text" readonly="readonly" value="vimeo">
                                          </li>
                                          <li>
                                             <div class="icon socicon-dailymotion"></div>
                                             <input type="text" readonly="readonly" value="dailymotion">
                                          </li>
                                          <li>
                                             <div class="icon socicon-vine"></div>
                                             <input type="text" readonly="readonly" value="vine">
                                          </li>
                                          <li>
                                             <div class="icon socicon-flickr"></div>
                                             <input type="text" readonly="readonly" value="flickr">
                                          </li>
                                          <li>
                                             <div class="icon socicon-500px"></div>
                                             <input type="text" readonly="readonly" value="500px">
                                          </li>
                                          <li>
                                             <div class="icon socicon-wordpress"></div>
                                             <input type="text" readonly="readonly" value="wordpress">
                                          </li>
                                          <li>
                                             <div class="icon socicon-tumblr"></div>
                                             <input type="text" readonly="readonly" value="tumblr">
                                          </li>
                                          <li>
                                             <div class="icon socicon-twitch"></div>
                                             <input type="text" readonly="readonly" value="twitch">
                                          </li>
                                          <li>
                                             <div class="icon socicon-8tracks"></div>
                                             <input type="text" readonly="readonly" value="8tracks">
                                          </li>
                                          <li>
                                             <div class="icon socicon-amazon"></div>
                                             <input type="text" readonly="readonly" value="amazon">
                                          </li>
                                          <li>
                                             <div class="icon socicon-icq"></div>
                                             <input type="text" readonly="readonly" value="icq">
                                          </li>
                                          <li>
                                             <div class="icon socicon-smugmug"></div>
                                             <input type="text" readonly="readonly" value="smugmug">
                                          </li>
                                          <li>
                                             <div class="icon socicon-ravelry"></div>
                                             <input type="text" readonly="readonly" value="ravelry">
                                          </li>
                                          <li>
                                             <div class="icon socicon-weibo"></div>
                                             <input type="text" readonly="readonly" value="weibo">
                                          </li>
                                          <li>
                                             <div class="icon socicon-baidu"></div>
                                             <input type="text" readonly="readonly" value="baidu">
                                          </li>
                                          <li>
                                             <div class="icon socicon-angellist"></div>
                                             <input type="text" readonly="readonly" value="angellist">
                                          </li>
                                          <li>
                                             <div class="icon socicon-ebay"></div>
                                             <input type="text" readonly="readonly" value="ebay">
                                          </li>
                                          <li>
                                             <div class="icon socicon-imdb"></div>
                                             <input type="text" readonly="readonly" value="imdb">
                                          </li>
                                          <li>
                                             <div class="icon socicon-stayfriends"></div>
                                             <input type="text" readonly="readonly" value="stayfriends">
                                          </li>
                                          <li>
                                             <div class="icon socicon-residentadvisor"></div>
                                             <input type="text" readonly="readonly" value="residentadvisor">
                                          </li>
                                          <li>
                                             <div class="icon socicon-google"></div>
                                             <input type="text" readonly="readonly" value="google">
                                          </li>
                                          <li>
                                             <div class="icon socicon-yandex"></div>
                                             <input type="text" readonly="readonly" value="yandex">
                                          </li>
                                          <li>
                                             <div class="icon socicon-sharethis"></div>
                                             <input type="text" readonly="readonly" value="sharethis">
                                          </li>
                                          <li>
                                             <div class="icon socicon-bandcamp"></div>
                                             <input type="text" readonly="readonly" value="bandcamp">
                                          </li>
                                          <li>
                                             <div class="icon socicon-itunes"></div>
                                             <input type="text" readonly="readonly" value="itunes">
                                          </li>
                                          <li>
                                             <div class="icon socicon-deezer"></div>
                                             <input type="text" readonly="readonly" value="deezer">
                                          </li>
                                          <li>
                                             <div class="icon socicon-telegram"></div>
                                             <input type="text" readonly="readonly" value="telegram">
                                          </li>
                                          <li>
                                             <div class="icon socicon-openid"></div>
                                             <input type="text" readonly="readonly" value="openid">
                                          </li>
                                          <li>
                                             <div class="icon socicon-amplement"></div>
                                             <input type="text" readonly="readonly" value="amplement">
                                          </li>
                                          <li>
                                             <div class="icon socicon-viber"></div>
                                             <input type="text" readonly="readonly" value="viber">
                                          </li>
                                          <li>
                                             <div class="icon socicon-zomato"></div>
                                             <input type="text" readonly="readonly" value="zomato">
                                          </li>
                                          <li>
                                             <div class="icon socicon-draugiem"></div>
                                             <input type="text" readonly="readonly" value="draugiem">
                                          </li>
                                          <li>
                                             <div class="icon socicon-endomodo"></div>
                                             <input type="text" readonly="readonly" value="endomodo">
                                          </li>
                                          <li>
                                             <div class="icon socicon-filmweb"></div>
                                             <input type="text" readonly="readonly" value="filmweb">
                                          </li>
                                          <li>
                                             <div class="icon socicon-stackexchange"></div>
                                             <input type="text" readonly="readonly" value="stackexchange">
                                          </li>
                                          <li>
                                             <div class="icon socicon-wykop"></div>
                                             <input type="text" readonly="readonly" value="wykop">
                                          </li>
                                          <li>
                                             <div class="icon socicon-teamspeak"></div>
                                             <input type="text" readonly="readonly" value="teamspeak">
                                          </li>
                                          <li>
                                             <div class="icon socicon-teamviewer"></div>
                                             <input type="text" readonly="readonly" value="teamviewer">
                                          </li>
                                          <li>
                                             <div class="icon socicon-ventrilo"></div>
                                             <input type="text" readonly="readonly" value="ventrilo">
                                          </li>
                                          <li>
                                             <div class="icon socicon-younow"></div>
                                             <input type="text" readonly="readonly" value="younow">
                                          </li>
                                          <li>
                                             <div class="icon socicon-raidcall"></div>
                                             <input type="text" readonly="readonly" value="raidcall">
                                          </li>
                                          <li>
                                             <div class="icon socicon-mumble"></div>
                                             <input type="text" readonly="readonly" value="mumble">
                                          </li>
                                          <li>
                                             <div class="icon socicon-medium"></div>
                                             <input type="text" readonly="readonly" value="medium">
                                          </li>
                                          <li>
                                             <div class="icon socicon-bebee"></div>
                                             <input type="text" readonly="readonly" value="bebee">
                                          </li>
                                          <li>
                                             <div class="icon socicon-hitbox"></div>
                                             <input type="text" readonly="readonly" value="hitbox">
                                          </li>
                                          <li>
                                             <div class="icon socicon-reverbnation"></div>
                                             <input type="text" readonly="readonly" value="reverbnation">
                                          </li>
                                          <li>
                                             <div class="icon socicon-formulr"></div>
                                             <input type="text" readonly="readonly" value="formulr">
                                          </li>
                                          <li>
                                             <div class="icon socicon-instagram"></div>
                                             <input type="text" readonly="readonly" value="instagram">
                                          </li>
                                          <li>
                                             <div class="icon socicon-battlenet"></div>
                                             <input type="text" readonly="readonly" value="battlenet">
                                          </li>
                                          <li>
                                             <div class="icon socicon-chrome"></div>
                                             <input type="text" readonly="readonly" value="chrome">
                                          </li>
                                          <li>
                                             <div class="icon socicon-discord"></div>
                                             <input type="text" readonly="readonly" value="discord">
                                          </li>
                                          <li>
                                             <div class="icon socicon-issuu"></div>
                                             <input type="text" readonly="readonly" value="issuu">
                                          </li>
                                          <li>
                                             <div class="icon socicon-macos"></div>
                                             <input type="text" readonly="readonly" value="macos">
                                          </li>
                                          <li>
                                             <div class="icon socicon-firefox"></div>
                                             <input type="text" readonly="readonly" value="firefox">
                                          </li>
                                          <li>
                                             <div class="icon socicon-opera"></div>
                                             <input type="text" readonly="readonly" value="opera">
                                          </li>
                                          <li>
                                             <div class="icon socicon-keybase"></div>
                                             <input type="text" readonly="readonly" value="keybase">
                                          </li>
                                          <li>
                                             <div class="icon socicon-alliance"></div>
                                             <input type="text" readonly="readonly" value="alliance">
                                          </li>
                                          <li>
                                             <div class="icon socicon-livejournal"></div>
                                             <input type="text" readonly="readonly" value="livejournal">
                                          </li>
                                          <li>
                                             <div class="icon socicon-googlephotos"></div>
                                             <input type="text" readonly="readonly" value="googlephotos">
                                          </li>
                                          <li>
                                             <div class="icon socicon-horde"></div>
                                             <input type="text" readonly="readonly" value="horde">
                                          </li>
                                          <li>
                                             <div class="icon socicon-etsy"></div>
                                             <input type="text" readonly="readonly" value="etsy">
                                          </li>
                                          <li>
                                             <div class="icon socicon-zapier"></div>
                                             <input type="text" readonly="readonly" value="zapier">
                                          </li>
                                          <li>
                                             <div class="icon socicon-google-scholar"></div>
                                             <input type="text" readonly="readonly" value="google-scholar">
                                          </li>
                                          <li>
                                             <div class="icon socicon-researchgate"></div>
                                             <input type="text" readonly="readonly" value="researchgate">
                                          </li>
                                          <li>
                                             <div class="icon socicon-wechat"></div>
                                             <input type="text" readonly="readonly" value="wechat">
                                          </li>
                                          <li>
                                             <div class="icon socicon-strava"></div>
                                             <input type="text" readonly="readonly" value="strava">
                                          </li>
                                          <li>
                                             <div class="icon socicon-line"></div>
                                             <input type="text" readonly="readonly" value="line">
                                          </li>
                                          <li>
                                             <div class="icon socicon-lyft"></div>
                                             <input type="text" readonly="readonly" value="lyft">
                                          </li>
                                          <li>
                                             <div class="icon socicon-uber"></div>
                                             <input type="text" readonly="readonly" value="uber">
                                          </li>
                                          <li>
                                             <div class="icon socicon-songkick"></div>
                                             <input type="text" readonly="readonly" value="songkick">
                                          </li>
                                          <li>
                                             <div class="icon socicon-viewbug"></div>
                                             <input type="text" readonly="readonly" value="viewbug">
                                          </li>
                                          <li>
                                             <div class="icon socicon-googlegroups"></div>
                                             <input type="text" readonly="readonly" value="googlegroups">
                                          </li>
                                          <li>
                                             <div class="icon socicon-quora"></div>
                                             <input type="text" readonly="readonly" value="quora">
                                          </li>
                                          <li>
                                             <div class="icon socicon-diablo"></div>
                                             <input type="text" readonly="readonly" value="diablo">
                                          </li>
                                          <li>
                                             <div class="icon socicon-blizzard"></div>
                                             <input type="text" readonly="readonly" value="blizzard">
                                          </li>
                                          <li>
                                             <div class="icon socicon-hearthstone"></div>
                                             <input type="text" readonly="readonly" value="hearthstone">
                                          </li>
                                          <li>
                                             <div class="icon socicon-heroes"></div>
                                             <input type="text" readonly="readonly" value="heroes">
                                          </li>
                                          <li>
                                             <div class="icon socicon-overwatch"></div>
                                             <input type="text" readonly="readonly" value="overwatch">
                                          </li>
                                          <li>
                                             <div class="icon socicon-warcraft"></div>
                                             <input type="text" readonly="readonly" value="warcraft">
                                          </li>
                                          <li>
                                             <div class="icon socicon-starcraft"></div>
                                             <input type="text" readonly="readonly" value="starcraft">
                                          </li>
                                          <li>
                                             <div class="icon socicon-beam"></div>
                                             <input type="text" readonly="readonly" value="beam">
                                          </li>
                                          <li>
                                             <div class="icon socicon-curse"></div>
                                             <input type="text" readonly="readonly" value="curse">
                                          </li>
                                          <li>
                                             <div class="icon socicon-player"></div>
                                             <input type="text" readonly="readonly" value="player">
                                          </li>
                                          <li>
                                             <div class="icon socicon-streamjar"></div>
                                             <input type="text" readonly="readonly" value="streamjar">
                                          </li>
                                          <li>
                                             <div class="icon socicon-nintendo"></div>
                                             <input type="text" readonly="readonly" value="nintendo">
                                          </li>
                                          <li>
                                             <div class="icon socicon-hellocoton"></div>
                                             <input type="text" readonly="readonly" value="hellocoton">
                                          </li>
                                       </ul>
                                       <h4>Character mapping</h4>
                                       <ul class="glyphs character-mapping">
                                          <li>
                                             <div data-icon="&#xe000;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe000;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe001;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe001;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe002;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe002;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe003;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe003;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe004;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe004;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe005;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe005;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe006;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe006;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe007;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe007;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe008;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe008;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe009;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe009;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe00a;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe00a;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe00b;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe00b;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe00c;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe00c;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe00d;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe00d;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe00e;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe00e;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe00f;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe00f;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe010;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe010;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe011;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe011;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe012;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe012;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe013;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe013;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe014;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe014;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe015;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe015;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe016;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe016;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe017;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe017;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe018;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe018;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe019;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe019;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe01a;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe01a;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe01b;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe01b;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe01c;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe01c;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe01d;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe01d;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe01e;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe01e;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe01f;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe01f;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe020;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe020;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe021;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe021;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe022;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe022;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe023;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe023;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe024;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe024;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe025;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe025;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe026;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe026;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe027;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe027;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe028;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe028;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe029;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe029;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe02a;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe02a;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe02b;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe02b;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe02c;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe02c;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe02d;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe02d;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe02e;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe02e;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe02f;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe02f;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe030;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe030;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe031;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe031;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe032;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe032;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe033;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe033;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe034;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe034;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe035;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe035;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe036;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe036;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe037;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe037;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe038;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe038;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe039;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe039;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe03a;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe03a;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe03b;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe03b;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe03c;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe03c;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe03d;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe03d;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe03e;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe03e;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe03f;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe03f;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe040;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe040;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe041;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe041;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe042;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe042;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe043;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe043;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe044;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe044;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe045;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe045;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe046;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe046;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe047;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe047;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe048;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe048;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe049;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe049;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe04a;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe04a;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe04b;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe04b;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe04c;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe04c;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe04d;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe04d;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe04e;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe04e;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe04f;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe04f;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe050;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe050;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe051;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe051;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe052;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe052;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe053;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe053;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe054;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe054;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe055;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe055;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe056;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe056;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe058;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe058;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe059;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe059;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe05a;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe05a;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe05b;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe05b;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe05c;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe05c;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe05d;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe05d;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe05e;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe05e;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe05f;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe05f;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe060;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe060;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe061;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe061;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe062;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe062;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe063;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe063;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe064;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe064;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe065;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe065;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe066;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe066;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe067;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe067;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe068;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe068;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe069;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe069;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe06a;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe06a;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe06b;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe06b;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe06c;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe06c;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe06e;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe06e;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe06f;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe06f;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe070;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe070;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe071;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe071;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe072;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe072;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe074;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe074;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe075;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe075;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe076;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe076;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe077;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe077;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe078;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe078;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe079;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe079;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe07a;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe07a;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe07b;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe07b;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe07c;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe07c;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe07d;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe07d;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe07e;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe07e;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe06d;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe06d;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe07f;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe07f;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe080;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe080;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe081;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe081;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe082;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe082;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe057;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe057;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe083;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe083;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe084;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe084;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe086;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe086;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe087;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe087;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe088;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe088;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe089;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe089;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe08d;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe08d;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe090;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe090;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe091;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe091;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe092;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe092;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe093;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe093;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe094;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe094;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe095;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe095;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe096;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe096;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe097;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe097;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe098;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe098;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe099;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe099;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe09a;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe09a;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe09b;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe09b;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe09c;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe09c;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe09d;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe09d;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe09e;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe09e;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe09f;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe09f;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe0a0;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe0a0;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe073;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe073;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe085;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe085;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe0a1;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe0a1;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe08b;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe08b;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe08a;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe08a;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe08c;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe08c;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe08e;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe08e;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe08f;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe08f;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe0a2;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe0a2;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe0a3;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe0a3;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe0a4;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe0a4;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe0a5;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe0a5;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe0a6;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe0a6;">
                                          </li>
                                          <li>
                                             <div data-icon="&#xe0a7;" class="icon"></div>
                                             <input type="text" readonly="readonly" value="&amp;#xe0a7;">
                                          </li>
                                       </ul>  
                              </div>
                           </div>
                     </div>
                  <div class="col-sm-12">
                     <h4>CSS mapping</h4>
                    
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
     <!-- lobipanel -->
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
      <script>
         $(document).ready(function () {
             var glyphs, i, len, ref;
         
             ref = document.getElementsByClassName('glyphs');
             for (i = 0, len = ref.length; i < len; i++) {
                 glyphs = ref[i];
                 glyphs.addEventListener('click', function (event) {
                     if (event.target.tagName === 'INPUT') {
                         return event.target.select();
                     }
                 });
             }
         
         });
      </script>
   </body>
</html>

