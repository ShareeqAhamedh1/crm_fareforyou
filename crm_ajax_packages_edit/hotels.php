<?php include '../backend/website/conn.php';
$h_id = $_REQUEST['h_id'];
$sqlPass = "SELECT * FROM tbl_hotels WHERE h_id='$h_id'";
$rsPass =$connWeb->query($sqlPass);
if($rsPass->num_rows == 1){
  $rowPass = $rsPass->fetch_assoc();
}
?>

<h5>Hotels</h5>
  <hr>
      <div class="form-group">
      <input type="hidden" name="" id="h_id" value="<?= $h_id ?>">
         <label>Hotel name</label>
         <input type="text" class="form-control"
         id="e_h_name" name="h_name" placeholder="Hotel Name" value="<?= $rowPass['hotel'] ?>" required>
      </div>
      <div class="form-group">
         <label>Description</label>
         <input type="text" class="form-control"
         id="e_h_desc" name="h_desc" placeholder="Description" value="<?= $rowPass['description'] ?>" required>
      </div>
      <div class="form-group">
         <label>Hotel Location Link</label>
         <input type="text" class="form-control"
         id="e_h_l_link" name="e_h_l_link" placeholder="Hotel Location Link" value="<?= $rowPass['h_location_link'] ?>"  required>
      </div>
      <div class="form-group">
         <label>Hotel Other Link</label>
         <input type="text" class="form-control"
         id="e_h_o_link" name="e_h_o_link" placeholder="Hotel Other Link" value="<?= $rowPass['h_other_links'] ?>"  required>
      </div>

      <div class="form-group">
         <label>Rating</label>
         <select class="form-control" id="e_h_rating" name="e_h_rating" value="<?= $rowPass['h_rating'] ?>"  required>
            <option value="">Select Rating</option>
            <option value="1" <?php if($rowPass['h_rating'] == 1){ echo "Selected"; } ?>>&#9733;</option>
            <option value="2" <?php if($rowPass['h_rating'] == 2){ echo "Selected"; } ?>>&#9733;&#9733;</option>
            <option value="3" <?php if($rowPass['h_rating'] == 3){ echo "Selected"; } ?>>&#9733;&#9733;&#9733;</option>
            <option value="4" <?php if($rowPass['h_rating'] == 4){ echo "Selected"; } ?>>&#9733;&#9733;&#9733;&#9733;</option>
            <option value="5" <?php if($rowPass['h_rating'] == 5){ echo "Selected"; } ?>>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
         </select>
      </div>

      <!-- <div class="form-group">
         <label>Include</label>
         <input type="text" class="form-control"
         id="include" name="include" placeholder="Description Name" required>
      </div> -->

<div class="button">
<button class="btn green_btn" onclick="editHotel()">Edit</button>
<!-- <a class="btn green_btn">Add</a> -->
</div>
