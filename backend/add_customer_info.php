<?php
include 'website/conn.php';

// Input Validation and Sanitization
$c_f_name = filter_input(INPUT_POST, 'c_f_name', FILTER_SANITIZE_STRING);
$c_l_name = filter_input(INPUT_POST, 'c_l_name', FILTER_SANITIZE_STRING);
$c_email = filter_input(INPUT_POST, 'c_email', FILTER_VALIDATE_EMAIL);
$c_phone = filter_input(INPUT_POST, 'c_phone', FILTER_SANITIZE_NUMBER_INT);

// Check for Errors
if (empty($c_f_name) || empty($c_l_name) || !$c_email || empty($c_phone)) {
    header('location:../ninvoices.php?error=invalid_data');
    exit();
}

// Check if Customer Already Exists
$sqlCheckCustomer = "SELECT COUNT(*) FROM tbl_customer_info WHERE c_email = ? OR c_phone_no = ?";
$stmtCheck = $conn->prepare($sqlCheckCustomer);

if ($stmtCheck) {
    $stmtCheck->bind_param("ss", $c_email, $c_phone);
    $stmtCheck->execute();
    $stmtCheck->bind_result($count);
    $stmtCheck->fetch();

    if ($count > 0) {
        // Customer already exists
        header('location:../ninvoices.php?error=customer_exists');
        exit();
    }

    $stmtCheck->close(); // Close the check statement
} else {
    error_log("Error preparing check statement: " . $conn->error);
    header('location:../ninvoices.php?error=db_error');
    exit();
}


// Prepared Statements (Prevent SQL Injection)
$sqlCusInfo = "INSERT INTO tbl_customer_info (c_f_name, c_l_name, c_email, c_phone_no) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sqlCusInfo);

if ($stmt) {
    $stmt->bind_param("ssss", $c_f_name, $c_l_name, $c_email, $c_phone);

    // Execute the Query
    if ($stmt->execute()) {
        header('location:../ninvoices.php?added');
    } else {
        header('location:../ninvoices.php?error=db_error');
    }

    $stmt->close();
} else {
    error_log("Error preparing statement: " . $conn->error);
    header('location:../ninvoices.php?error=db_error');
}

$conn->close();
exit();
?>
