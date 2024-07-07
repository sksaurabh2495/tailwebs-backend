<?php
$frontend_url = "http://127.0.0.1/tailwebs-frontend/";
$backend_url = "http://127.0.0.1/tailwebs-backend/";

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure $conn is defined and not null
    if (!$conn) {
        echo "Database connection error.";
        exit; // Exit script if connection is not successful
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Your SQL queries go here
    // Example: Inserting a new teacher
    try {
        $stmt = $conn->prepare("INSERT INTO teachers (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->execute();

        echo "Teacher added successfully.";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
