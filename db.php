


<?php
$servername = "localhost"; // Change if your server is different
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "book_exchange"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the database";
}

$conn->close();
?>
