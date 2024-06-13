<?php
include '../backend/website/conn.php';

// $search = $_REQUEST['search'];

$sqlPass = "SELECT * FROM tbl_passengers";
$rsPass = $conn->query($sqlPass);

if ($rsPass->num_rows > 0) {
  ?>
  <option value="">Select Passenger</option>
  <?php
    while ($row = $rsPass->fetch_assoc()) {
?>
        <option value="<?= $row['pas_id'] ?>"><?= $row['pas_firstName'] ?>(<?= $row['pas_phoneNumber'] ?>)</option>
<?php
    }
} else {
?>
        <option value="">No Results Found Add the Passenger</option>
<?php
}
?>
