<?php include '../backend/website/conn.php'; ?>

<div class="card-body">
     <div class="form-group">
        <label>Include</label>
        <input id="include" type="text" class="form-control" placeholder="Include" required>
     </div>

     <div class="reset-button">

        <button onclick="submitInclude()" class="btn btn-success"> Add Include</button>
        <a onclick="nextPage()" class="btn btn-warning"> Next</a>
     </div>
     <br><br>
  <div id="showIncludes" class="table-responsive">

  </div>
</div>




<script type="text/javascript">
  $(document).ready(function() {

         $('#showIncludes').load('./ajax_pages/includes_table.php');

  });
  function submitInclude(){
    var include = $('#include').val();

    // AJAX request
    $.ajax({
        type: 'GET',
        url: 'backend/website/add_include.php', // Replace with the actual URL to process the form
        data: { include: include}, // Pass the input value as data
        success: function() {
          $('#showIncludes').load('./ajax_pages/includes_table.php');
          $('#include').val('');
        }
     });
  }

  function nextPage(){
    $('#info').load('./ajax_pages/add_hotels.php');
  }

  function del(id){
    $.ajax({
        type: 'GET',
        url: 'backend/website/del_include.php', // Replace with the actual URL to process the form
        data: { id: id}, // Pass the input value as data
        success: function() {
          $('#showIncludes').load('./ajax_pages/includes_table.php');
          $('#include').val('');
        }
     });
  }






</script>
