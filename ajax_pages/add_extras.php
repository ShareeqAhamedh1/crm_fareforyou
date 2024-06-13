<?php include '../backend/website/conn.php'; ?>

<div class="card-body">
     <div class="form-group">
        <label>Extras</label>
        <input id="extra" type="text" class="form-control" placeholder="Extra" required>
     </div>

     <div class="reset-button">

        <button onclick="submit()" class="btn btn-success"> Add Extras</button>
        <a onclick="nextPage()" class="btn btn-warning"> Next</a>
     </div>
     <br><br>
  <div id="showIncludes" class="table-responsive">

  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {

         $('#showIncludes').load('./ajax_pages/extras_table.php');

  });
  function submit(){
    var extra = $('#extra').val();

    // AJAX request
    $.ajax({
        type: 'GET',
        url: 'backend/website/add_extra.php', // Replace with the actual URL to process the form
        data: { extra: extra}, // Pass the input value as data
        success: function() {
          $('#showIncludes').load('./ajax_pages/extras_table.php');
          $('#extra').val('');
        }
     });
  }

  function nextPage(){
    $('#info').load('./ajax_pages/add_destinations.php');
  }



</script>
