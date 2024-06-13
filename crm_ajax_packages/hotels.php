<?php include '../backend/website/conn.php'; ?>

  <h5>Hotels</h5>
  <hr>
      <div class="form-group">
         <label>Hotel name</label>
         <input type="text" class="form-control"
         id="h_name" name="h_name" placeholder="Hotel Name" required>
      </div>
      <div class="form-group">
         <label>Description</label>
         <input type="text" class="form-control"
         id="h_desc" name="h_desc" placeholder="Description" required>
      </div>
      
      <div class="form-group">
         <label>Hotel Location Link</label>
         <input type="text" class="form-control"
         id="h_l_link" name="h_l_link" placeholder="Hotel Location Link" required>
      </div>
      <div class="form-group">
         <label>Hotel Other Link</label>
         <input type="text" class="form-control"
         id="h_o_link" name="h_o_link" placeholder="Hotel Other Link" required>
      </div>

      <div class="form-group">
         <label>Rating</label>
         <select class="form-control" id="h_rating" name="h_rating" required>
            <option value="">Select Rating</option>
            <option value="1">&#9733;</option>
            <option value="2">&#9733;&#9733;</option>
            <option value="3">&#9733;&#9733;&#9733;</option>
            <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
            <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
         </select>
      </div>


      <!-- <div class="form-group">
         <label>Include</label>
         <input type="text" class="form-control"
         id="include" name="include" placeholder="Description Name" required>
      </div> -->
    
<div class="button">
<button class="btn green_btn" onclick="addHotels()">Add</button>
<!-- <a class="btn green_btn">Add</a> -->
</div>
