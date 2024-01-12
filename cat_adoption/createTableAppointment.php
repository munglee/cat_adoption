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

$sql = "CREATE TABLE CatAppointment (
    appointment_id INT AUTO_INCREMENT PRIMARY KEY,
    person_name VARCHAR(255),
    cat_id INT,
    appointment_date DATE,
    contact_phone VARCHAR(20),
    email VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
echo "Table created successfully";
} else {
echo "Error creating table: " . $conn->error;
}
$conn->close();

?>