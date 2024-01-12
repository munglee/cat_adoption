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
$sql = "INSERT INTO cats (id, cat_name, sex, age, color, description, image)
VALUES
    (1, 'Fluffy', 'Female', 3, 'White', 'Adorable white cat with blue eyes.', 'images/cats/1.jpg'),
    (2, 'Whiskers', 'Male', 2, 'Tabby', 'Playful tabby cat with a long tail.', 'images/cats/2.jpg'),
    (3, 'Mittens', 'Female', 5, 'Black', 'Cuddly black cat with white paws.', 'images/cats/3.jpg'),
    (4, 'Simba', 'Male', 1, 'Orange', 'Energetic orange kitten with a playful personality.', 'images/cats/4.jpg'),
    (5, 'Luna', 'Female', 4, 'Calico', 'Graceful calico cat with a sweet demeanor.', 'images/cats/5.jpg'),
    (6, 'Oreo', 'Male', 2, 'Black and White', 'Adorable black and white cat with distinct markings.', 'images/cats/6.jpg'),
    (7, 'Cleo', 'Female', 6, 'Siamese', 'Beautiful Siamese cat with striking blue eyes.', 'images/cats/7.jpg'),
    (8, 'Max', 'Male', 3, 'Gray', 'Charming gray cat known for its friendly nature.', 'images/cats/8.jpg'),
    (9, 'Sasha', 'Female', 2, 'Brown Tabby', 'Playful brown tabby cat with a mischievous streak.', 'images/cats/9.jpg'),
    (10, 'Charlie', 'Male', 4, 'Spotted', 'Spotted cat with a curious and adventurous personality.', 'images/cats/10.jpg'),
    (11, 'Mocha', 'Female', 1, 'Chocolate', 'Sweet chocolate-colored kitten that loves to cuddle.', 'images/cats/11.jpg'),
    (12, 'Leo', 'Male', 5, 'Bengal', 'Strikingly patterned Bengal cat with a bold presence.', 'images/cats/12.jpg'),
    (13, 'Misty', 'Female', 3, 'Gray and White', 'Gentle gray and white cat that enjoys napping.', 'images/cats/13.jpg')";

if ($conn->query($sql) === TRUE) {
echo "Entries created successfully";
} else {
echo "Error creating table: " . $conn->error;
}
$conn->close();
?>