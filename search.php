<?php
// Connect to database
$mysqli = new mysqli("localhost", "user", "password", "database");

// Get search query
$query = $_GET['query'];

// Vulnerable SQL query
$sql = "SELECT * FROM items WHERE name LIKE '%$query%'";
$result = $mysqli->query($sql);

// Display results
while ($row = $result->fetch_assoc()) {
    echo "Item: " . htmlspecialchars($row['name']) . "<br>";
}
?>
