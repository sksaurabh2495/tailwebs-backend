<?php
//session_start();
include 'db.php';
// Handle form submission to update student data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = (int)$_POST['id'];
  $name = (string)$_POST['name'];
  $subject = (string)$_POST['subject'];
  $marks = (int)$_POST['marks'];

  $stmt = $conn->prepare("UPDATE students SET name = :name, subject = :subject, marks = :marks WHERE id = :id");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':subject', $subject);
  $stmt->bindParam(':marks', $marks);
  $stmt->bindParam(':id', $id);
  $result = $stmt->execute();

  if ($result) {
    // Return success response
    http_response_code(200);
    echo json_encode(['message' => 'Student updated successfully']);
  } else {
    // Handle error, e.g., database error
    http_response_code(500);
    echo json_encode(['error' => 'Failed to update student']);
  }
}
?>
