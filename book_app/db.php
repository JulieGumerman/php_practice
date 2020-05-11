<?php 

    $connection = mysqli_connect('localhost', 'root', '',  'books');
        
    if (!$connection) {
        die("Database connection failed");
    } else {
        echo "It's wooorrrkiiinggg!!!";
    }

?>