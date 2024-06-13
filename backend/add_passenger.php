<?php
include 'website/conn.php';

// Retrieve data sent via POST
$data = json_decode(file_get_contents("php://input"), true);

// Check if a person with the same phone number or email already exists
$checkStmt = $conn->prepare("SELECT * FROM tbl_passengers WHERE pas_phoneNumber = ? OR pas_email = ?");
$checkStmt->bind_param("ss", $phone, $email);
$phone = $data['phone'];
$email = $data['email'];
$checkStmt->execute();
$result = $checkStmt->get_result();

if ($result->num_rows > 0) {
    // Person with the same phone number or email already exists, return error response
    echo 400;
} else {
    // No person with the same phone number or email found, proceed with insertion
    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO tbl_passengers (pas_firstName, pas_lastName, pas_phoneNumber, pas_email) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstName, $lastName, $phone, $email);

    // Set parameters and execute
    $firstName = $data['firstName'];
    $lastName = $data['lastName'];
    $phone = $data['phone'];
    $email = $data['email'];

    if ($stmt->execute()) {
        // Success response
        http_response_code(200);
        echo 200;
    } else {
        // Error response
        http_response_code(500);
        echo "Error: " . $conn->error;
    }
}

// Close connections
$stmt->close();
$checkStmt->close();
$conn->close();
?>
