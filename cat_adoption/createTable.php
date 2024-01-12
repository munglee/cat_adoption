<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cat_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE cats (
    id INT PRIMARY KEY,
    cat_name VARCHAR(255) NOT NULL,
    sex VARCHAR(10),
    age INT,
    color VARCHAR(50),
    description TEXT,
    image TEXT
)";
if ($conn->query($sql) === TRUE) {
echo "Table created successfully";
} else {
echo "Error creating table: " . $conn->error;
}
$conn->close();
?>