<?php include("layouts/header.php"); ?>

<?php
  if(!isset($_REQUEST['id']) || $_REQUEST['id'] == ""){
    header('location:package_list_details.php?donthack');
    exit();
  }
  $id =$_REQUEST['id'];
  $h_name = getDataBack($connWeb,'tbl_hotels','h_id',$id,'hotel');
 ?>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add images to Hotel <?= $h_name ?> </h1>
                  <small>Image List</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                 <div class="col-lg-12">
                   <div class="card lobicard all_btn_card" id="lobicard-custom-control1" data-sortable="true">
                      
                       <div id="info">
                         <div class="card-body">
                           <form class="" action="backend/website/add_images_hotel.php" method="post" enctype="multipart/form-data">
                             <input type="hidden" name="id" value="<?= $id ?>">
                             <div class="form-group">
                                <label>Image</label>
                                <input id="flight_image" name="image_file" type="file" class="form-control" accept="image/*">
                             </div>
                             <button type="submit" class="btn btn-success" name="button">Add</button>
                           </form>
                         </div>
                      </div>
                   </div>
                 </div>
                     <div class="col-lg-12 pinpin">
                           <div class="card lobicard"  data-sortable="true">

                               <div class="card-body">
                                       <div class="table-responsive">

                                          <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                             <thead class="back_table_color">
                                                <tr class="info">
                                                   <th>Images</th>
                                                   <th>Action</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                               <?php
                                                $sql_images = "SELECT * FROM tbl_hotel_images WHERE h_id='$id'";
                                                $rs_img = $connWeb->query($sql_images);
                                                if($rs_img->num_rows > 0){
                                                  while($rowImg = $rs_img->fetch_assoc()){
                                                ?>
                                               <tr>
                                                 <td> <img src="backend/website/other_pack_images/<?= $rowImg['hi_image'] ?>" style="width:100px;" alt=""> </td>
                                                 <td> <a href="backend/website/del_image_hotel.php?id=<?= $rowImg['hi_id'] ?>&h_id=<?= $id ?>" onclick="return confirm('gonna delete?')"
                                                   class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a> </td>
                                               </tr>
                                             <?php } } ?>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                           </div> <br><br>
                        </div>

               </div>


               <!-- /.modal -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

         <?php include("layouts/footer.php"); ?>
