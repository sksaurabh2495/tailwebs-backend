<?php
session_start();
include 'db.php';

$data = json_decode(file_get_contents('php://input'), true);
$id = $data['id'];

$stmt = $conn->prepare("DELETE FROM students WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();

echo json_encode(['success' => true]);
?>
