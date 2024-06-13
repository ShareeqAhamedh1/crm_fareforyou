<?php include '../backend/website/conn.php'; ?>

<div class="card-body">
     <div class="form-group">
        <label>Hotel Name</label>
        <input id="hotel" type="text" class="form-control" placeholder="Name" required>
     </div>

     <div class="reset-button">

        <button onclick="submitHotel()" class="btn btn-success"> Add Hotel</button>
        <a onclick="nextPage()" class="btn btn-warning"> Next</a>
     </div>
     <br><br>
  <div id="showIncludes" class="table-responsive">

  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {

         $('#showIncludes').load('./ajax_pages/hotels_table.php');

  });
  function submitHotel(){
    var hotel = $('#hotel').val();

    // AJAX request
    $.ajax({
        type: 'GET',
        url: 'backend/website/add_hotel.php', // Replace with the actual URL to process the form
        data: { hotel: hotel}, // Pass the input value as data
        success: function() {
          $('#showIncludes').load('./ajax_pages/hotels_table.php');
          $('#hotel').val('');
        }
     });
  }

  function nextPage(){
    $('#info').load('./ajax_pages/add_extras.php');
  }

  function del(id){
    $.ajax({
        type: 'GET',
        url: 'backend/website/del_hotel.php', // Replace with the actual URL to process the form
        data: { id: id}, // Pass the input value as data
        success: function() {
          $('#showIncludes').load('./ajax_pages/includes_table.php');
          $('#include').val('');
        }
     });

   }



</script>
