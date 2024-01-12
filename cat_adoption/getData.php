<?php

function getRandoms()
{
    include("config.php");
    // $sql = "SELECT * FROM todo ORDER BY title asc limit 10 offset 1";

    $sql = "SELECT * FROM cats ORDER BY RAND() LIMIT 3";
    // * fetch all fields (id,title,msg)
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        return $row = $result->fetch_all();
    } else {
        echo "No record found!";
    }
    $conn->close();
}

?>