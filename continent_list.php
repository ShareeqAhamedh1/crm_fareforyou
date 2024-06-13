<?php include("layouts/header.php"); ?>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Continent</h1>
                  <small>Continent List</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                     <div class="col-lg-12 pinpin">
                           <div class="card lobicard"  data-sortable="true">

                               <div class="card-body">
                                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                       <div class="btn-group d-flex" role="group">
                                          <div class="buttonexport" id="buttonlist">
                                             <a class="btn btn-add" href="add_continent.php"> <i class="fa fa-plus"></i> Add Continent
                                             </a>
                                          </div>
                                       </div>
                                       <div class="btn-group">
                                          <!-- <button class="btn btn-exp btn-sm"  data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button> -->
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
                                                   
                                                   <th>Continent Name</th>
                                                   <th>Action</th>
                                                   
                                                </tr>
                                             </thead>
                                             <tbody>
                                               <?php
                                               $sql="SELECT * FROM tbl_continent";
                                               $rs=$conn->query($sql);

                                               if($rs->num_rows>0){
                                                while($rows=$rs->fetch_assoc()){
                                                    $id=$rows['continent_id'];
                                              
                                               ?>

                                                        
                                                <tr>
                                                   
                                                   <td><?= $rows['continent_name'] ?></td>
                                                
                                                   <td>
                                                      <!-- <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button> -->
                                                      <button type="button" onclick="setRowId(<?= $id ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                                   </td>
                                                </tr>
                                               <?php  }
                                               } ?>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                           </div>
                       </div>
               </div>

               <!-- Customer Modal2 -->
               <div class="modal fade" id="customer2"  role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <h3><i class="fa fa-user m-r-5"></i> Delete Record</h3>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                       <div class="row">
                                             <div class="col-md-12 form-group user-form-group">
                                                <label class="control-label">Delete Record</label>
                                                <div class="float-right">
                                                  <input type="hidden" id="deleteRowId">
                                                  <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NO</button>
                                                   <button type="button" onclick="deleteRow()" data-dismiss="modal" class="btn btn-add btn-sm">YES</button>
                                                </div>
                                             </div>
                                       </div>
                              </div>
                           </div>
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

         <script type="text/javascript">

         function setRowId(rowId) {
            document.getElementById('deleteRowId').value = rowId;
            console.log(rowId);
         }

         function deleteRow() {

             var rowId = document.getElementById('deleteRowId').value;
           url = 'backend/website/del_continent.php';

           $.ajax({
               type: 'GET',
               url: url, // Replace with the actual URL to process the form
               data: { id: rowId}, // Pass the input value as data
               success: function(response) {
                   if (response == 200) {
                     location.reload();
                   }else{
                     console.log(response)
                   }
               }
            })


           // Close the modal
           $('#delModal').modal('hide');
         }

         </script>
         <?php include("layouts/footer.php"); ?>
