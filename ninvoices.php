<?php include("layouts/header.php");

if (isset($_SESSION['c_id'])) {
  $c_id=$_SESSION['c_id'];
  unset($_SESSION['c_id']);
}

if (isset($_SESSION['p_id'])) {
  $p_id=$_SESSION['p_id'];
  unset($_SESSION['p_id']);
}
?>



         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-sticky-note-o"></i>
               </div>
               <div class="header-title">
                  <h1>Add Invoices</h1>
                  <small>Invoices list</small>
               </div>
            </section>
            <!-- Main content -->
            <div class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                        <div class="card lobicard all_btn_card" id="lobicard-custom-control1" data-sortable="true">
                            <div class="card-header all_card_btn">
                                <div class="card-title custom_title">
                                 <a class="btn btn-add" href="invoice.php"><i class="fa fa-list"></i> Invoices </a>
                                </div>
                            </div>
                            <div class="card-body">
                              <div class="row">
                                <div class="col-sm-6">
                                  <div id="info_load">

                                   </div>
                                </div>
                                <div class="col-sm-6">
                                  <button type="button" class="btn btn-primary" name="button" onclick="openModelCustomer()">Select Customer</button>
                                  <hr>
                                  <button type="button" class="btn btn-success" name="button" onclick="openModelAddCustomer()">+ Add Customer</button>
                                </div>
                              </div>

                              </div>
                        </div>
                    </div>
               </div>
            </div>
            <!-- /.content --><br><br>
         </div>
         <!-- /.content-wrapper -->
         <div class="modal fade" id="customer1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">
                  <div class="modal-header modal-header-primary">
                     <h3><i class="fa fa-user m-r-5"></i> Search & select Customer</h3>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  </div>
                  <div class="modal-body">
                    <div class="text-center">
                      <input type="text" class="form-control" id="customer_search" value="" placeholder="search_customer"> <br>
                      <button type="button" name="button" class="btn btn-primary" onclick="searchCustomer()">Search</button>
                    </div>
                    <div id="load_customers">

                    </div>
                  </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- end of select customer modal -->
         <div class="modal fade" id="addCustomerModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header modal-header-primary">
                     <h3><i class="fa fa-user m-r-5"></i> Add Customer</h3>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  </div>
                  <div class="modal-body">
                    <form action="backend/add_customer_info.php" method="post" >
                    <div class="form-group">
                       <label>First Name</label>
                       <input type="text" class="form-control" name="c_f_name" id="c_f_name" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                       <label>Last Name</label>
                       <input type="text" class="form-control" name="c_l_name" id="c_l_name" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                       <label>Email</label>
                       <input type="email" class="form-control" name="c_email" id="c_email" placeholder="name@domain.com" required>
                    </div>
                    <div class="form-group">
                       <label>Phone Number</label>
                       <input type="text" class="form-control" name="c_phone" id="c_phone" placeholder="+123***********" required>
                    </div>

                     <div class="button">
                       <button class="btn green_btn" type="submit">Add The Customer</button>
                     </div>

                     </form>

                  </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- end of add customer modal -->

         <?php include("layouts/footer.php"); ?>
         <script type="text/javascript">
         <?php if(isset($_REQUEST['error']) && $_REQUEST['error'] == 'customer_exists'){ ?>
           swal({
                               title: 'Warning',
                               text: "Customer Already Exist Please Find The Cutomer Using Select Customer Button",
                               type: 'warning',
                               icon: 'warning'
                           });
           <?php } ?>
         function openModelCustomer(){
           $('#customer1').modal('show');
         }

         function openModelAddCustomer(){
           $('#addCustomerModal').modal('show');
         }

         function validateCustomerSelect(){
           let c_id = document.getElementById('customer_id').value;
           if(c_id == ""){
             swal({
                                 title: 'Warning',
                                 text: "Please select the customer",
                                 type: 'warning',
                                 icon: 'warning'
                             });
             return false;
           }
         }


          function searchCustomer(){
            let c_key = document.getElementById('customer_search').value;

            $('#load_customers').load('crm_ajax/load_customer.php',{ key:c_key });
          }
          function selectCustomer(c_id,cName){
            document.getElementById('customer_id').value=c_id;
            document.getElementById('customer_selected').value=cName;
            $('#customer1').modal('hide');
          }
            $('#info_load').load('crm_ajax/customer_info.php');

         </script>
