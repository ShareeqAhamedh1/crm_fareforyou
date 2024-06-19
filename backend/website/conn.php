<?php
error_reporting(0);

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_crm_fareforyou";

// $servername_web = "localhost";
// $username_web = "root";
// $password_web = "";
// $dbname_web = "db_fareforyou";


// $servername_web = "localhost";
// $username_web = "posfkpop_db_fareforyou_admin";
// $password_web = "wv-mD!AZ7ImY";
// $dbname_web = "posfkpop_db_fareforyou";
//
// $servername = "localhost";
// $username = "posfkpop_crm_admin";
// $password = "F#tW!Bj3I[nt";
// $dbname = "posfkpop_crm_ffu";


$current_date_time = date('Y/m/d H:i:s');

$conn = new mysqli($servername,$username,$password,$dbname);

// $connWeb = new mysqli($servername_web,$username_web,$password_web,$dbname_web);

if(isset($_SESSION['u_id'])){
  $u_id = $_SESSION['u_id'];
}

function getDataBack($conn,$table,$col_id,$id,$coulmn){
  $sql = "SELECT * FROM $table WHERE $col_id = '$id'";
  $rs = $conn->query($sql);

  if ($rs->num_rows > 0) {
    $row = $rs->fetch_assoc();

    return $row[$coulmn];
  }
}


function getSumValue($conn,$sumVal,$table,$col_id,$id){
  $sql = "SELECT SUM($sumVal) AS value FROM $table WHERE $col_id = '$id'";
  $rs = $conn->query($sql);

  if ($rs->num_rows > 0) {
    $row = $rs->fetch_assoc();

    return $row['value'];
  }
}

function getPayStatus($st){
  if($st == 0){
    echo "<span style='background:#7a6400;color:#fff;border-radius:20px;padding:10px 10px 10px 10px;'> Pending  </span>";
  }
  elseif ($st == 1) {
    echo "<span style='background:#349c00;color:#fff;border-radius:20px;padding:10px 10px 10px 10px;'> Fully Paid  </span>";
  }
  elseif ($st == 2) {
    echo "<span style='background:#006a6e;color:#fff;border-radius:20px;padding:10px 10px 10px 10px;'> Payment Plan  </span>";
  }
  elseif ($st == 4) {
    echo "<span style='background:#101f38;color:#fff;border-radius:20px;padding:10px 10px 10px 10px;'> Payment Plan Setuped </span>";
  }
}

function uploadImage($fileName,$filePath,$allowedList,$errorLocation){

  $img = $_FILES[$fileName];
  $imgName =$_FILES[$fileName]['name'];
  $imgTempName = $_FILES[$fileName]['tmp_name'];
  $imgSize = $_FILES[$fileName]['size'];
  $imgError= $_FILES[$fileName]['error'];

  $fileExt = explode(".",$imgName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = $allowedList;

  if(in_array($fileActualExt, $allowed)){
    if($imgError == 0){
      $GLOBALS['fileNameNew']='ffu'.uniqid('',true).".".$fileActualExt;
        $fileDestination = $filePath.$GLOBALS['fileNameNew'];

        $resultsImage = move_uploaded_file($imgTempName,$fileDestination);

      }
      else{
        header('location:'.$errorLocation.'?imgerror');
        exit();
      }
  }
  else{
    header('location:'.$errorLocation.'?extensionError&'.$fileActualExt);
    exit();
  }
}

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function formatTimeDifference($date_time) {
    $date_time_now = date('Y-m-d H:i:s');

    // Convert string dates to DateTime objects
    $datetime1 = new DateTime($date_time);
    $datetime2 = new DateTime($date_time_now);

    // Calculate the difference between two dates
    $interval = $datetime1->diff($datetime2);

    // Format the result
    if ($interval->days == 0) {
        // Within the same day
        if ($interval->h > 0) {
            return $interval->h . ' hour' . ($interval->h > 1 ? 's' : '') . ' ago';
        } elseif ($interval->i > 0) {
            return $interval->i . ' minute' . ($interval->i > 1 ? 's' : '') . ' ago';
        } else {
            return 'Just now';
        }
    } else {
        // More than 24 hours ago, show the original date and time
        return $datetime1->format('Y-m-d H:i:s');
    }
}

function userType($user_type){
  if ($user_type==1) {
    return "Super Admin";
  }elseif ($user_type==2) {
    return "Admin";
  }elseif ($user_type==3) {
    return "Co Admin";
  }elseif ($user_type==4) {
    return "Staff";
  }else{
    return "Something wrong";
  }
}
?>
