<?php
    $con = new mysqli("localhost", "root","", "life_of_artist"); +
    if ($con->connect_error) {
        die("Database failed to connect",$con->connect_error);
        echo "Database failed to connect";
    }
    else{
        echo "Database Connected Successfully";
    }
?>