<?php
$servername = "127.0.0.1";   // Change if your MySQL is on a different server
$username = "root";
$password = "222";
$dbname = "teacher_portal";

$frontend_url = "http://127.0.0.1/tailwebs-frontend/";
$backend_url = "http://127.0.0.1/tailwebs-backend/";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
