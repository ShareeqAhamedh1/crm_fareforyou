<?php include '../backend/website/conn.php'; ?>

<div class="card-body">
     <div class="form-group">
        <label>Destinations</label>
        <input id="destination" type="text" class="form-control" placeholder="Destination" required>
     </div>

     <div class="reset-button">

        <button onclick="submit()" class="btn btn-success"> Add Destination</button>
        <a onclick="nextPage()" class="btn btn-warning"> Submit</a>
     </div>
     <br><br>
  <div id="showIncludes" class="table-responsive">

  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {

         $('#showIncludes').load('./ajax_pages/destinations_table.php');

  });
  function submit(){
    var destination = $('#destination').val();

    // AJAX request
    $.ajax({
        type: 'GET',
        url: 'backend/website/add_destination.php', // Replace with the actual URL to process the form
        data: { destination: destination}, // Pass the input value as data
        success: function() {
          $('#showIncludes').load('./ajax_pages/destinations_table.php');
          $('#destination').val('');
        }
     });
  }

  function nextPage(){
    location.reload();

  }



</script>
