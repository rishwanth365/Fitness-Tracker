<?php

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validate form data
if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
    echo "All fields are required";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
} else if ($password != $confirm_password) {
    echo "Password and confirmed password do not match";
} else {
    // Connect to MySQL database
    $conn = new mysqli('localhost', 'root', '', 'test');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if email is already registered
    $stmt = $conn->prepare("SELECT * FROM registration WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email is already registered";
    } else {
        // Insert new user into the database
        $stmt = $conn->prepare("INSERT INTO registration (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $password);
        $stmt->execute();

        // Close database connection
        $stmt->close();
        $conn->close();

        // Redirect to login page
        header("Location: http://localhost/Guvi_Assessment/login.html");
        exit();
    }
}

?>
