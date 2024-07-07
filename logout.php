<?php
// Start the session
session_start();
// Unset all session variables
$_SESSION = array();
// Destroy the session
session_destroy();

// Send a JSON response indicating success or failure
header('Content-Type: application/json');
if (!isset($_SESSION['teacher_id'])) {
    header('Location: index.php');
    exit();
}

?>
