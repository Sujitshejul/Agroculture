<?php

    $serverName = "localhost:3307";
    $userName = "sujit";
    $password = "sujit@1234";
    $dbName = "agroculture";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
