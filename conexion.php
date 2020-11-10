<?php
    $servername = "localhost";
    $database = "db_peliculas";
    $username = "root";
    $password = "";
    // Create connection
    $sql = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$sql) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
    //mysqli_close($
    

?>