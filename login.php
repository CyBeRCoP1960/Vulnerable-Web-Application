<?php
// Connect to database
$mysqli = new mysqli("localhost", "user", "password", "database");

// Get user input
$username = $_POST['username'];
$password = $_POST['password'];

// Vulnerable SQL query
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $mysqli->query($query);

// Check login
if ($result->num_rows > 0) {
    echo "Login successful!";
} else {
    echo "Invalid credentials!";
}
?>
