<?php include '../backend/website/conn.php'; ?>

  <h5>Category</h5>
  <hr>
      <div class="form-group">
         <label>Category</label>
         <select class="form-control" id="p_cat_name" name="p_cat_name" required>
            <option value="">Select Category</option>
            <?php
                $sql ="SELECT * FROM tbl_package_cat";
                $rs = $connWeb->query($sql);
                if($rs->num_rows > 0){
                    while($row = $rs->fetch_assoc()){
            ?>
                <option value="<?= $row['pc_id'] ?>"><?= $row['pc_name'] ?></option>
            <?php } } ?>
         </select>
      </div>


      <!-- <div class="form-group">
         <label>Include</label>
         <input type="text" class="form-control"
         id="include" name="include" placeholder="Description Name" required>
      </div> -->
    
<div class="button">
<button class="btn green_btn" onclick="addCat()">Add</button>
<!-- <a class="btn green_btn">Add</a> -->
</div>
