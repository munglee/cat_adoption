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

$sql = "INSERT INTO CatAppointment (appointment_id, person_name, cat_id, appointment_date, contact_phone, email)
VALUES
    (1001, 'John Doe', 1, '2024-01-15', '+1 123-456-7890', 'john.doe@example.com'),
    (1002, 'Jane Smith', 2, '2024-01-16', '+1 234-567-8901', 'jane.smith@example.com'),
    (1003, 'Bob Johnson', 3, '2024-01-17', '+1 345-678-9012', 'bob.johnson@example.com'),
    (1004, 'Alice Brown', 4, '2024-01-18', '+1 456-789-0123', 'alice.brown@example.com'),
    (1005, 'Charlie Davis', 5, '2024-01-19', '+1 567-890-1234', 'charlie.davis@example.com'),
    (1006, 'Eva White', 6, '2024-01-20', '+1 678-901-2345', 'eva.white@example.com'),
    (1007, 'Frank Miller', 7, '2024-01-21', '+1 789-012-3456', 'frank.miller@example.com'),
    (1008, 'Grace Wilson', 8, '2024-01-22', '+1 890-123-4567', 'grace.wilson@example.com'),
    (1009, 'Henry Taylor', 9, '2024-01-23', '+1 901-234-5678', 'henry.taylor@example.com'),
    (1010, 'Ivy Lee', 10, '2024-01-24', '+1 012-345-6789', 'ivy.lee@example.com'),
    (1011, 'Jack Adams', 11, '2024-01-25', '+1 123-456-7890', 'jack.adams@example.com'),
    (1012, 'Kelly Hall', 12, '2024-01-26', '+1 234-567-8901', 'kelly.hall@example.com'),
    (1013, 'Leo Turner', 13, '2024-01-27', '+1 345-678-9012', 'leo.turner@example.com'),
    (1014, 'Mia Garcia', 3, '2024-01-28', '+1 456-789-0123', 'mia.garcia@example.com'),
    (1015, 'Nathan Clark', 1, '2024-01-29', '+1 567-890-1234', 'nathan.clark@example.com')";

if ($conn->query($sql) === TRUE) {
echo "Entries created successfully";
} else {
echo "Error creating table: " . $conn->error;
}
$conn->close();

?>