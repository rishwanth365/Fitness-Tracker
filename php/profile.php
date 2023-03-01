<?php

// Get form data
$email = $_POST['email'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];

// Connect to MySQL database
$conn = new mysqli('localhost', 'root', '', 'test');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update user's details in the database
$stmt = $conn->prepare("UPDATE registration SET age = ?, dob = ?, contact = ? WHERE email = ?");
$stmt->bind_param("isss", $age, $dob, $contact, $email);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    // User's details updated successfully
    header("Location: http://localhost/phpmyadmin/index.php?route=/sql&db=test&table=registration&pos=0");
} else {
    // Failed to update user's details
    echo "Failed to update user's details";
}

// Close database connection
$stmt->close();
$conn->close();

?>
