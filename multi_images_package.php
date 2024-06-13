<?php include("layouts/header.php"); ?>

<?php
  if(!isset($_REQUEST['id']) || $_REQUEST['id'] == ""){
    header('location:pack_list.php?donthack');
    exit();
  }
  $id =$_REQUEST['id'];
  $name = getDataBack($connWeb,'tbl_packages','pack_id',$id,'pack_title');
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
                  <h1>Add images to Package of <?= $name ?> </h1>
                  <small>Image List</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                 <div class="col-lg-12">
                   <div class="card lobicard all_btn_card" id="lobicard-custom-control1" data-sortable="true">
                       <div class="card-header all_card_btn">
                           <div class="card-title custom_title">
                            <!-- <a class="btn btn-add" href="pack_list.php"><i class="fa fa-list"></i> >Add deal packages </a> -->
                            <?php
                                if (isset($_SESSION['flight_added'])) {
                                    echo '<small>FLight Successfully added</small>';
                                    unset($_SESSION['flight_added']);
                                }
                            ?>
                            <?php
                                if (isset($_SESSION['flight_not_added'])) {
                                    echo '<small>Error adding flight details</small>';
                                    unset($_SESSION['flight_not_added']);
                                }
                            ?>
                           </div>
                       </div>
                       <div id="info">
                         <div class="card-body">
                           <form class="" action="backend/website/add_images.php" method="post" enctype="multipart/form-data">
                             <input type="hidden" name="id" value="<?= $id ?>">
                             <div class="form-group">
                                <label>Image</label>
                                <input id="flight_image" name="image_file" type="file" class="form-control" accept="image/*">
                                <small>1062 X 809( other 4 images)</small>
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
                                                $sql_images = "SELECT * FROM tbl_images WHERE pack_id='$id'";
                                                $rs_img = $connWeb->query($sql_images);
                                                if($rs_img->num_rows > 0){
                                                  while($rowImg = $rs_img->fetch_assoc()){
                                                ?>
                                               <tr>
                                                 <td> <img src="backend/website/other_pack_images/<?= $rowImg['image'] ?>" style="width:100px;" alt=""> </td>
                                                 <td> <a href="backend/website/del_image.php?id=<?= $rowImg['im_id'] ?>&pack_id=<?= $id ?>" onclick="return confirm('gonna delete?')"
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
