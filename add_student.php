<?php
session_start();
include 'db.php';

$data = json_decode(file_get_contents('php://input'), true);
$name = $data['name'];
$subject = $data['subject'];
$marks = $data['marks'];

$stmt = $conn->prepare("SELECT * FROM students WHERE name = :name AND subject = :subject");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':subject', $subject);
$stmt->execute();
$student = $stmt->fetch(PDO::FETCH_ASSOC);

if ($student) {
    $new_marks = $student['marks'] + $marks;
    $stmt = $conn->prepare("UPDATE students SET marks = :marks WHERE id = :id");
    $stmt->bindParam(':marks', $new_marks);
    $stmt->bindParam(':id', $student['id']);
    $stmt->execute();
    echo json_encode(['success' => true]);
} else {
    $stmt = $conn->prepare("INSERT INTO students (name, subject, marks) VALUES (:name, :subject, :marks)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':marks', $marks);
    $stmt->execute();
    echo json_encode(['success' => true]);
}
?>
