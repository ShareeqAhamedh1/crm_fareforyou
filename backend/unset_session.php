<?php

if (isset($_POST['sessionCId'])) {
    // Unset the session variable based on the received sessionId
    unset($_SESSION['c_id']);
    echo 'Session variable unset';
} else {
    echo 'Session variable not received';
}

?>
