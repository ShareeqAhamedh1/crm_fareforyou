<?php include('layouts/header.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Country</h1>
                  <small>Add Country</small>
               </div>
            </section>
            <!-- Main content -->

            <section class="content">

               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="card lobicard all_btn_card" id="lobicard-custom-control1" data-sortable="true">
                         <div class="card-header all_card_btn">
                             <div class="card-title custom_title">
                              <!-- <a class="btn btn-add" href="pack_list.php"><i class="fa fa-list"></i> >Add deal packages </a> -->

                              <?php
                                 if(isset($_SESSION['country_added'])){
                                    echo '<small>Country Successfully added</small>';
                                    unset($_SESSION['country_added']);
                                 }
                              ?>
                              <?php
                                 if(isset($_SESSION['country_not_added'])){
                                    echo '<small>Error adding Country</small>';
                                    unset($_SESSION['country_not_added']);
                                 }
                              ?>
                             </div>
                         </div>
                         <div id="info">
                           <div class="card-body">
                                <div class="form-group">
                                   <label>Continent</label>
                                   <select id="continent" name="continent">
                                        <option value="0">Select a Continent</option>
                                       <?php
                                      $sql = "SELECT * FROM tbl_continent";
                                      $rs = $connWeb->query($sql);

                                      if($rs->num_rows>0){
                                        while($row=$rs->fetch_assoc()){
                                            ?>
                                            <option value=<?= $row['continent_id'] ?>><?= $row['continent_name'];?></option>
                                            <?php
                                        }
                                      }
                                       ?>

                                        <!-- <option value="Asia">Asia</option>
                                        <option value="Africa">Africa</option>
                                        <option value="North America">North America</option>
                                        <option value="South America">South America</option>
                                        <option value="Europe">Europe</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Antarctica">Antarctica</option> -->
                                    </select>
                                </div>
                                <div class="form-group">
                                   <label>Country Name</label>
                                   <input id="country_name" type="text" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                   <label>Description</label>
                                   <textarea name="name" class="form-control" rows="8" cols="80"></textarea>
                                </div>

                                <div class="reset-button">
                                   <!-- <a href="#" class="btn btn-warning"> Reset</a> -->
                                   <a onClick="submitCountry()" class="btn btn-success"> Save</a>
                                </div>
                           </div>
                        </div>
                     </div>
                 </div>
               </div>

            <!-- /.content -->

            </section>

         <section class="content">
               <div class="row">
                     <div class="col-lg-12 pinpin">
                           <div class="card lobicard"  data-sortable="true">

                               <div class="card-body">
                                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                       <!-- <div class="btn-group d-flex" role="group">
                                          <div class="buttonexport" id="buttonlist">
                                             <a class="btn btn-add" href="add_country.php"> <i class="fa fa-plus"></i> Add Country
                                             </a>
                                          </div>
                                       </div> -->
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

                                                   <th>Country Name</th>
                                                   <th>Action</th>

                                                </tr>
                                             </thead>
                                             <tbody>
                                               <?php
                                               $sql="SELECT * FROM tbl_country";
                                               $rs=$connWeb->query($sql);

                                               if($rs->num_rows>0){
                                                while($rows=$rs->fetch_assoc()){
                                                    $id=$rows['country_id'];

                                               ?>


                                                <tr>

                                                   <td><?= $rows['country_name'] ?></td>

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

         <?php include("layouts/footer.php"); ?>


<script type="text/javascript">

function submitCountry() {
    var country_name = $('#country_name').val();
    var continent =$('#continent').val();


    $.ajax({
        type:'POST',
        url:'backend/website/add_country.php',
        data:{
            country_name:country_name,
            continent:continent
        },
        success:function(resp){
            if(resp == 200){
                location.reload();
            }else{
                console.log(resp);
                location.reload();
            }
        }
    });
}


function setRowId(rowId) {
            document.getElementById('deleteRowId').value = rowId;
            console.log(rowId);
         }

         function deleteRow() {

             var rowId = document.getElementById('deleteRowId').value;
           url = 'backend/website/del_country.php';

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
