<?php

// Start session
session_start();

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Connect to MySQL database
$conn = new mysqli('localhost', 'root', '', 'test');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if email and password match a registered user
$stmt = $conn->prepare("SELECT * FROM registration WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    // Login successful, set session variable and redirect to home page or dashboard
    $_SESSION['email'] = $email;
    echo "<script>localStorage.setItem('login', 'true');</script>";
    header("Location: http://localhost/Guvi_Assessment/profile.html");
    exit();
} else {
    // Login failed, redirect back to login page with error message
    echo "Invalid email or password";
    exit();
}

// Close database connection
$stmt->close();
$conn->close();

?>
