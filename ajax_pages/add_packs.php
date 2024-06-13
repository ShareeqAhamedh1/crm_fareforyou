<?php include '../backend/website/conn.php'; ?>

<div class="card-body">
    <span id="loadText" style="font-size:20px;font-weight:bold;color:green;"></span>
<div class="form-group">
        <label>Package title</label>
        <input id="pack_title" type="text" class="form-control" placeholder="Title" required>
     </div>
     <div class="form-group">
        <label>Price</label>
        <input id="pack_price" type="text" class="form-control" placeholder="Deal Price" required>
     </div>
     <div class="form-group">
        <label>Duration</label>
        <input id="pack_duration" type="text" class="form-control" placeholder="Duration" required>
     </div>
     <div class="form-group">
         <label>Package Category</label>
         <select name="pack_cat" id="pack_cat" class="form-control">
            <?php
               $sqlCat="SELECT * FROM tbl_package_cat";
               $rsCat=$connWeb->query($sqlCat);
               if ($rsCat->num_rows>0) {
                  while ($rowsCat=$rsCat->fetch_assoc()) {
                     ?>
                     <option value="<?= $rowsCat['pc_id'] ?>" selected><?= $rowsCat['pc_name'] ?></option>
                     <?php
                  }
               }
            ?>
         </select>
     </div>
     <div class="form-group">
        <label>Package Overview</label>
        <textarea id="pack_overview" class="form-control" rows="3" required></textarea>
     </div>
     <div class="form-group">
        <label>Image</label>
        <input id="pack_image" type="file" class="form-control" accept="image/*">
        <small>2087 X 1655 (Main image)</small>
     </div>
     <div class="reset-button">
        <!-- <a href="#" class="btn btn-warning"> Reset</a> -->
        <a onClick="submitPack()" class="btn btn-success"> Save</a>
     </div>
</div>
